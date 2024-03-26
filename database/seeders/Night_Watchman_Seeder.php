<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Night_Watchman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Night_Watchman_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
               $night_watchs = [
                        [
              'night_watchman' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'night_watchman' => 'لاتوجد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'night_watchman' => 'حراسة ليلية',
              'amount_type_id' => 1,
              'amount' => 43750
            ],
            
        ];
        foreach ($night_watchs as $night_watch) {
            Night_Watchman::create( $night_watch);
        }
    }
}
