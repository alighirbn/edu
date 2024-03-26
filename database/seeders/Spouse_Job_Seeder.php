<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Spouse_Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Spouse_Job_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           $spouse_jobs = [
            [
              'spouse_job' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'spouse_job' => 'موظف',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'spouse_job' => 'غير موظف ',
              'amount_type_id' => 1,
              'amount' => 50000
            ],
            
        ];
        foreach ($spouse_jobs as $spouse_job) {
            Spouse_Job::create( $spouse_job);
        }
    }
}
