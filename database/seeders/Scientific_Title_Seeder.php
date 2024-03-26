<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Scientific_Title_Stage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Scientific_Title_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
                        [
              'scientific_title_stage' => 'غير محدد',
              'amount_type_id' => 2,
              'amount' => 0
            ],
            [
              'scientific_title_stage' => 'الاولى',
              'amount_type_id' => 2,
              'amount' => 0.15
            ],
            [
              'scientific_title_stage' => 'الثانية',
              'amount_type_id' => 2,
              'amount' => 0.2
            ],
               [
              'scientific_title_stage' => 'الثالثة',
              'amount_type_id' => 2,
              'amount' => 0.25
            ],
            [
              'scientific_title_stage' => 'الرابعة',
              'amount_type_id' => 2,
              'amount' => 0.3
            ],
        ];
        foreach ($titles as $title) {
            Scientific_Title_Stage::create( $title);
        }
    }
}
