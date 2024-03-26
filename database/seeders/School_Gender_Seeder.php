<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\School_Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class School_Gender_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schoolgenders = [
            'اناث',
            'ذكور',
            'مختلط',
        ];
        foreach ($schoolgenders as $schoolgender) {
            School_Gender::create(['school_genders' => $schoolgender]);
        }
    }
}
