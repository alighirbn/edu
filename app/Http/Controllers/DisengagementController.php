<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisengagementRequest;
use App\DataTables\DisengagementDataTable;
use App\Models\Disengagement;

class DisengagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DisengagementDataTable $dataTable)
    {
        
        return $dataTable->render('disengagement.index');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $Disengagements= Disengagement :: all();
        return view('disengagement.create', compact(['Disengagements']));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DisengagementRequest $request)
    {
        Disengagement::create($request->validated());
        return redirect()->route('disengagement.index')
            ->with('success', 'تمت أضافة  بنجاح ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $url_address)
    {
        $disengagement = Disengagement::where('url_address', '=', $url_address)->first();
        if (isset($disengagement)) {
            return view('disengagement.show', compact('disengagement'));
        } else {
            $ip = $this->getIPAddress();
            return view('disengagement.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $url_address)
    {
        //
        $disengagement = Disengagement::where('url_address', '=', $url_address)->first();
       if (isset($disengagement)) {
            return view('disengagement.edit', compact('disengagement'));
        } else {
            $ip = $this->getIPAddress();
            return view('disengagement.accessdenied', ['ip' => $ip]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DisengagementRequest $request, string $url_address)
    {
        // insert the user input into model and lareval insert it into the database.
        Disengagement::where('url_address', $url_address)->update($request->validated());

        //inform the user 
        return redirect()->route('disengagement.index')
            ->with('success', 'تمت تعديل بيانات  بنجاح ');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $url_address)
    {
        $affected = Disengagement::where('url_address', $url_address)->delete();
        return redirect()->route('disengagement.index')
            ->with('success', 'تمت حذف بيانات  بنجاح ');
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
