<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\School_Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class School_Stages_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schoolstages = [
            'رياض اطفال',
            'ابتدائي',
            'متوسطة',
            'اعدادي',
            'ثانوي',
        ];
        foreach ($schoolstages as $schoolstage) {
            School_Stage::create(['school_stages' => $schoolstage]);
        }
    }
}
