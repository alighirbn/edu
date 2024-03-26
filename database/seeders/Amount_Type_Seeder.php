<?php

namespace Database\Seeders;

use App\Models\Amount_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Amount_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $amount_types = [
          'مبلغ',
          'نسبة',
        ];
          foreach ($amount_types as $amount_type)
          {
             Amount_Type::create(['amount_type' => $amount_type]);
          }
    }
}
