<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ges\JoinsRequest;

use App\Models\ges\Joins;
use App\Models\ges\Movement_orders;
use App\Models\ges\Movement_order_type;

use App\Models\Basic\Facility\Facility;
use App\Models\Basic\Employee\Employee;
use App\DataTables\JoinsDataTable;





use App\Models\ges\Joins_type;


class joinsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(JoinsDataTable $dataTable)
    {
        return $dataTable->render('ges.primarystaff.joins.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Movement=Movement_orders::all();
        $Joins_type = Joins_type::all();
        $joins = Joins::all();
        
        return view('ges.primarystaff.joins.create', compact(['Joins_type', 'joins','Movement']));
    
    }
    

    function fetch(Request $request)
    {$p=['movement_order_date','employee_id','movement_from','movement_to','movement_order_type','order_leave'];
       $p=Movement_orders::select('movement_order_date','employee_id','movement_from','movement_to','movement_order_type')
                           ->where('id',$request->id)->first(); 
       $p['employee_id'] = Employee::select('full_name')->where('id',$p->employee_id)->first();                   
     
       $p['movement_to'] = Facility::select('name')->where('id',$p->movement_to)->first();  
       $p['movement_order_type'] = Movement_order_type::select('order_type_name')->where('id',$p->movement_order_type)->first();
       
       $p['order_leave'] =Joins::select('joins_order','joins_date')->where('movement_order_number',$request->id)->first(); 
                 
                           
                           
        return response()->json($p);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JoinsRequest $request)
    {
        //
        Joins::create($request->validated());
        //inform the user 
        return redirect()->route('joins.index')
            ->with('success', 'تمت أضافة  بنجاح ');
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $url_address)
    {
        //
        $affected =Joins::where('url_address', $url_address)->delete();
        return redirect()->route('Movement_orders.index')
            ->with('success', 'تمت حذف بيانات  بنجاح ');
    }
}
