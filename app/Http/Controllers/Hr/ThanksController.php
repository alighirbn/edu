<?php

namespace App\Http\Controllers\Hr;

use App\Services\Hr\ThanksServices;
use App\Http\Controllers\Controller;
use App\Models\Hr\Thanks\Thanks_Order;
use App\Http\Requests\Hr\ThanksRequest;
use App\Models\Basic\Employee\Employee;


class ThanksController extends Controller
{
    public function create($url_address)
    {
        // get employee with relationships (secondary tables) .
        $employees = Employee::with(['get_work_address',])
            ->wherein('department_id', 1)->get();

        // if employee related to department exist show view else access denied.
        if (isset($employees)) {
            return view('financial.payroll.create', compact(['employees']));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);
        }
    }

    public function store(ThanksRequest $request, ThanksServices $service)
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

    public function edit($url_address)
    {
        $thanks_order = Thanks_Order::where('url_address', '=', $url_address)->first();

        if (isset($thanks_order)) {

            // get employee with relationships (secondary tables) .
            $employees = Employee::with(['get_work_address',])
                ->wherein('department_id', 1)->get();

            return view('financial.payroll.edit', compact(['thanks_order', 'employees']));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll.accessdenied', ['ip' => $ip]);
        }
    }

    public function update(ThanksRequest $request, $url_address, ThanksServices $service)
    {
        $service->update($request, $url_address);
        // Notify related users
        return redirect()->route('payroll.employees_list')
            ->with('success', 'تمت تعديل بيانات الراتب بنجاح ');
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
