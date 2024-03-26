<?php

namespace Database\Seeders;

use App\Models\Basic\Facility\Facility_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Facility_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //facility_type
        $facility_types = [
          'وزارة',
          'مديرية',
          'مكتب مدير عام',
          'مكتب المعاون الاداري',
          'مكتب المعاون الفني',
          'قسم',
          'شعبة',
          'وحدة',
          'لجنة',
          'مدرسة',
          'معهد',
          'روضة',
        ];
          foreach ($facility_types as $facility_type)
          {
             Facility_Type::create(['facility_types' => $facility_type]);
          }
    }
}
