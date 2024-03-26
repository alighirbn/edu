<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Agricultural_Risk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Agricultural_Risk_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $agricultural_risks = [
            [
              'agricultural_risk' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'agricultural_risk' => 'لاتوجد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'agricultural_risk' => 'مخصصات زراعية',
              'amount_type_id' => 1,
              'amount' => 43750
            ],
            
        ];
        foreach ($agricultural_risks as $agricultural_risk) {
            Agricultural_Risk::create( $agricultural_risk);
        }
    }
}
