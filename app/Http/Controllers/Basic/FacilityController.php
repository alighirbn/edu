<?php

namespace App\Http\Controllers\Basic;

use App\DataTables\FacilityDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Basic\FacilityRequest;
use App\Models\Basic\Facility\duality;
use App\Models\Basic\Facility\Facility;
use App\Models\Basic\Facility\Facility_Type;
use App\Models\Basic\Facility\main_section;
use App\Models\Basic\Facility\School_Gender;
use App\Models\Basic\Facility\School_Invironment;
use App\Models\Basic\Facility\School_Property;
use App\Models\Basic\Facility\School_Stage;
use App\Models\Basic\Facility\School_Time;
use App\Models\Province;
use App\Models\YesNo;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FacilityDataTable $dataTable)
    {
        return $dataTable->render('basic.facility.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $facility_parents = Facility::all();
        $facility_types = Facility_Type::all();
        $duality = duality::all();
        $main_section = main_section::all();
        $school_gender = School_Gender::all();
        $school_invironment = School_Invironment::all();
        $school_property = School_Property::all();
        $school_stage = School_Stage::all();
        $school_time = School_Time::all();
        $provinces = Province::all();
        $yesnos = YesNo::all();
        return view('basic.facility.create', compact(['facility_parents', 'facility_types', 'duality', 'main_section', 'school_gender', 'school_invironment', 'school_property', 'school_stage', 'school_time', 'yesnos', 'provinces']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FacilityRequest $request)
    {
        // insert the user input into model and lareval insert it into the database.
        Facility::create($request->validated());

        //inform the user
        return redirect()->route('facility.index')
            ->with('success', 'تمت أضافة المؤسسة بنجاح ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $facility = Facility::where('url_address', '=', $url_address)->first();
        if (isset($facility)) {
            return view('basic.facility.show', compact('facility'));
        } else {
            $ip = $this->getIPAddress();
            return view('basic.facility.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {

        $facility = Facility::where('url_address', $url_address)->first();
        $facility_parents = Facility::all();
        $facility_types = Facility_Type::all();
        $duality = Duality::all();
        $main_section = Main_section::all();
        $school_gender = School_gender::all();
        $school_invironment = School_invironment::all();
        $school_property = School_property::all();
        $school_stage = School_stage::all();
        $school_time = School_time::all();
        $provinces = Province::all();
        $yesnos = YesNo::all();

        $facility = Facility::where('url_address', '=', $url_address)->first();
        if (isset($facility)) {
            return view('basic.facility.edit', compact(['facility', 'facility_parents', 'facility_types', 'duality', 'main_section', 'school_gender', 'school_invironment', 'school_property', 'school_stage', 'school_time', 'yesnos', 'provinces']));

        } else {
            $ip = $this->getIPAddress();
            return view('basic.facility.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FacilityRequest $request, string $url_address)
    {
        Facility::where('url_address', $url_address)->update($request->validated());
        // Notify related users
        return redirect()->route('facility.index')
            ->with('success', 'تمت تعديل بيانات المؤسسة بنجاح ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Facility::where('url_address', $url_address)->delete();
        return redirect()->route('facility.index')
            ->with('success', 'تمت حذف بيانات المؤسسة بنجاح ');
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
