<?php

namespace Database\Seeders;

use App\Models\MovementOrderType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovementOrderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_types = [
            'انفكاك',
            'مباشرة',
            'مباشرة لأول مرة',
            'تكليف',
            'تنسيب',
            'نقل داخلي',
            'نقل خارجي'
        ];
        foreach ($order_types as $order_type)
        {
            MovementOrderType::create(['order_type_name' => $order_type]);
        }
    }
}
