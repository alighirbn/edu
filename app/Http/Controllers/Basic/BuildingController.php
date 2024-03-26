<?php

namespace App\Http\Controllers\Basic;

use App\DataTables\BuildingDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Basic\BuildingRequest;
use App\Models\Basic\Building\Building;
use App\Models\Basic\Building\Building_Status;
use App\Models\Basic\Building\Building_Type;
use App\Models\YesNo;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BuildingDataTable $dataTable)
    {
        return $dataTable->render('basic.building.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $building_statuses = Building_Status::all();
        $building_types = Building_Type::all();
        $yesnos = YesNo::all(); //add this line & use App\Models\YesNo;
        return view('basic.building.create', compact(['building_statuses', 'building_types', 'yesnos']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BuildingRequest $request)
    {
        Building::create($request->validated());

        //inform the user
        return redirect()->route('building.index')
            ->with('success', 'تمت أضافة البناية بنجاح ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $building = Building::where('url_address', '=', $url_address)->first();
        if (isset($building)) {
            return view('basic.building.show', compact('building'));
        } else {
            $ip = $this->getIPAddress();
            return view('basic.building.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
        $building_statuses = Building_Status::all();
        $building_types = Building_Type::all();
        $yesnos = YesNo::all(); //add this line & use App\Models\YesNo;

        $building = Building::where('url_address', '=', $url_address)->first();
        if (isset($building)) {
            return view('basic.building.edit', compact('building', 'building_statuses', 'building_types', 'yesnos'));
        } else {
            $ip = $this->getIPAddress();
            return view('basic.building.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BuildingRequest $request, string $url_address)
    {
        // insert the user input into model and lareval insert it into the database.
        Building::where('url_address', $url_address)->update($request->validated());

        //inform the user
        return redirect()->route('building.index')
            ->with('success', 'تمت تعديل بيانات البناية بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Building::where('url_address', $url_address)->delete();
        return redirect()->route('building.index')
            ->with('success', 'تمت حذف بيانات البناية بنجاح ');
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
