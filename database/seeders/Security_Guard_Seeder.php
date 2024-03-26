<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Security_Guard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Security_Guard_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            $security_guards = [
            [
              'security_guard' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'security_guard' => 'لاتوجد',
              'amount_type_id' => 1,
              'amount' => 0
            ],
            [
              'security_guard' => 'حراسة امنية',
              'amount_type_id' => 1,
              'amount' => 43750
            ],
            
        ];
        foreach ($security_guards as $security_guard) {
            Security_Guard::create( $security_guard);
        }
    }
}
