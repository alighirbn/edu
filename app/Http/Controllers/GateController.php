<?php

namespace App\Http\Controllers;

use App\Models\Basic\Employee\Employee;
use App\Models\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class GateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gateValues = Gate::wherein('gate_type', [1, 2])->get();

        return view('gates.index', compact('gateValues'));
    }

    public function inputs()
    {
        $gateValues = Gate::where('gate_type', 1)->get();

        return view('gates.index', compact('gateValues'));

    }


    public function outputs()
    {
        $gateValues = Gate::where('gate_type', 1)->get();
        return view('gates.index', compact('gateValues'));
    }


    public function newOrders()
    {

        $gateValues = Gate::where('order_date', "")
            ->with('get_order_type:id,name')
            -> orderBy('id','desc')
            ->get();

        for($i = 0 ; $i <count($gateValues) ; $i++) {
            $employee_id  = DB::table($gateValues[$i]->source_table)
                ->where('id',$gateValues[$i]->source_id)
                ->get('employee_id')->first()->employee_id ;

            $gateValues[$i]['employee_id'] = $employee_id ;
            $gateValues[$i]['employee_full_name'] = Employee::where('id' , $employee_id)->get('full_name')->first()->full_name ;


        }





        return view('gates.index', compact('gateValues'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show($gateId)
    {
        $order = Gate::where('id', $gateId)
            ->with('get_employee:id,full_name')
            ->with('get_order_type:id,name')
            ->with('get_source_facility:id,name')
            ->get()->first();

        return view('gates.show', compact('order'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gate $gate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $gateId)
    {
/// add number and date to order

        Gate::where('id', $gateId)->update(
            [
                'order_number' => $request->input('order_number'),
                'order_date' => $request->input('order_date'),
                'foundation_from' => $request->input('foundation_from'),
                'foundation_to' => $request->input('foundation_to'),
                'user_id' => Auth()->user()->id,
                'notes' => $request->input('notes'),
            ]
        );


        return redirect()->route('gate.newOrders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gate $gate)
    {
        //
    }
}
