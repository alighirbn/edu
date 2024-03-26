<?php

namespace Database\Seeders;

use App\Models\Basic\Employee\Contract_Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Contract_Type_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $contract_types = [
            [
              'contract_type' => 'غير محدد',
              'amount_type_id' => 1,
              'amount' => 0,
              'amount_type_id_retirement'=> 2,
              'amount_retirement'=> 0,
              'amount_type_id_Social_Welfare_Fund'=> 2,
              'amount_Social_Welfare_Fund'=> 0,
              'amount_type_id_support_fund'=> 1,
              'amount_support_fund'=> 0,

            ],
            [
              'contract_type' => 'ملاك',
              'amount_type_id' => 1,
              'amount' => 150000,
              'amount_type_id_retirement'=> 2,
              'amount_retirement'=> 0.1,
              'amount_type_id_Social_Welfare_Fund'=> 2,
              'amount_Social_Welfare_Fund'=> 0.002,
              'amount_type_id_support_fund'=> 1,
              'amount_support_fund'=> 1000,
            ],
            [
              'contract_type' => 'عقد',
              'amount_type_id' => 1,
              'amount' => 0,
              'amount_type_id_retirement'=> 2,
              'amount_retirement'=> 0,
              'amount_type_id_Social_Welfare_Fund'=> 2,
              'amount_Social_Welfare_Fund'=> 0,
              'amount_type_id_support_fund'=> 1,
              'amount_support_fund'=> 0,
            ],
            [
              'contract_type' => 'اجير يومي',
              'amount_type_id' => 1,
              'amount' => 0,
              'amount_type_id_retirement'=> 2,
              'amount_retirement'=> 0,
              'amount_type_id_Social_Welfare_Fund'=> 2,
              'amount_Social_Welfare_Fund'=> 0,
              'amount_type_id_support_fund'=> 1,
              'amount_support_fund'=> 0,
            ],
            [
              'contract_type' => 'محاضر',
              'amount_type_id' => 1,
              'amount' => 0,
              'amount_type_id_retirement'=> 2,
              'amount_retirement'=> 0,
              'amount_type_id_Social_Welfare_Fund'=> 2,
              'amount_Social_Welfare_Fund'=> 0,
              'amount_type_id_support_fund'=> 1,
              'amount_support_fund'=> 0,
            ],
        ];
        
        foreach ($contract_types as $contract_type) {
            Contract_Type::create( $contract_type);
        }
    }
}
