<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Basic\Facility\Duality;
use App\Models\Basic\Facility\Main_Section;
use App\Models\Basic\Facility\School_Invironment;
use App\Models\Basic\Facility\School_Time;
use App\Models\province;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Facility referance tables
        province::create(['province'=>'النجف']);
        Duality::create(['dualities'=>'غير محدد']);
       
        School_Invironment::create(['school_invironments'=>'غير محدد']);
        School_Time::create(['school_times'=>'غير محدد']);
        
        $this->call([
          // General seeders
          Permission_Seeder::class,
          Department_Seeder::class,
          YesNo_Seeder::class,
          Amount_Type_Seeder::class,
          
          //Facility Seeders
          Main_Sections_Seeder::class,
          School_Gender_Seeder::class,
          School_Stages_Seeder::class,
          School_Properties_Seeder::class,
          Facility_Type_Seeder::class,
          Facility_Seeder::class,
          Schools_Seeder::class,
          //employees seeders
          Agricultural_Risk_Seeder::class,
          Driver_Allowance_Seeder::class,
          Electric_Shock_Seeder::class,
          University_Service_Seeder::class,
          Spouse_Job_Seeder::class,
          Children_Count_Seeder::class,
          Danager_Provision_Seeder::class,
          Job_Grade_Seeder::class,
          Career_Stage_Seeder::class,
          Academic_Achievement_Seeder::class,
          Assignment_Type_Seeder::class,
          Contract_Type_Seeder::class,
          Employee_Status_Seeder::class,
          Employment_type_seeder::class,
          Gender_Seeder::class,
          Job_Title_Seeder::class,
          Marital_Status_seeder::class,
          Mother_Language_Seeder::class,
          Nationality_Seeder::class,
          Scientific_Title_Seeder::class,
          Teaching_Specialization_Seeder::class,
          Night_Watchman_Seeder::class,
          Security_Guard_Seeder::class,
          Employee_Seeder::class,

          
          //Finacial Seeders
          Salary_Scale_Seeder::class,
          
        ]);
    }

}
