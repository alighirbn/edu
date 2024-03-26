<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\University_Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class University_Service_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $university_services = [
            [
              'university_service' => 'غير محدد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'university_service' => 'لاتوجد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'university_service' => 'خدمة جامعية',
              'amount_type_id' => 2,
              'amount' => 1
            ],
            
        ];
        foreach ($university_services as $university_service) {
            University_Service::create( $university_service);
        }
    }
}
