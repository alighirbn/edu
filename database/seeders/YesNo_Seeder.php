<?php

namespace Database\Seeders;

use App\Models\YesNo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YesNo_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                //yes no table
        $yes_nos = [
          'لا',
          'نعم',
        ];
          foreach ($yes_nos as $yes_no)
          {
             YesNo::create(['value' => $yes_no]);
          }

    }
}
