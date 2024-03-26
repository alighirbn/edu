<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Teaching_Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teaching_Specialization_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
            'غير محدد',
            'لغة عربية',
            'رياضيات',
            'الاجتماعيات',
        ];
        foreach ($specializations as $key) {
            Teaching_Specialization::create(['teaching_specialization' => $key]);
        }
    }
}
