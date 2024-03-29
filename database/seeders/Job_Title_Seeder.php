<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Job_Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Job_Title_Seeder extends Seeder
{

  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $jobtitles = [
      [
        'job_title' => 'غير محدد',
        'next_job_title_id' => 1,
        'job_grade_id' => 1
      ],
      [
        'job_title' => 'مستشار',
        'next_job_title_id' => null,
        'job_grade_id' => 1
      ],
      [
        'job_title' => 'مساعد مستشار',
        'next_job_title_id' => 2,
        'job_grade_id' => 2
      ],
      [
        'job_title' => 'مشاور قانوني اقدم',
        'next_job_title_id' => 3,
        'job_grade_id' => 3
      ],
      [
        'job_title' => 'مشاور قانوني',
        'next_job_title_id' => 4,
        'job_grade_id' => 4
      ],
      [
        'job_title' => 'مشاور قانوني مساعد',
        'next_job_title_id' => 5,
        'job_grade_id' => 5
      ],
      [
        'job_title' => 'قانوني',
        'next_job_title_id' => 6,
        'job_grade_id' => 6
      ],
      [
        'job_title' => 'معاون قانوني',
        'next_job_title_id' => 7,
        'job_grade_id' => 7
      ],
    ];
    foreach ($jobtitles as $jobtitle) {
      Job_Title::create($jobtitle);
    }
    
  }
}
