<?php

namespace Database\Seeders;


use App\Models\Basic\Employee\Academic_Achievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Academic_Achievement_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $academic_achievements = [
            [
              'academic_achievement' => 'غير محدد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'academic_achievement' => 'بدون شهادة',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'academic_achievement' => 'ابتدائية',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'academic_achievement' => 'متوسطة',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'academic_achievement' => 'اعدادية',
              'amount_type_id' => 2,
              'amount' => 0.25
            ],
            [
              'academic_achievement' => 'دبلوم',
              'amount_type_id' => 2,
              'amount' => 0.35
            ],
            [
              'academic_achievement' => 'بكلوريوس',
              'amount_type_id' => 2,
              'amount' => 0.45
            ],
            [
              'academic_achievement' => 'دبلوم عالي',
              'amount_type_id' => 2,
              'amount' => 0.55
            ],
            [
              'academic_achievement' => 'ماجستير',
              'amount_type_id' => 2,
              'amount' => 0.75
            ],
            [
              'academic_achievement' => 'دكتوراه',
              'amount_type_id' => 2,
              'amount' => 1
            ],

        ];

         foreach ($academic_achievements as $academic_achievement)
          {
             Academic_Achievement::create($academic_achievement);
          }
    }
}
