<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Job_Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Job_Grade_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
           $job_grades = [
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
        ];
          foreach ($job_grades as $job_grade)
          {
             Job_Grade::create(['job_grade' => $job_grade]);
          }

    }
}
