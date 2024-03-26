<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gender_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            'غير محدد',
            'ذكر',
            'انثى',
        ];
        foreach ($genders as $key) {
            Gender::create(['gender' => $key]);
        }
    }
}
