<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hr\Thanks\Thanks_Order_Status;

class Thanks_Order_Status_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $thanks_order_statuss = [
          'غير مستخدم',
          'لأغراض الترفيع والعلاوة',
          'لألغاء العقوبة',
          'مهمل',
        ];
          foreach ($thanks_order_statuss as $thanks_order_status)
          {
             Thanks_Order_Status::create(['thanks_order_status' => $thanks_order_status]);
          }
    }
}
