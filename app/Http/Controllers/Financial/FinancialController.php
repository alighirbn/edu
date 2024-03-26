<?php

namespace App\Http\Controllers\Financial;

use App\Http\Controllers\Controller;

class FinancialController extends Controller
{
    //
    public function index()
    {
        return view('financial.index');
    }

}
