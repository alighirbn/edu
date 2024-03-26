<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ges\Movement_orders;
use App\DataTables\Movement_ordersDataTable;
use App\Http\Requests\ges\Movement_ordersRequest;
use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Facility\Facility;
use App\Models\ges\Movement_order_type;

class Movement_ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Movement_ordersDataTable $dataTable)
    {
         return $dataTable->render('ges.primarystaff.movementoreders.index');
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Movement_order_type = Movement_order_type::all();
        $employee = Employee::all(['id','name', 'full_name', 'facility_id']);
        $allFacilitys = Facility::all(['id', 'name',]);
        $Movements = Movement_orders::all();
        return view('ges.primarystaff.movementoreders.create', compact(['Movement_order_type', 'allFacilitys', 'employee','Movements',]));
    
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Movement_ordersRequest $request)
    {
        //

        Movement_orders::create($request->validated());
        //inform the user 
        return redirect()->route('Movement_orders.index')
            ->with('success', 'تمت أضافة  بنجاح ');
    }

   
    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        //
        $employee = Movement_orders::where('url_address', '=', $url_address)->first();
        if (isset($employee)) {
            return view('ges.primarystaff.movementoreders.show', compact('employee'));
        } else {
            $ip = $this->getIPAddress();
            return view('ges.primarystaff.movementoreders.accessdenied', ['ip' => $ip]);
            
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
        //
        $Movement_order_type = Movement_order_type::all();
        $employee = Employee::all(['id','name', 'full_name', 'facility_id']);
        $allFacilitys = Facility::all(['id', 'name',]);
        $Movements = movement_orders::all();

        $move = Movement_orders::where('url_address', '=', $url_address)->first();
        if (isset($move)) {
            return view('ges.primarystaff.movementoreders.edit', compact(['move','Movement_order_type', 'allFacilitys', 'employee','Movements',]));
        } else {
            $ip = $this->getIPAddress();
            return view('ges.primarystaff.movementoreders.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Movement_ordersRequest $request, string $url_address)
    {
        //
        Movement_orders::where('url_address', $url_address)->update($request->validated());
         return redirect()->route('Movement_orders.index')
                          ->with('success', 'تمت تعديل بيانات  بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        //
        $affected = Movement_orders::where('url_address', $url_address)->delete();
        return redirect()->route('Movement_orders.index')
            ->with('success', 'تمت حذف بيانات  بنجاح ');
    }
    function fetch(Request $request)
    {
       $p=Employee::select('facility_id')->where('id',$request->id)->first();
        $pp=Facility::select('name')->where('id',$p->facility_id)->first();
       return response()->json($pp);
    }
    function getIPAddress()
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
