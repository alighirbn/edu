<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Career_Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Career_Stage_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                $career_stages = [
          'الاولى',
          'الثانية',
          'الثالثة',
          'الرابعة',
          'الخامسة',
          'السادسة',
          'السابعة',
          'الثامنة',
          'التاسعة',
          'العاشرة',
          'الحادي عشرة',
        ];
          foreach ($career_stages as $career_stage)
          {
             Career_Stage::create(['career_stage' => $career_stage]);
          }

    }
}
