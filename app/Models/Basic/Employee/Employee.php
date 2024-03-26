<?php

namespace App\Models\Basic\Employee;

use App\Models\Basic\Facility\Facility;
use App\Models\Financial\Payroll;
use App\Models\Financial\Payroll_Last_Values;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    use HasFactory;

    protected $table = 'employees';
    public function get_work_address()
    {
        return $this->hasone(Facility::class, 'id', 'facility_id');
    }
    public function get_last_payroll()
    {
        return $this->hasOne(Payroll::class)->latest();
    }
    public function get_payroll_last_values()
    {
        return $this->hasOne(Payroll_Last_Values::class)->latest();
    }
    public function get_payroll()
    {
        return $this->hasOne(Payroll::class);
    }

    public function get_facility()
    {
        return $this->hasone(Facility::class, 'id', 'facility_id');
    }

    public function get_payroll_facility()
    {
        return $this->hasone(Facility::class, 'id', 'salary_address_id');
    }

    public function get_agricultural_risk()
    {
        return $this->hasone(Agricultural_Risk::class, 'id', 'agricultural_risk_id');
    }
    public function get_driver_allowance()
    {
        return $this->hasone(Driver_Allowance::class, 'id', 'driver_allowance_id');
    }

    public function get_electric_shock()
    {
        return $this->hasone(Electric_Shock::class, 'id', 'electric_shock_id');
    }
    public function get_university_service()
    {
        return $this->hasone(University_Service::class, 'id', 'university_service_id');
    }

    public function get_security_guard()
    {
        return $this->hasone(Security_Guard::class, 'id', 'security_guard_id');
    }
    public function get_night_watchman()
    {
        return $this->hasone(Night_Watchman::class, 'id', 'night_watchman_id');
    }

    public function get_spouse_job()
    {
        return $this->hasone(Spouse_Job::class, 'id', 'spouse_job_id');
    }

    public function get_danager_provision()
    {
        return $this->hasone(Danager_Provision::class, 'id', 'danager_provision_id');
    }

    public function get_children_count()
    {
        return $this->hasone(Children_Count::class, 'id', 'children_count_id');
    }
    public function get_employee_status()
    {
        return $this->hasone(Employee_Status::class, 'id', 'employee_status_id');
    }

    public function get_marital_status()
    {
        return $this->hasone(Marital_Status::class, 'id', 'marital_status_id');
    }

    public function get_contract_type()
    {
        return $this->hasone(Contract_Type::class, 'id', 'contract_type_id');
    }
    public function get_employment_type()
    {
        return $this->hasone(Employment_Type::class, 'id', 'employment_type_id');
    }

    public function get_assignment_type()
    {
        return $this->hasone(Assignment_Type::class, 'id', 'assignment_type_id');
    }
    public function get_nationality()
    {
        return $this->hasone(Nationality::class, 'id', 'nationality_id');
    }
    public function get_mother_language()
    {
        return $this->hasone(Mother_Language::class, 'id', 'mother_language_id');
    }
    public function get_gender()
    {
        return $this->hasone(Gender::class, 'id', 'gender_id');
    }
    public function get_scientific_title_stage()
    {
        return $this->hasone(Scientific_Title_Stage::class, 'id', 'scientific_title_stage_id');
    }
    public function get_job_title()
    {
        return $this->hasone(Job_Title::class, 'id', 'job_title_id');
    }
    public function get_job_grade()
    {
        return $this->hasone(Job_Grade::class, 'id', 'job_grade_id');
    }
    public function get_career_stage()
    {
        return $this->hasone(Career_Stage::class, 'id', 'career_stage_id');
    }
    public function get_teaching_specialization()
    {
        return $this->hasone(Teaching_Specialization::class, 'id', 'teaching_specialization_id');
    }
    public function get_political_dismissal_type()
    {
        return $this->hasone(Political_Dismissal_Type::class, 'id', 'political_dismissal_type_id');
    }

    public function get_first_academic_achievement()
    {
        return $this->hasone(Academic_Achievement::class, 'id', 'first_academic_achievement_id');
    }

    public function get_academic_achievement()
    {
        return $this->hasone(Academic_Achievement::class, 'id', 'academic_achievement_id');
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

        'id',

        'user_id_create',

        'user_id_update',

        //unique
        'url_address',

        //foreign id and reference

        'facility_id',

        'salary_address_id',

        //employee_info

        'spouse_job_id',

        'children_count_id',

        'marital_status_id',

        'nationality_id',

        'mother_language_id',

        'gender_id',

        'job_number',
        'employee_password',
        'name',
        'father_name',
        'grandfather_name',
        'fourth_grandfather_name',
        'surname',
        'full_name',
        'mother_name',
        'mother_father_name',
        'mother_grandfather_name',
        'mother_surname',
        'mother_full_name',
        'date_of_birth',
        'place_of_birth',
        'first_husband_name',
        'husband_father_name',
        'husband_grandfather_name',
        'husband_surname',
        'employee_phone_number',
        'employee_email',
        'is_spouse_disabled',

        //financial_info
        'card_id',
        'bank_name_id',
        'bank_account',
        'iban_code',

        //appointment_info

        'driver_allowance_id',

        'agricultural_risk_id',

        'electric_shock_id',

        'university_service_id',

        'danager_provision_id',

        'night_watchman_id',

        'security_guard_id',

        'employee_status_id',

        'contract_type_id',

        'employment_type_id',

        'assignment_type_id',

        'job_title_id',

        'job_grade_id',

        'career_stage_id',

        'appointment_date',
        'appointment_ministerial_order_number',
        'appointment_ministerial_order_date',
        'appointment_administrative_order_number',
        'appointment_administrative_order_date',
        'appointment_first_initiation_number',
        'appointment_first_initiation_date',
        'nominal_salary',
        'total_salary',
        'job_grade_date',
        'career_stage_date',

        //national_card_info
        'is_national_card',
        'national_card_number',
        'national_card_date_of_issue',
        'national_card_issuing_authority',
        'national_card_family_number',
        'civil_status_identity_number',
        'civil_status_registry_number',
        'civil_status_newspaper_number',
        'civil_status_issue_date',
        'civil_status_issuer',
        'nationality_certificate_number',
        'nationality_certificate_authority_issuing',
        'nationality_certificate_authority_issuing_date',
        'nationality_certificate_authority_issuing_wallet',

        //housing_card_info
        'housing_card_number',
        'housing_card_date_of_issue',
        'housing_card_issuing_authority',
        'housing_card_residence_address',
        'housing_card_governorate',
        'housing_card_district',
        'housing_card_neighborhood',
        'housing_card_house_number',
        'housing_card_nearest_point_of_reference',
        'housing_card_mukhtar_name',

        //certificate_info
        'first_academic_achievement_id',

        'teaching_specialization_id',
        'certificate_of_appointment',
        'certificate_of_appointment_graduation_year',
        'certificate_of_appointment_university_institute_school_name',
        'certificate_of_appointment_college_name',
        'certificate_of_appointment_major',
        'certificate_of_appointment_mark',

        // last_certificate_info
        'academic_achievement_id',

        'last_certificate_obtained',
        'last_year_of_graduation',
        'last_name_of_the_university',
        'last_university_institute_school_name',
        'last_name_of_the_college',
        'last_major',
        'last_certificate_of_appointment_mark',

        // scientific_title
        'scientific_title_stage_id',

        'is_scientific_title',
        'scientific_title_date',

        //political_dismissal
        'political_dismissal_type_id',

        'is_political_dismissal',
        'political_dismissal_duration_from',
        'political_dismissal_duration_to',
        'political_dismissal_years',
        'political_dismissal_months',
        'political_dismissal_days',
        'political_dismissal_order_number',
        'political_dismissal_order_date',
        'political_dismissal_reappointment_number',
        'political_dismissal_date_reappointment',
        'political_dismissal_ministerial_reappointment_number',
        'political_dismissal_ministerial_reappointment_date',

    ];

}
