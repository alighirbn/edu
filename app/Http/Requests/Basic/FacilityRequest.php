<?php

namespace App\Http\Requests\Basic;

use App\Models\Basic\Facility\Facility;
use Illuminate\Foundation\Http\FormRequest;

class FacilityRequest extends FormRequest
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
            // 'school_id'=>['required'],
            'url_address'=>['required'],
            'counting_number' => ['required',\Illuminate\Validation\Rule::unique(Facility::class, 'counting_number')->ignore($this->id) , 'digits:7'],
            //foreign id and reference
            'facility_parent_id'=>['required'],
            'facility_type_id'=>['required'],
            'school_property_id'=>['required'],
            'duality_id'=>['required'],
            'school_invironment_id'=>['required'],
            'school_time_id'=>['required'],
            'main_section_id'=>['required'],
            'school_gender_id'=>['required'],
            'school_stage_id'=>['required'],

            //normal fields
            
            'name' => ['required','max:30'],
            'is_main_school' => ['max:1'],
            'guest_school' => ['max:30'],
            'personale_design_number' => ['max:4'],
            'male_pupils_number' => ['max:4'],
            'female_pupils_number' => ['max:4'],
            'occupied_rooms_number' => ['max:2'],
            'filed_classes_number' => ['max:2'],
            'is_special_education' => ['max:1'],
            'desks_number' => ['max:4'],
            'is_computer_available' => ['max:1'],
            'is_teaching_computer' => ['max:1'],
            'is_teaching_other_languages' => ['max:1'],
            'is_there_airconditions' => ['max:1'],
            'is_electronic_classes' => ['max:1'],
            'classrooms_number' => ['max:2'],
            'halls_count' => ['max:2'],
            'is_predicated' => ['max:1'],
            'province_id' => ['max:2'],
            'established_year' => ['digits:4'],
        ];
    }

    protected function prepareForValidation()
    {
        $this->mergeIfMissing(['url_address' => $this->get_random_string(60)]);

        //add school_id base on route
        $this->mergeIfMissing(['facility_parent_id' => 1]);
        //

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
