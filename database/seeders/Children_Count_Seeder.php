<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Children_Count;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Children_Count_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         $children_counts = [
            [
              'children_count' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'children_count' => 'واحد',
              'amount_type_id' => 1,
              'amount' => 10000
            ],
            [
              'children_count' => 'اثنان',
              'amount_type_id' => 1,
              'amount' => 20000
            ],
            [
              'children_count' => 'ثلاثة',
              'amount_type_id' => 1,
              'amount' => 30000
            ],
            [
              'children_count' => 'اربعة او اكثر',
              'amount_type_id' => 1,
              'amount' => 40000
            ],


        ];

         foreach ($children_counts as $children_count)
          {
             Children_Count::create($children_count);
          }
    }
}
