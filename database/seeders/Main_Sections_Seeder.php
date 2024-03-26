<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\Main_Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Main_Sections_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $main_sections = [
            [
              'main_sections' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'main_sections' => 'النجف مركز',
              'amount_type_id' => 1,
              'amount' => 20000
            ],
            [
              'main_sections' => 'مركز الكوفة',
              'amount_type_id' => 1,
              'amount' => 20000
            ],
            [
              'main_sections' => 'ريف الكوفة',
              'amount_type_id' => 1,
              'amount' => 30000
            ],
            [
              'main_sections' => 'مركز المناذرة',
              'amount_type_id' => 1,
              'amount' => 30000
            ],
        ];

         foreach ($main_sections as $main_section)
          {
             Main_Section::create($main_section);
          }

    }
}
