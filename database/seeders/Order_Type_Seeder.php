<?php

namespace Database\Seeders;

use App\Models\Order_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Order_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $order_types = [
          'كتاب شكر',
          'اجازة اعتيادية',
          'اجازة امومة',
        ];
          foreach ($order_types as $order_type)
          {
             Order_Type::create(['order_type' => $order_type]);
          }
    }
}
