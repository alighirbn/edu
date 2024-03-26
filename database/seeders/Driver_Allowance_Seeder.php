<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Driver_Allowance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Driver_Allowance_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $driver_allowances = [
            [
              'driver_allowance' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'driver_allowance' => 'لاتوجد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'driver_allowance' => 'مخصصات سائق',
              'amount_type_id' => 1,
              'amount' => 43750
            ],
            
        ];
        foreach ($driver_allowances as $driver_allowance) {
            Driver_Allowance::create( $driver_allowance);
        }
    }
}
