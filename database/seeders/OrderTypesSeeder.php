<?php

namespace Database\Seeders;

use App\Models\OrderTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderTypes = [

            [
                'name' => "اجازة اعتيادية",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة خاصة",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة مرضية",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة ولادة",
                'section_id' => 16,
                'gender_id' => 3,
            ], [
                'name' => "اجازة امومة",
                'section_id' => 16,
                'gender_id' => 3,
            ], [
                'name' => "اجازة عدة",
                'section_id' => 16,
                'gender_id' => 3,
            ], [
                'name' => "اجازة حج",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة سنة بدون راتب",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة 5 سنوات",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "احتياجات خاصة",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => " اجازة احتياط",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "اجازة احتياط 2",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "مباشرة لأول مرة",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "انفكاك",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "مباشرة",
                'section_id' => 16,
                'gender_id' => 1,
            ], [
                'name' => "تكليف",
                'section_id' => 14,
                'gender_id' => 1,
            ], [
                'name' => "تنسيب",
                'section_id' => 14,
                'gender_id' => 1,
            ], [
                'name' => "نقل داخلي",
                'section_id' => 14,
                'gender_id' => 1,
            ], [
                'name' => "نقل خارجي",
                'section_id' => 14,
                'gender_id' => 1,
            ],
        ];

        foreach ($orderTypes as $orderType) {
            OrderTypes::create($orderType);
        }
    }
}
