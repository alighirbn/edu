<?php

namespace App\Services\Financial;

use App\Http\Requests\Financial\PayrollRequest;
use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Facility\Facility;
use App\Models\Financial\Financial_Accountant;
use App\Models\Financial\Payroll;
use App\Models\Financial\Payroll_Date;
use App\Models\Financial\Payroll_Last_Values;

class Payroll_Services
{

    public function store(PayrollRequest $request): Payroll
    {
        $payroll_chacker = Payroll::where('employee_id', $request->employee_id)->where('financial_month_id', $request->financial_month_id)->first();
        if (isset($payroll_chacker)) {
            throw new \Exception('الراتب مضاف بالفعل');
        } else {

            // insert the user input into model and lareval insert it into the database.
            $payroll_id = Payroll::create($request->validated());

            // insert or update payroll_last_values model and lareval insert it into the database.

            $payroll_last_values = Payroll_Last_Values::where('employee_id', $request->employee_id)->first();
            $colunms = $request->only(app(Payroll_Last_Values::class)->getFillable());

            if (isset($payroll_last_values)) {
                $payroll_last_values->update($colunms);

            } else {
                Payroll_Last_Values::create($colunms);
            }

            //  update nominal_salary and total_salary in employee table
            Employee::where('id', $request->employee_id)->update([
                'nominal_salary' => $request->nominal_salary_amount,
                'total_salary' => $request->total_salary_amount,
            ]);

            return $payroll_id;
        }

    }
    public function update(PayrollRequest $request, $url_address)
    {
        $payroll = Payroll::where('url_address', '=', $url_address)->update($request->validated());

        $payroll_last_values = Payroll_Last_Values::where('employee_id', $request->employee_id)->first();
        $colunms = $request->only(app(Payroll_Last_Values::class)->getFillable());
        if (isset($payroll_last_values)) {
            $payroll_last_values->update($colunms);

        } else {
            Payroll_Last_Values::create($colunms);
        }

        //  update nominal_salary and total_salary in employee table
        Employee::where('id', $request->employee_id)->update([
            'nominal_salary' => $request->nominal_salary_amount,
            'total_salary' => $request->total_salary_amount,
        ]);
        // Notify related users
        return $payroll;
    }
    public function auto_fill($url_address): Payroll
    {
        // get curent financial month
        $payroll_date = Payroll_Date::latest()->first();

        // get last payroll for related employee
        $last_payroll = Payroll::where('url_address', '=', $url_address)->first();
        // replicate last payroll and save it to storage
        $new_payroll = $last_payroll->replicate();
        $new_payroll->save();

        // modify values accordingly
        Payroll::where('id', $new_payroll->id)->update([
            'url_address' => $this->get_random_string(60),
            'user_id_update' => null,
            'payroll_month' => $payroll_date->payroll_month,
            'payroll_year' => $payroll_date->payroll_year,
            'financial_month_id' => $payroll_date->id,
        ]);
        // reroute to employees_list
        return $new_payroll;

    }
    public function sum_payrolls()
    {
        $payroll_date = Payroll_Date::latest()->first();
        // get accountant id based on login user->id
        $financial_accountant = Financial_Accountant::where('user_id', '=', auth()->id())->first();

        $payrolls = Payroll::where('financial_month_id', $payroll_date->id)
            ->where('financial_accountent_id', $financial_accountant->id)
            ->selectRaw('sum(nominal_salary_amount) as nominal_salary_total,
            sum(total_salary_amount) as total_salary_total,
            sum(transportation_allowances_amount) as transportation_allowances_total,
            facility_id')
            ->groupBy('facility_id')
            ->with('get_facility:id,name')->get();

        if (isset($payrolls)) {
            return $payrolls;
        } else {
            throw new \Exception('Access Diened');

        }

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
    public function add_all()
    {
        $payroll_date = Payroll_Date::latest()->first();
        // get accountant id based on login user->id
        $financial_accountant = Financial_Accountant::where('user_id', '=', auth()->id())->first();
        $facilitys = Facility::select('id')->where('facility_accountent_id', $financial_accountant->id)->get();
        $employees = Employee::wherein('salary_address_id', $facilitys)->with(['get_payroll_facility', 'get_last_payroll', 'get_payroll_last_values'])->get();

        foreach ($employees as $employee) {

            if (isset($employee->get_last_payroll) && $employee->get_last_payroll->financial_month_id == $payroll_date->id) {
            } elseif (isset($employee->get_last_payroll)) {
                $this->auto_fill($employee->get_last_payroll->url_address);
            }
        }
    }
}
