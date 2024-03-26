<?php

namespace App\Http\Requests\Basic;

use App\Models\Basic\Building\Building;
use Illuminate\Foundation\Http\FormRequest;

class BuildingRequest extends FormRequest
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
            'building_reference' => ['required', \Illuminate\Validation\Rule::unique(Building::class, 'building_reference')->ignore($this->id), 'digits:9'],
            'url_address' => ['required'],
            'user_id_create' => ['Numeric'],
            'user_id_update' => ['Numeric'],


            //foreign id and reference
            'building_status_id' => ['required'],
            'building_type_id' => ['required'],

            //normal fields
            'city' => ['max:20'],
            'district' => ['max:20'],
            'quarter' => ['max:20'],
            'latitude' => ['max:20'],
            'longitude' => ['max:20'],
            'class_count' => ['max:20'],
            'hall_count' => ['max:20'],
            'floor_count' => ['max:20'],
            'sanitary_units_count' => ['max:20'],
            'lab_count' => ['max:20'],
            'school_length' => ['max:20'],
            'school_width' => ['max:20'],
            'building_area' => ['max:20'],
            'building_year' => ['max:20'],
            'is_extend_area' => ['max:20'],
            'is_sport_area' => ['max:20'],
            'is_garden_area' => ['max:20'],


        ];
    }

    protected function prepareForValidation()
    {
        //add url address
        $this->mergeIfMissing(['url_address' => $this->get_random_string(60)]);

        //add user_id base on route
        if (request()->routeIs('building.store')) {
            $this->mergeIfMissing(['user_id_create' => auth()->user()->id]);
        } elseif (request()->routeIs('building.update')) {
            $this->mergeIfMissing(['user_id_update' =>  auth()->user()->id]);
        }
    }
    function get_random_string($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(22, $length);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }
}
