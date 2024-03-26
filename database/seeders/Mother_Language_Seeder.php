<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Mother_Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Mother_Language_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $languages = [
            'غير محدد',
            'العربية',
            'الكردية',
        ];
        foreach ($languages as $key) {
            Mother_Language::create(['mother_language' => $key]);
        }
    }
}
