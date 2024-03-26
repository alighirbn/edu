<?php

namespace App\Http\Controllers\Financial;

use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\FinancialEmployeeRequest;
use App\Http\Requests\Financial\PayrollRequest;
use App\Models\Basic\Employee\Academic_Achievement;
use App\Models\Basic\Employee\Agricultural_Risk;
use App\Models\Basic\Employee\Assignment_Type;
use App\Models\Basic\Employee\Career_Stage;
use App\Models\Basic\Employee\Children_Count;
use App\Models\Basic\Employee\Contract_Type;
use App\Models\Basic\Employee\Danager_Provision;
use App\Models\Basic\Employee\Driver_Allowance;
use App\Models\Basic\Employee\Electric_Shock;
use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Employee\Employee_Status;
use App\Models\Basic\Employee\Employment_Type;
use App\Models\Basic\Employee\Job_Grade;
use App\Models\Basic\Employee\Job_Title;
use App\Models\Basic\Employee\Marital_Status;
use App\Models\Basic\Employee\Night_Watchman;
use App\Models\Basic\Employee\Scientific_Title_Stage;
use App\Models\Basic\Employee\Security_Guard;
use App\Models\Basic\Employee\University_Service;
use App\Models\Basic\Facility\Facility;
use App\Models\Financial\Financial_Accountant;
use App\Models\Financial\Payroll;
use App\Models\Financial\Payroll_Date;
use App\Models\Financial\Salary_Scale;
use App\Services\Financial\Payroll_Services;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PayrollController extends Controller
{

    public function index(Request $request)
    {

        // ajax response (DataTable DataSource)
        if ($request->ajax()) {

            $data = Payroll::with('get_employee:id,job_number,full_name,mother_full_name,bank_account,card_id')
                ->where('payroll.user_id_create', auth()->id());
            //return datatable
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return view('financial.payroll.action', compact(['row']));
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('financial.payroll.index');
    }

    public function employees_list(Request $request)
    {
        // last financial month
        $payroll_date = Payroll_Date::latest()->first();
        // get accountant id based on login user->id
        $financial_accountant = Financial_Accountant::where('user_id', '=', auth()->id())->first();

        // ajax response (DataTable DataSource)
        if ($request->ajax()) {
            $facilitys = Facility::select('id')->where('facility_accountent_id', $financial_accountant->id)->get();

            // if payroll_month->status is active return all related employees otherwise return empty list
            if (isset($payroll_date) && $payroll_date->status == 'active') {
                $data = Employee::with(['get_payroll_facility', 'get_last_payroll', 'get_payroll_last_values'])->wherein('salary_address_id', $facilitys);
            } else {
                $data = Employee::with(['get_payroll_facility', 'get_last_payroll'])->where('id', 0);
            }
            //return datatable of related employees
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('color', function ($row) use ($payroll_date) {
                    return view('financial.payroll.employees_list_color', compact(['row']))->with('payroll_date', $payroll_date);
                })
                ->addColumn('action', function ($row) use ($payroll_date) {
                    return view('financial.payroll.employees_list_action', compact(['row']))->with('payroll_date', $payroll_date);
                })
                ->addColumn('note', function ($row) use ($payroll_date) {
                    return view('financial.payroll.employees_list_note', compact(['row']))->with('payroll_date', $payroll_date);
                })
                ->rawColumns(['color', 'action', 'note'])
                ->make(true);
        }

        if (isset($financial_accountant)) {
            $facilitys = Facility::select('id', 'name')->where('facility_accountent_id', $financial_accountant->id)->get();
            return view('financial.payroll.employees_list', compact('payroll_date', 'facilitys'));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);
        }
    }

    public function create($url_address)
    {
        // check if account exist else access denied
        $financial_accountant = Financial_Accountant::where('user_id', '=', auth()->id())->first();
        if (isset($financial_accountant)) {
            // get all facilitys of related accountant
            $facilitys = Facility::select('id')->where('facility_accountent_id', $financial_accountant->id)->get();

            // get employee with relationships (secondary tables) to get amount type and amount values.
            $employee = Employee::with([

                'get_job_title',
                'get_contract_type',
                'get_electric_shock',
                'get_university_service',
                'get_academic_achievement',
                'get_assignment_type',
                'get_danager_provision',
                'get_payroll_facility.get_main_section_id',
                'get_scientific_title_stage',
                'get_marital_status',
                'get_children_count',
                'get_security_guard',
                'get_night_watchman',
                'get_agricultural_risk',
                'get_driver_allowance',
                'get_payroll_last_values',

            ])->where('url_address', '=', $url_address)->wherein('salary_address_id', $facilitys)->first();

            // if employee related to facility[] exist show view else access denied.
            if (isset($employee)) {
                // get nominal salary value basied on curent job grade and career stage
                $salary_scale = Salary_Scale::where('job_grade_id', $employee['job_grade_id'])->where('career_stage_id', $employee['career_stage_id'])->first();
                // get last financial month
                $payroll_date = Payroll_Date::latest()->first();

                return view('financial.payroll.create', compact(['employee', 'payroll_date', 'salary_scale', 'financial_accountant']));
            } else {
                $ip = $this->getIPAddress();
                return view('financial.payroll.accessdenied', ['ip' => $ip]);
            }
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);

        }
    }

    public function store(PayrollRequest $request, Payroll_Services $service)
    {
        try {
            $service->store($request);
        } catch (\Exception $ex) {
            return redirect()->route('payroll.employees_list')
                ->with('failure', $ex->getMessage());
        }
        return redirect()->route('payroll.employees_list')
            ->with('success', 'تمت أضافة الراتب بنجاح ');
    }

    public function auto_fill($url_address, Payroll_Services $service)
    {
        $service->auto_fill($url_address);
        return redirect()->route('payroll.employees_list')
            ->with('success', 'تمت اضافة بيانات الراتب بنجاح  (راتب الشهر السابق) ');

    }

    public function add_all(Payroll_Services $service)
    {
        $service->add_all();
        return redirect()->route('payroll.employees_list')
            ->with('success', 'تم اضافة رواتب الشهر السابق لكل الموظفيين');

    }

    public function show($url_address)
    {
        // get  payroll for related user if not access denied.
        $payroll = Payroll::where('url_address', '=', $url_address)->where('user_id_create', '=', auth()->id())->first();
        if (isset($payroll)) {
            return view('financial.payroll.show', compact('payroll'));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);
        }

    }

    public function sum_payrolls(Payroll_Services $service)
    {
        try {
            $payrolls = $service->sum_payrolls();
        } catch (\Exception $ex) {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);

        }
        return view('financial.payroll.sum', compact('payrolls'));
    }

    public function edit($url_address)
    {

        $payroll_date = Payroll_Date::latest()->first();
        $payroll = Payroll::where('url_address', '=', $url_address)->where('user_id_create', '=', auth()->id())->first();

        if (isset($payroll) && $payroll_date->id == $payroll->financial_month_id) {

            $employee = Employee::with([

                'get_job_title',
                'get_contract_type',
                'get_electric_shock',
                'get_university_service',
                'get_academic_achievement',
                'get_assignment_type',
                'get_danager_provision',
                'get_payroll_facility.get_main_section_id',
                'get_scientific_title_stage',
                'get_marital_status',
                'get_children_count',
                'get_security_guard',
                'get_night_watchman',
                'get_agricultural_risk',
                'get_driver_allowance',

            ])->where('id', '=', $payroll['employee_id'])->first();

            $salary_scale = Salary_Scale::where('job_grade_id', $employee['job_grade_id'])->where('career_stage_id', $employee['career_stage_id'])->first();

            return view('financial.payroll.edit', compact(['payroll', 'employee', 'payroll_date', 'salary_scale']));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);

        }
    }

    public function update(PayrollRequest $request, $url_address, Payroll_Services $service)
    {
        $service->update($request, $url_address);
        // Notify related users
        return redirect()->route('payroll.employees_list')
            ->with('success', 'تمت تعديل بيانات الراتب بنجاح ');
    }

    public function employee_edit(string $url_address)
    {
        //get all tables data and compact for view
        $employee = Employee::where('url_address', $url_address)->first();

        $contract_types = Contract_Type::all();
        $employee_statuss = Employee_Status::all();
        $employment_types = Employment_Type::all();
        $assignment_types = Assignment_Type::all();
        $danager_provisions = Danager_Provision::all();
        $scientific_title_stages = Scientific_Title_Stage::all();
        $job_titles = Job_Title::all();
        $job_grades = Job_Grade::all();
        $career_stages = Career_Stage::all();
        $university_services = University_Service::all();
        $electric_shocks = Electric_Shock::all();
        $security_guards = Security_Guard::all();
        $night_watchmans = Night_Watchman::all();
        $driver_allowances = Driver_Allowance::all();
        $agricultural_risks = Agricultural_Risk::all();
        $marital_statuss = Marital_Status::all();
        $academic_achievements = Academic_Achievement::all();
        $children_counts = Children_Count::all();

        if (isset($employee)) {
            return view('financial.employee.edit', compact([
                'employee',
                'children_counts',
                'contract_types',
                'employee_statuss',
                'employment_types',
                'assignment_types',
                'scientific_title_stages',
                'job_titles',
                'job_grades',
                'career_stages',
                'marital_statuss',
                'academic_achievements',
                'danager_provisions',
                'university_services',
                'electric_shocks',
                'security_guards',
                'night_watchmans',
                'driver_allowances',
                'agricultural_risks',
            ]));

        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);
        }

    }
    public function employee_update(FinancialEmployeeRequest $request, string $url_address)
    {

        // insert the user input into model and lareval insert it into the database.
        Employee::where('url_address', $url_address)->update($request->validated());
        // get curent financial month
        $payroll_date = Payroll_Date::latest()->first();

        $employee = Employee::where('url_address', $url_address)
            ->with('get_last_payroll:employee_id,payroll_month,url_address')
            ->first();

        if (isset($employee['get_last_payroll']) && $employee->get_last_payroll->payroll_month == $payroll_date->payroll_month) {
            return to_route('payroll.edit', $employee->get_last_payroll->url_address);
        } else {
            return to_route('payroll.create', $url_address);
        }
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

    public function get_random_string($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(22, $length);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }
}
