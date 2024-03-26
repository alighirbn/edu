<?php

namespace App\Models\Basic\Facility;

use App\Models\Basic\Employee\Employee;
use App\Models\Department;
use App\Models\Financial\Financial_Accountant;
use App\Models\Financial\Payroll;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;
    protected $table = 'facilitys';

    public function get_payroll()
    {
        return $this->hasMany(Payroll::class, 'facility_id', 'id');
    }

    public function get_employees_salary_address()
    {
        return $this->hasMany(Employee::class, 'salary_address_id', 'id');
    }
    public function get_Department()
    {
        return $this->hasone(Department::class, 'id', 'department_id');
    }
    public function get_facility_accountent_id()
    {
        return $this->hasOne(Financial_Accountant::class, 'id', 'facility_accountent_id');
    }
    public function get_facility_type_id()
    {
        return $this->hasone(Facility_Type::class, 'id', 'facility_type_id');
    }

    public function get_facility_parent_id()
    {
        return $this->belongsTo(Facility::class, 'facility_parent_id');
    }

    public function get_school_property_id()
    {
        return $this->hasone(School_Property::class, 'id', 'school_property_id');
    }

    public function get_duality_id()
    {
        return $this->hasone(Duality::class, 'id', 'duality_id');
    }

    public function get_school_invironment_id()
    {
        return $this->hasone(School_Invironment::class, 'id', 'school_invironment_id');
    }

    public function get_school_time_id()
    {
        return $this->hasone(School_Time::class, 'id', 'school_time_id');
    }

    public function get_school_gender_id()
    {
        return $this->hasone(School_Gender::class, 'id', 'school_gender_id');
    }

    public function get_school_stage_id()
    {
        return $this->hasone(School_Stage::class, 'id', 'school_stage_id');
    }

    public function get_main_section_id()
    {
        return $this->hasone(Main_Section::class, 'id', 'main_section_id');
    }

    public function get_province()
    {
        return $this->hasone(Province::class, 'id', 'province_id');
    }

    protected $fillable = [

        //Unique
        'url_address',

        //Refference
        'facility_accountent_id',
        'facility_parent_id',
        'facility_type_id',
        'work_address_id',
        'school_property_id',
        'duality_id',
        'school_invironment_id',
        'school_time_id',
        'school_gender_id',
        'school_stage_id',
        'main_section_id',
        'province_id',
        'department_id',

        //Normal Fields
        'counting_number',
        'name',
        'is_main_school',
        'guest_school',
        'personale_design_number',
        'male_pupils_number',
        'female_pupils_number',
        'occupied_rooms_number',
        'filed_classes_number',
        'is_special_education',
        'desks_number',
        'is_computer_available',
        'is_teaching_computer',
        'is_teaching_other_languages',
        'is_there_airconditions',
        'is_electronic_classes',
        'classrooms_number',
        'halls_count',
        'is_predicated',
        'established_year',

    ];
}
