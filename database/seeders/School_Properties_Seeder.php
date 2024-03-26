<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\Facility;
use App\Models\Basic\Facility\School_Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class School_Properties_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $properties = [
            [
                'school_properties' => 'حكومي'
            ], [
                'school_properties' => 'أهلي'
            ], [
                'school_properties' => 'وقف شيعي'
            ], [
                'school_properties' => 'مؤسسة'
            ]




        ];

        foreach ($properties as $key => $value) {
            School_Property::create($value);
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

