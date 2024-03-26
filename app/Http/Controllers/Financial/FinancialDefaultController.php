<?php

namespace App\Http\Controllers\Financial;

use App\Http\Controllers\Controller;
use App\Models\Basic\Employee\Academic_Achievement;
use App\Models\Basic\Employee\Agricultural_Risk;
use App\Models\Basic\Employee\Assignment_Type;
use App\Models\Basic\Employee\Children_Count;
use App\Models\Basic\Employee\Contract_Type;
use App\Models\Basic\Employee\Danager_Provision;
use App\Models\Basic\Employee\Driver_Allowance;
use App\Models\Basic\Employee\Electric_Shock;
use App\Models\Basic\Employee\Marital_Status;
use App\Models\Basic\Employee\Night_Watchman;
use App\Models\Basic\Employee\Scientific_Title_Stage;
use App\Models\Basic\Employee\Security_Guard;
use App\Models\Basic\Employee\University_Service;
use App\Models\Financial\Salary_Scale;

class FinancialDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get al related tables
        $salary_scales = Salary_Scale::with(['get_job_grade', 'get_career_stage'])->get();
        $academic_achievements = Academic_Achievement::with('get_amount_type')->get();
        $assignment_types = Assignment_Type::with('get_amount_type')->get();
        $agricultural_risks = Agricultural_Risk::with('get_amount_type')->get();
        $children_counts = Children_Count::with('get_amount_type')->get();
        $danager_provisions = Danager_Provision::with('get_amount_type')->get();
        $driver_allowances = Driver_Allowance::with('get_amount_type')->get();
        $electric_shocks = Electric_Shock::with('get_amount_type')->get();
        $marital_statuss = Marital_Status::with('get_amount_type')->get();
        $night_watchmans = Night_Watchman::with('get_amount_type')->get();
        $scientific_title_stages = Scientific_Title_Stage::with('get_amount_type')->get();
        $security_guards = Security_Guard::with('get_amount_type')->get();
        $university_services = University_Service::with('get_amount_type')->get();
        $contract_types = Contract_Type::with([
            'get_amount_type',
            'get_amount_type_retirement',
            'get_amount_type_Social_Welfare_Fund',
            'get_amount_type_support_fund',
        ])->get();

        return view('financial.financial_default.index', compact([
            'salary_scales',
            'academic_achievements',
            'assignment_types',
            'agricultural_risks',
            'children_counts',
            'danager_provisions',
            'driver_allowances',
            'electric_shocks',
            'marital_statuss',
            'night_watchmans',
            'scientific_title_stages',
            'security_guards',
            'university_services',
            'contract_types',
        ]));

    }

}
