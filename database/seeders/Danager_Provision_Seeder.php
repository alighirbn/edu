<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Danager_Provision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Danager_Provision_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $danager_provisions = [
            [
              'danager_provision' => 'غير محدد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'danager_provision' => 'خطورة قانونية',
              'amount_type_id' => 2,
              'amount' => 0.3
            ],
            [
              'danager_provision' => 'خطورة محاسبية',
              'amount_type_id' => 2,
              'amount' => 0.3
            ],
            [
              'danager_provision' => 'خطورة برمجية',
              'amount_type_id' => 2,
              'amount' => 0.3
            ],
            [
              'danager_provision' => 'خطورة هندسية ميدانية',
              'amount_type_id' => 2,
              'amount' => 0.55
            ],
            [
              'danager_provision' => 'خطورة هندسية ادارية',
              'amount_type_id' => 2,
              'amount' => 0.35
            ],
            

        ];

         foreach ($danager_provisions as $danager_provision)
          {
             Danager_Provision::create($danager_provision);
          }
    }
}
