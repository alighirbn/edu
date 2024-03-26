<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Employment_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Employment_type_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Employment_types = [
            'غير محدد',
            'اداري',
            'تربوي',
        ];
        foreach ($Employment_types as $key) {
            Employment_Type::create(['Employment_type' => $key]);
        }
    }
}
