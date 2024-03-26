<?php

namespace App\Models\Financial;

use App\Models\Basic\Employee\Employee;
use App\Models\Basic\Facility\Facility;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $table = 'payroll';

    public function get_employee()
    {
        return $this->hasone(Employee::class, 'id', 'employee_id');
    }
    public function get_facility()
    {
        return $this->hasone(Facility::class, 'id', 'facility_id');
    }
    public function get_financial_month()
    {
        return $this->hasone(Payroll_Date::class, 'id', 'financial_month_id');
    }
    public function get_financial_accountent()
    {
        return $this->hasone(Financial_Accountant::class, 'id', 'financial_accountent_id');
    }
    public function get_user_create()
    {
        return $this->hasone(User::class, 'id', 'user_id_create');
    }
    public function get_user_update()
    {
        return $this->hasone(User::class, 'id', 'user_id_update');
    }
    protected $fillable = [

        'employee_id',
        'financial_month_id',
        'financial_accountent_id',
        'facility_id',
        'user_id_create',
        'user_id_update',
        'url_address',
        'payroll_year',
        'payroll_month',
        'payroll_days',
        'payroll_missing_days',
        'nominal_salary_amount',

        // allowances
        'Fixed_allowances_amount',
        'transportation_allowances_amount',
        'Certificate_allowance_amount',
        'Position_allowance_amount',
        'danager_allowance_amount',
        'electric_shock_allowance_amount',
        'University_service_allowance_amount',
        'Scientific_title_allowance_amount',
        'Marital_Status_allowance_amount',
        'number_of_children_allowance_amount',
        'Night_watchman_allowance_amount',
        'Security_guard_allowance_amount',
        'currency_difference_allowance_amount',

        'Debit_increases_1_allowance_amount',
        'Debit_increases_1_allowance_note',

        'Debit_increases_2_allowance_amount',
        'Debit_increases_2_allowance_note',

        'Previous_salary_allowance_amount',
        'Tuition_expenses_allowance_amount',
        'Trustees_amount',
        'driver_allowance_amount',
        'agricultural_risk_allowance_amount',
        'total_salary_amount',

        //deduction
        'retirement_contributions_amount',
        'retirement_amount',
        'tax_deduction_amount',
        'Social_Welfare_Fund_amount',
        'Medical_Insurance_amount',
        'life_insurance_amount',
        'stamp_fee_amount',
        'support_fund_amount',
        'central_Statistical_Organization_amount',

        //mail
        'implementation_mail_1_id',
        'implementation_mail_1_amount',

        'implementation_mail_2_id',
        'implementation_mail_2_amount',

        'implementation_mail_3_id',
        'implementation_mail_3_amount',

        'implementation_mail_4_id',
        'implementation_mail_4_amount',

        'implementation_mail_5_id',
        'implementation_mail_5_amount',

        'implementation_mail_6_id',
        'implementation_mail_6_amount',

        'implementation_mail_7_id',
        'implementation_mail_7_amount',

        'implementation_mail_8_id',
        'implementation_mail_8_amount',

        'implementation_mail_9_id',
        'implementation_mail_9_amount',

        'implementation_mail_10_id',
        'implementation_mail_10_amount',

        'implementation_mail_11_id',
        'implementation_mail_11_amount',

        'implementation_mail_12_id',
        'implementation_mail_12_amount',

        'implementation_mail_13_id',
        'implementation_mail_13_amount',

        'implementation_mail_14_id',
        'implementation_mail_14_amount',

        'implementation_mail_15_id',
        'implementation_mail_15_amount',

        'implementation_mail_16_id',
        'implementation_mail_16_amount',

        'implementation_mail_17_id',
        'implementation_mail_17_amount',

        'implementation_mail_18_id',
        'implementation_mail_18_amount',

        'implementation_mail_19_id',
        'implementation_mail_19_amount',

        'implementation_mail_20_id',
        'implementation_mail_20_amount',

        'implementation_mail_21_id',
        'implementation_mail_21_amount',

    ];
}
