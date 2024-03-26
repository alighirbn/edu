<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Career_Stage;
use App\Models\Basic\Employee\Employee_Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employee_Status_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee_statuses = [
            'مستمر بالوظيفة',
            'مجاز',
            'متقاعد',
            'مستقيل',
        ];
        foreach ($employee_statuses as $key) {
            Employee_Status::create(['employee_status' => $key]);
        }
    }
}
