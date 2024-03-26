<?php

namespace App\Http\Controllers\Financial;

use App\DataTables\FinancialAccountantDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\FinancialAccountantRequest;
use App\Models\Basic\Facility\Facility;
use App\Models\Department;
use App\Models\Financial\Financial_Accountant;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class FinancialAccountantController extends Controller
{

    public function index(FinancialAccountantDataTable $dataTable)
    {
        return $dataTable->render('financial.financial_accountant.index');
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $data = Facility::Where('facility_accountent_id', null)->with(['get_facility_type_id', 'get_facility_parent_id', 'get_department'])->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('id_checkbox', static function ($row) {return '<input type="checkbox" name="facility[' . $row->id . ']" value="' . $row->id . '" class="facility"/>';})
                ->rawColumns(['id_checkbox'])
                ->make(true);
        }
        $users = User::role('accountant')->get();
        $departments = Department::all();
        return view('financial.financial_accountant.create', compact(['departments', 'users']));
    }

    public function store(FinancialAccountantRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
        $financial_accountent_id = Financial_Accountant::create($request->validated());
        // update the facility table to get accountent id
        $facilitys = $request->input('facility');
        foreach ($facilitys as $facility_id) {
            $facility = Facility::find($facility_id);
            $facility->facility_accountent_id = $financial_accountent_id->id;
            $facility->save();
        }

        //inform the user
        return redirect()->route('financial_accountant.index')
            ->with('success', 'تمت أضافة المحاسب بنجاح ');
    }

    public function show(string $url_address)
    {
        $financial_accountant = Financial_Accountant::where('url_address', '=', $url_address)->first();

        if (isset($financial_accountant)) {
            $facilitys = Facility::with(['get_facility_type_id', 'get_facility_parent_id'])->where('facility_accountent_id', $financial_accountant->id)->get();
            return view('financial.financial_accountant.show', compact(['financial_accountant', 'facilitys']));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.financial_accountant.accessdenied', ['ip' => $ip]);
        }
    }

    public function edit(string $url_address)
    {

        $financial_accountant = Financial_Accountant::where('url_address', '=', $url_address)->first();
        if (isset($financial_accountant)) {
            $users = User::role('accountant')->get();
            $facilitys = Facility::with(['get_facility_type_id', 'get_facility_parent_id'])->where('facility_accountent_id', $financial_accountant->id)->orWhere('facility_accountent_id', null)->get();
            $departments = Department::all();
            return view('financial.financial_accountant.edit', compact(['financial_accountant', 'departments', 'users']));

        } else {
            $ip = $this->getIPAddress();
            return view('financial.financial_accountant.accessdenied', ['ip' => $ip]);
        }

    }

    public function edit_facility(Request $request)
    {
        if ($request->ajax()) {
            $financial_accountant = Financial_Accountant::where('url_address', '=', $request->url_address)->first();
            $data = Facility::with(['get_facility_type_id', 'get_facility_parent_id', 'get_department'])->where('facility_accountent_id', $financial_accountant->id)->orWhere('facility_accountent_id', null)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('id_checkbox', static function ($row) {
                    if (isset($row->facility_accountent_id)) {
                        return '<input type="checkbox" name="facility[' . $row->id . ']" value="' . $row->id . '"  checked  class="facility"/>';
                    } else {
                        return '<input type="checkbox" name="facility[' . $row->id . ']" value="' . $row->id . '"    class="facility"/>';
                    }
                })
                ->rawColumns(['id_checkbox'])
                ->make(true);
        }
    }

    public function update(FinancialAccountantRequest $request, string $url_address)
    {
        Financial_Accountant::where('url_address', $url_address)->update($request->validated());

        // first set all facility -> facility_accountent_id to null

        $old_facilitys = Facility::where('facility_accountent_id', $request->input('id'))->get();
        foreach ($old_facilitys as $facility) {
            $facility->facility_accountent_id = null;
            $facility->save();
        }

        // update the checked values with accountent_id  in facility -> facility_accountent_id
        $facilitys = $request->input('facility');
        if (isset($facilitys)) {
            foreach ($facilitys as $facility_id) {
                $facility = Facility::find($facility_id);
                $facility->facility_accountent_id = $request->id;
                $facility->save();
            }
        }

        // Notify related users
        return redirect()->route('financial_accountant.index')
            ->with('success', 'تمت تعديل بيانات المحاسب بنجاح ');
    }

    public function destroy(string $url_address)
    {
        $affected = Financial_Accountant::where('url_address', $url_address)->delete();
        return redirect()->route('financial_accountant.index')
            ->with('success', 'تمت حذف بيانات المحاسب بنجاح ');
    }

    public function getIPAddress()
    {
        //whether ip is from the share internet
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        //whether ip is from the proxy
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        //whether ip is from the remote address
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
