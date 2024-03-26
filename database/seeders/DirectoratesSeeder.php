<?php

namespace Database\Seeders;

use App\Models\Directorates;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DirectoratesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $directorates = [
            'النجف',
            'بابل',
            'كربلاء',
            'القادسية',
            'السماوة',
            'الكرخ الاولى',
            'الكرخ الثانية',
            'الكرخ الثالثة',
            'الرصافة الاولى',
            'الرصافة الثانية',
            'الرصافة الثالثة',
            'ديالى',
            'الناصرية',
            'العمارة',
            'البصرة',
            'الكوت',
            'الرمادي',
            'كركوك',
            'تكريت',
            'الموصل',
            'دهوك',
            'اربيل',
            'السليمانية'
        ];
        foreach ($directorates as $directorate)
        {
            Directorates::create(['name' => $directorate]);
        }
    }
}
