<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Assignment_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Assignment_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $assignment_types = [
            [
              'assignment_type' => 'غير محدد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'assignment_type' => 'موظف',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'assignment_type' => 'مدير عام',
              'amount_type_id' => 1,
              'amount' => 1500000
            ],
            [
              'assignment_type' => 'معاون مدير عام',
              'amount_type_id' => 2,
              'amount' => 0.3
            ],
            [
              'assignment_type' => 'مدير قسم',
              'amount_type_id' => 2,
              'amount' => 0.2
            ],
            [
              'assignment_type' => 'معاون مدير قسم',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'assignment_type' => 'مسؤول شعبة',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'assignment_type' => 'مدير مدرسة',
              'amount_type_id' => 2,
              'amount' => 0.25
            ],
            [
              'assignment_type' => 'معاون مدير مدرسة',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],

        ];

         foreach ($assignment_types as $assignment_type)
          {
             Assignment_Type::create($assignment_type);
          }

    }
}
