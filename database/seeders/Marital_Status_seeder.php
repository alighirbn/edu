<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Marital_Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Marital_Status_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marital_statuses = [
             [
              'marital_status' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'marital_status' => 'متزوج',
              'amount_type_id' => 1,
              'amount' => 50000
            ],
            [
              'marital_status' => 'اعزب',
              'amount_type_id' => 1,
              'amount' => 0
            ],
        ];
        foreach ($marital_statuses as $marital_statuse) {
            Marital_Status::create($marital_statuse);
        }
    }
}
