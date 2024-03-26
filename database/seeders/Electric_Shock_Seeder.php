<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Electric_Shock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Electric_Shock_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $electric_shocks = [
            [
              'electric_shock' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'electric_shock' => 'لا توجد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'electric_shock' => 'مخصصات صعقة',
              'amount_type_id' => 1,
              'amount' => 50000
            ],
            
        ];
        foreach ($electric_shocks as $electric_shock) {
            Electric_Shock::create( $electric_shock);
        }
    }
}
