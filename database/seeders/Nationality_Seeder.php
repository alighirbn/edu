<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Nationality_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = [
            'غير محدد',
            'عراق',
        ];
        foreach ($nationalities as $key) {
            Nationality::create(['nationality' => $key]);
        }
    }
}
