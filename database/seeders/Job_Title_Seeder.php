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
            'غير محدد',
            'مدرس',
            'قانوني',
            'مبرمج',
        ];
        foreach ($jobtitles as $key) {
            Job_Title::create(['job_title' => $key]);
        }
    }
}
