<?php

namespace App\Models\Financial;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll_Last_Values extends Model
{
    use HasFactory;
    protected $table = 'payroll_last_values';

    public function get_employee()
    {
        return $this->hasone(Employee::class, 'id', 'employee_id');
    }

    protected $fillable = [

        'employee_id',

        'children_count_id',

        'marital_status_id',

        'driver_allowance_id',

        'agricultural_risk_id',

        'electric_shock_id',

        'university_service_id',

        'danager_provision_id',

        'night_watchman_id',

        'security_guard_id',

        'contract_type_id',

        'assignment_type_id',

        'job_grade_id',

        'career_stage_id',

        'academic_achievement_id',

        'scientific_title_stage_id',

        'main_section_id',

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
