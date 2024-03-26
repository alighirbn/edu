<?php

namespace App\Http\Requests\Basic;

use App\Models\Basic\Employee\Employee;
use Illuminate\Foundation\Http\FormRequest;


class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        
        return [
            
        'id',
        'job_number' => ['required',\Illuminate\Validation\Rule::unique(Employee::class, 'job_number')->ignore($this->id) , 'digits:9'],
        'url_address'=> ['required'],
        'user_id_create'=>['Numeric'],
        'user_id_update'=>['Numeric'],

        //foreign id and reference
        //'facility_id'=>['required'],
        //'salary_address_id'=>['required'],
        
        'employee_status_id' => ['required'],
        'contract_type_id' => ['required'],
        'employment_type_id' => ['required'],
        'assignment_type_id' => ['required'],
        'nationality_id' => ['required'],
        'mother_language_id' => ['required'],
        'gender_id' => ['required'],
        'scientific_title_stage_id' => ['required'],
        'job_title_id' => ['required'],
        'job_grade_id' => ['required'],
        'career_stage_id' => ['required'],
        'teaching_specialization_id' => ['required'],
        //'political_dismissal_type_id' => ['required'],
        'marital_status_id' => ['required'],
        'children_count_id' => ['required'],
        'first_academic_achievement_id' => ['required'],
        'academic_achievement_id' => ['required'],

        //normal fields
        'name' => ['required','max:20'],
        'father_name' => ['required','max:20'],
        'grandfather_name' => ['required','max:20'],
        'fourth_grandfather_name' => ['max:20'],
        'surname' => ['max:20'],
        'full_name' => ['required','max:100'],
        'mother_name' => ['max:20'],
        'mother_father_name' => ['max:20'],
        'mother_grandfather_name' => ['max:20'],
        'mother_surname' => ['max:20'],
        'mother_full_name' => ['required','max:80'],
        'date_of_birth' => ['nullable','date'],
        'place_of_birth' => ['max:20'],
        'first_husband_name' => ['max:20'],
        'husband_father_name' => ['max:20'],
        'husband_grandfather_name' => ['max:20'],
        'husband_surname' => ['max:20'],
        
        'employee_phone_number' => ['max:16'],
        'employee_email' => ['max:50'],
        'is_national_card' => ['max:1'],
        'national_card_number' => ['max:12'],
        'national_card_date_of_issue' => ['nullable','date'],
        'national_card_issuing_authority' => ['max:50'],
        'national_card_family_number' => ['max:20'],
        'civil_status_identity_number' => ['max:20'],
        'civil_status_registry_number' => ['max:20'],
        'civil_status_newspaper_number' => ['max:20'],
        'civil_status_issue_date' => ['nullable','date'],
        'civil_status_issuer' => ['max:50'],
        'nationality_certificate_number' => ['max:20'],
        'nationality_certificate_authority_issuing' => ['max:50'],
        'nationality_certificate_authority_issuing_date' => ['nullable','date'],
        'nationality_certificate_authority_issuing_wallet' => ['max:20'],
        'housing_card_number' => ['max:20'],
        'housing_card_date_of_issue' => ['nullable','date'],
        'housing_card_issuing_authority' => ['max:50'],
        'housing_card_residence_address' => ['max:20'],
        'housing_card_governorate' => ['max:20'],
        'housing_card_district' => ['max:20'],
        'housing_card_neighborhood' => ['max:20'],
        'housing_card_house_number' => ['max:20'],
        'housing_card_nearest_point_of_reference' => ['max:30'],
        'housing_card_mukhtar_name' => ['max:20'],
        
        'certificate_of_appointment' => ['max:20'],
        'certificate_of_appointment_graduation_year' => ['max:9'],
        'certificate_of_appointment_university_institute_school_name' => ['max:50'],
        'certificate_of_appointment_college_name' => ['max:50'],
        'certificate_of_appointment_major' => ['max:20'],
        'certificate_of_appointment_mark' => ['max:3'],
        
        'last_certificate_obtained' => ['max:20'],
        'last_year_of_graduation' => ['max:9'],
        'last_name_of_the_university' => ['max:30'],
        'last_university_institute_school_name' => ['max:50'],
        'last_name_of_the_college' => ['max:50'],
        'last_major' => ['max:20'],
        'last_certificate_of_appointment_mark' => ['max:3'],
        'is_scientific_title' => ['max:1'],
        'scientific_title_date' => ['nullable','date'],
        'appointment_date' => ['nullable','date'],
        'appointment_ministerial_order_number' => ['max:20'],
        'appointment_ministerial_order_date' => ['nullable','date'],
        'appointment_administrative_order_number' => ['max:20'],
        'appointment_administrative_order_date' => ['nullable','date'],
        'appointment_first_initiation_number' => ['max:20'],
        'appointment_first_initiation_date' => ['nullable','date'],
        'nominal_salary' => ['max:7'],
        'job_grade_date' => ['nullable','date'],
        'career_stage_date' => ['nullable','date'],
        'is_political_dismissal' => ['max:1'],
        'political_dismissal_duration_from' => ['nullable','date'],
        'political_dismissal_duration_to' => ['nullable','date'],
        'political_dismissal_years' => ['max:2'],
        'political_dismissal_months' => ['max:2'],
        'political_dismissal_days' => ['max:2'],
        'political_dismissal_order_number' => ['max:20'],
        'political_dismissal_order_date' => ['nullable','date'],
        'political_dismissal_reappointment_number' => ['max:20'],
        'political_dismissal_date_reappointment' => ['nullable','date'],
        'political_dismissal_ministerial_reappointment_number' => ['max:20'],
        'political_dismissal_ministerial_reappointment_date' => ['nullable','date'],
            


        ];
    }

    protected function prepareForValidation()
    {
        //add url address
        $this->mergeIfMissing(['url_address' => $this->get_random_string(60)]);

        //add user_id base on route
         if (request()->routeIs('employee.store')) { 
            $this->mergeIfMissing(['user_id_create' => auth()->user()->id ]);

         }elseif(request()->routeIs('employee.update')) 
        {
            $this->mergeIfMissing(['user_id_update' =>  auth()->user()->id ]);
        
        }

        // get employee full name 
        $this->request->add( ['full_name' => trim($this->get('name').' '.$this->get('father_name').' '.$this->get('grandfather_name').' '.$this->get('fourth_grandfather_name').' '.$this->get('surname'),' ')]);

        // get employee full name 
        $this->request->add( ['mother_full_name' => trim($this->get('mother_name').' '.$this->get('mother_father_name').' '.$this->get('mother_grandfather_name').' '.$this->get('mother_surname'),' ')]);

        //merge date inputs into one field
         if (isset($this->date_of_birth_y) or isset($this->date_of_birth_m) or isset($this->date_of_birth_d)){
            $year   = $this->get('date_of_birth_y');
            $month  = sprintf('%02d', $this->get('date_of_birth_m'));
            $day    = sprintf('%02d', $this->get('date_of_birth_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['date_of_birth' => $date]);
        }
        if (isset($this->national_card_date_of_issue_y) or isset($this->national_card_date_of_issue_d) or isset($this->national_card_date_of_issue_y)){
            $year   = $this->get('national_card_date_of_issue_y');
            $month  = sprintf('%02d', $this->get('national_card_date_of_issue_m'));
            $day    = sprintf('%02d', $this->get('national_card_date_of_issue_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['national_card_date_of_issue' => $date]);
        }
        if (isset($this->civil_status_issue_date_y) or isset($this->civil_status_issue_date_d) or isset($this->civil_status_issue_date_y)){
            $year   = $this->get('civil_status_issue_date_y');
            $month  = sprintf('%02d', $this->get('civil_status_issue_date_m'));
            $day    = sprintf('%02d', $this->get('civil_status_issue_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['civil_status_issue_date' => $date]);
        }
        if (isset($this->nationality_certificate_authority_issuing_date_y) or isset($this->nationality_certificate_authority_issuing_date_m) or isset($this->nationality_certificate_authority_issuing_date_d)){
            $year   = $this->get('nationality_certificate_authority_issuing_date_y');
            $month  = sprintf('%02d', $this->get('nationality_certificate_authority_issuing_date_m'));
            $day    = sprintf('%02d', $this->get('nationality_certificate_authority_issuing_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['nationality_certificate_authority_issuing_date' => $date]);
        }
        if (isset($this->housing_card_date_of_issue_y) or isset($this->housing_card_date_of_issue_m) or isset($this->housing_card_date_of_issue_d)){
            $year   = $this->get('housing_card_date_of_issue_y');
            $month  = sprintf('%02d', $this->get('housing_card_date_of_issue_m'));
            $day    = sprintf('%02d', $this->get('housing_card_date_of_issue_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['housing_card_date_of_issue' => $date]);
        }
        if (isset($this->scientific_title_date_y) or isset($this->scientific_title_date_m) or isset($this->scientific_title_date_d)){
            $year   = $this->get('scientific_title_date_y');
            $month  = sprintf('%02d', $this->get('scientific_title_date_m'));
            $day    = sprintf('%02d', $this->get('scientific_title_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['scientific_title_date' => $date]);
        }
        if (isset($this->appointment_date_y) or isset($this->appointment_date_m) or isset($this->appointment_date_d)){
            $year   = $this->get('appointment_date_y');
            $month  = sprintf('%02d', $this->get('appointment_date_m'));
            $day    = sprintf('%02d', $this->get('appointment_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['appointment_date' => $date]);
        }
        if (isset($this->appointment_ministerial_order_date_y) or isset($this->appointment_ministerial_order_date_m) or isset($this->appointment_ministerial_order_date_d)){
            $year   = $this->get('appointment_ministerial_order_date_y');
            $month  = sprintf('%02d', $this->get('appointment_ministerial_order_date_m'));
            $day    = sprintf('%02d', $this->get('appointment_ministerial_order_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['appointment_ministerial_order_date' => $date]);
        }
        if (isset($this->appointment_administrative_order_date_y) or isset($this->appointment_administrative_order_date_m) or isset($this->appointment_administrative_order_date_d)){
            $year   = $this->get('appointment_administrative_order_date_y');
            $month  = sprintf('%02d', $this->get('appointment_administrative_order_date_m'));
            $day    = sprintf('%02d', $this->get('appointment_administrative_order_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['appointment_administrative_order_date' => $date]);
        }
        if (isset($this->appointment_first_initiation_date_y) or isset($this->appointment_first_initiation_date_m) or isset($this->appointment_first_initiation_date_d)){
            $year   = $this->get('appointment_first_initiation_date_y');
            $month  = sprintf('%02d', $this->get('appointment_first_initiation_date_m'));
            $day    = sprintf('%02d', $this->get('appointment_first_initiation_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['appointment_first_initiation_date' => $date]);
        }
        if (isset($this->job_grade_date_y) or isset($this->job_grade_date_m) or isset($this->job_grade_date_d)){
            $year   = $this->get('job_grade_date_y');
            $month  = sprintf('%02d', $this->get('job_grade_date_m'));
            $day    = sprintf('%02d', $this->get('job_grade_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['job_grade_date' => $date]);
        }
        if (isset($this->career_stage_date_y) or isset($this->career_stage_date_m) or isset($this->career_stage_date_d)){
            $year   = $this->get('career_stage_date_y');
            $month  = sprintf('%02d', $this->get('career_stage_date_m'));
            $day    = sprintf('%02d', $this->get('career_stage_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['career_stage_date' => $date]);
        }
        if (isset($this->political_dismissal_duration_from_y) or isset($this->political_dismissal_duration_from_m) or isset($this->political_dismissal_duration_from_d)){
            $year   = $this->get('political_dismissal_duration_from_y');
            $month  = sprintf('%02d', $this->get('political_dismissal_duration_from_m'));
            $day    = sprintf('%02d', $this->get('political_dismissal_duration_from_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['political_dismissal_duration_from' => $date]);
        }
        if (isset($this->political_dismissal_duration_to_d) or isset($this->political_dismissal_duration_to_m) or isset($this->political_dismissal_duration_to_d)){
            $year   = $this->get('political_dismissal_duration_to_y');
            $month  = sprintf('%02d', $this->get('political_dismissal_duration_to_m'));
            $day    = sprintf('%02d', $this->get('political_dismissal_duration_to_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['political_dismissal_duration_to' => $date]);
        }
        if (isset($this->political_dismissal_order_date_y) or isset($this->political_dismissal_order_date_m) or isset($this->political_dismissal_order_date_d)){
            $year   = $this->get('political_dismissal_order_date_y');
            $month  = sprintf('%02d', $this->get('political_dismissal_order_date_m'));
            $day    = sprintf('%02d', $this->get('political_dismissal_order_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['political_dismissal_order_date' => $date]);
        }
        if (isset($this->political_dismissal_date_reappointment_y) or isset($this->political_dismissal_date_reappointment_m) or isset($this->political_dismissal_date_reappointment_d)){
            $year   = $this->get('political_dismissal_date_reappointment_y');
            $month  = sprintf('%02d', $this->get('political_dismissal_date_reappointment_m'));
            $day    = sprintf('%02d', $this->get('political_dismissal_date_reappointment_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['political_dismissal_date_reappointment' => $date]);
        }
        if (isset($this->political_dismissal_ministerial_reappointment_date_y) or isset($this->political_dismissal_ministerial_reappointment_date_m) or isset($this->political_dismissal_ministerial_reappointment_date_d)){
            $year   = $this->get('political_dismissal_ministerial_reappointment_date_y');
            $month  = sprintf('%02d', $this->get('political_dismissal_ministerial_reappointment_date_m'));
            $day    = sprintf('%02d', $this->get('political_dismissal_ministerial_reappointment_date_d'));
            $date = $year.'-'.$month.'-'.$day;
            $this->request->add( ['political_dismissal_ministerial_reappointment_date' => $date]);
        }
 
    }

    function get_random_string($length)
    {
      $array = array(0,1,2,3,4,5,6,7,8,9, 'a', 'b','c' , 'd', 'e', 'f','g', 'h', 'i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
      $text = "";
      $length = rand(22, $length);

      for($i=0;$i<$length;$i++) {
         $random = rand(0,61);
         $text .=$array[$random];
        }
      return $text;
    }

 
}
