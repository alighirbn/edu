<?php

namespace App\Http\Controllers\Financial;

use App\DataTables\Payroll_DateDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Financial\Payroll_DateRequest;
use App\Models\Financial\Payroll_Date;

class Payroll_DateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Payroll_DateDataTable $dataTable)
    {
        return $dataTable->render('financial.payroll_date.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('financial.payroll_date.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Payroll_DateRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
        Payroll_Date::create($request->validated());
        return redirect()->route('payroll_date.index')
            ->with('success', 'تمت أضافة الشهر بنجاح ');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $payroll_date = Payroll_Date::where('url_address', '=', $url_address)->first();
        if (isset($payroll_date)) {
            return view('financial.payroll_date.show', compact('payroll_date'));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll_date.accessdenied', ['ip' => $ip]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
        //
        $payroll_date = Payroll_Date::where('url_address', '=', $url_address)->first();
        if (isset($payroll_date)) {
            return view('financial.payroll_date.edit', compact('payroll_date'));
        } else {
            $ip = $this->getIPAddress();
            return view('financial.payroll_date.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Payroll_DateRequest $request, string $url_address)
    {
        // insert the user input into model and lareval insert it into the database.
        Payroll_Date::where('url_address', $url_address)->update($request->validated());

        //inform the user
        return redirect()->route('payroll_date.index')
            ->with('success', 'تمت تعديل بيانات الشهر بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Payroll_Date::where('url_address', $url_address)->delete();
        return redirect()->route('payroll_date.index')
            ->with('success', 'تمت حذف بيانات الشهر بنجاح ');
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
