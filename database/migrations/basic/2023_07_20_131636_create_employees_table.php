<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id_create')->nullable();
            $table->foreign('user_id_create')->references('id')->on('users');
            
            $table->unsignedBigInteger('user_id_update')->nullable();
            $table->foreign('user_id_update')->references('id')->on('users');

            //unique
            $table->string('url_address','60')->unique()->nullable();
            
            //foreign id and reference
            
            $table->unsignedBigInteger('facility_id')->nullable();
            $table->foreign('facility_id')->references('id')->on('facilitys')->default('1');
            
            $table->unsignedBigInteger('facility_id_assignment')->nullable();
            $table->foreign('facility_id_assignment')->references('id')->on('facilitys');

            $table->unsignedBigInteger('facility_id_placement')->nullable();
            $table->foreign('facility_id_placement')->references('id')->on('facilitys');

            $table->unsignedBigInteger('salary_address_id')->nullable();
            $table->foreign('salary_address_id')->references('id')->on('facilitys');
            
            
            
            //employee_info
            
            
            $table->unsignedBigInteger('spouse_job_id')->nullable()->default('1');
            $table->foreign('spouse_job_id')->references('id')->on('spouse_job');

            $table->unsignedBigInteger('children_count_id')->nullable()->default('2');
            $table->foreign('children_count_id')->references('id')->on('children_count');

            $table->unsignedBigInteger('marital_status_id')->nullable()->default('2');
            $table->foreign('marital_status_id')->references('id')->on('marital_status');
            
            $table->unsignedBigInteger('nationality_id')->nullable()->default('1');
            $table->foreign('nationality_id')->references('id')->on('nationality');
            
            $table->unsignedBigInteger('mother_language_id')->nullable()->default('1');
            $table->foreign('mother_language_id')->references('id')->on('mother_language');
            
            $table->unsignedBigInteger('gender_id')->nullable()->default('1');
            $table->foreign('gender_id')->references('id')->on('gender');

            $table->integer('job_number')->unique()->nullable();
            $table->string('employee_password','50')->nullable()->default('00000000');
            $table->string('name','20')->nullable();
            $table->string('father_name','20')->nullable();
            $table->string('grandfather_name','20')->nullable();
            $table->string('fourth_grandfather_name','20')->nullable();
            $table->string('surname','20')->nullable();
            $table->string('full_name','100')->nullable();
            $table->string('mother_name','20')->nullable();
            $table->string('mother_father_name','20')->nullable();
            $table->string('mother_grandfather_name','20')->nullable();
            $table->string('mother_surname','20')->nullable();
            $table->string('mother_full_name','80')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('place_of_birth','20')->nullable();
            $table->string('first_husband_name','20')->nullable();
            $table->string('husband_father_name','20')->nullable();
            $table->string('husband_grandfather_name','20')->nullable();
            $table->string('husband_surname','20')->nullable();
            $table->bigInteger('employee_phone_number')->nullable();
            $table->string('employee_email','50')->nullable();
            $table->integer('is_spouse_disabled')->nullable();
            
            //financial_info
            $table->string('card_id','100')->nullable();
            $table->string('bank_name_id','100')->nullable();
            $table->string('bank_account','100')->nullable();
            $table->string('iban_code','100')->nullable();





            //appointment_info

            $table->unsignedBigInteger('driver_allowance_id')->nullable()->default('1');
            $table->foreign('driver_allowance_id')->references('id')->on('driver_allowance');

            $table->unsignedBigInteger('agricultural_risk_id')->nullable()->default('1');
            $table->foreign('agricultural_risk_id')->references('id')->on('agricultural_risk');

            $table->unsignedBigInteger('electric_shock_id')->nullable()->default('1');
            $table->foreign('electric_shock_id')->references('id')->on('electric_shock');

            $table->unsignedBigInteger('university_service_id')->nullable()->default('1');
            $table->foreign('university_service_id')->references('id')->on('university_service');

            $table->unsignedBigInteger('night_watchman_id')->nullable()->default('1');
            $table->foreign('night_watchman_id')->references('id')->on('night_watchman');

            $table->unsignedBigInteger('security_guard_id')->nullable()->default('1');
            $table->foreign('security_guard_id')->references('id')->on('security_guard');


            $table->unsignedBigInteger('danager_provision_id')->nullable()->default('1');
            $table->foreign('danager_provision_id')->references('id')->on('danager_provision');

            $table->unsignedBigInteger('employee_status_id')->nullable()->default('1');
            $table->foreign('employee_status_id')->references('id')->on('employee_status');

            $table->unsignedBigInteger('contract_type_id')->nullable()->default('1');
            $table->foreign('contract_type_id')->references('id')->on('contract_type');

            $table->unsignedBigInteger('employment_type_id')->nullable()->default('1');
            $table->foreign('employment_type_id')->references('id')->on('employment_type');

            $table->unsignedBigInteger('assignment_type_id')->nullable()->default('2');
            $table->foreign('assignment_type_id')->references('id')->on('assignment_type');
            
            $table->unsignedBigInteger('job_title_id')->nullable();
            $table->foreign('job_title_id')->references('id')->on('job_title');
            
            $table->unsignedBigInteger('job_grade_id')->nullable()->default('8');
            $table->foreign('job_grade_id')->references('id')->on('job_grade');
            
            $table->unsignedBigInteger('career_stage_id')->nullable()->default('1');
            $table->foreign('career_stage_id')->references('id')->on('career_stage');
            
            $table->date('appointment_date')->nullable();
            $table->string('appointment_ministerial_order_number','20')->nullable();
            $table->date('appointment_ministerial_order_date')->nullable();
            $table->string('appointment_administrative_order_number','20')->nullable();
            $table->date('appointment_administrative_order_date')->nullable();
            $table->string('appointment_first_initiation_number','20')->nullable();
            $table->date('appointment_first_initiation_date')->nullable();
            $table->integer('nominal_salary')->nullable()->default('0');
            $table->integer('total_salary')->nullable()->default('0');
            $table->date('job_grade_date')->nullable();
            $table->date('career_stage_date')->nullable();

            //national_card_info
            $table->integer('is_national_card')->nullable();
            $table->string('national_card_number','12')->nullable();
            $table->date('national_card_date_of_issue')->nullable();
            $table->string('national_card_issuing_authority','50')->nullable();
            $table->string('national_card_family_number','20')->nullable();
            $table->string('civil_status_identity_number','20')->nullable();
            $table->string('civil_status_registry_number','10')->nullable();
            $table->string('civil_status_newspaper_number','10')->nullable();
            $table->date('civil_status_issue_date')->nullable();
            $table->string('civil_status_issuer','50')->nullable();
            $table->string('nationality_certificate_number','20')->nullable();
            $table->string('nationality_certificate_authority_issuing','50')->nullable();
            $table->date('nationality_certificate_authority_issuing_date')->nullable();
            $table->string('nationality_certificate_authority_issuing_wallet','20')->nullable();
            
            //housing_card_info
            $table->string('housing_card_number','20')->nullable();
            $table->date('housing_card_date_of_issue')->nullable();
            $table->string('housing_card_issuing_authority','50')->nullable();
            $table->string('housing_card_residence_address','20')->nullable();
            $table->string('housing_card_governorate','20')->nullable();
            $table->string('housing_card_district','20')->nullable();
            $table->string('housing_card_neighborhood','20')->nullable();
            $table->string('housing_card_house_number','20')->nullable();
            $table->string('housing_card_nearest_point_of_reference','30')->nullable();
            $table->string('housing_card_mukhtar_name','40')->nullable();
            
            //certificate_info
            $table->unsignedBigInteger('first_academic_achievement_id')->nullable()->default('7');
            $table->foreign('first_academic_achievement_id')->references('id')->on('academic_achievements');
            
            $table->unsignedBigInteger('academic_achievement_id')->nullable()->default('7');
            $table->foreign('academic_achievement_id')->references('id')->on('academic_achievements');
            
            $table->unsignedBigInteger('teaching_specialization_id')->nullable();
            $table->foreign('teaching_specialization_id')->references('id')->on('teaching_specialization');
            
            $table->string('certificate_of_appointment','20')->nullable();
            $table->string('certificate_of_appointment_graduation_year','9')->nullable();
            $table->string('certificate_of_appointment_university_institute_school_name','50')->nullable();
            $table->string('certificate_of_appointment_college_name','50')->nullable();
            $table->string('certificate_of_appointment_major','20')->nullable();
            $table->integer('certificate_of_appointment_mark')->nullable();
            
            // last_certificate_info
            $table->string('last_certificate_obtained','20')->nullable();
            $table->string('last_year_of_graduation','9')->nullable();
            $table->string('last_name_of_the_university','30')->nullable();
            $table->string('last_university_institute_school_name','50')->nullable();
            $table->string('last_name_of_the_college','50')->nullable();
            $table->string('last_major','20')->nullable();
            $table->integer('last_certificate_of_appointment_mark')->nullable();
            
            // scientific_title
            $table->unsignedBigInteger('scientific_title_stage_id')->nullable()->default('1');
            $table->foreign('scientific_title_stage_id')->references('id')->on('scientific_title_stage');
            $table->integer('is_scientific_title')->nullable();
            $table->date('scientific_title_date')->nullable();
            

            //political_dismissal
            $table->unsignedBigInteger('political_dismissal_type_id')->nullable();
            $table->foreign('political_dismissal_type_id')->references('id')->on('political_dismissal_type');
            $table->integer('is_political_dismissal')->nullable();
            $table->date('political_dismissal_duration_from')->nullable();
            $table->date('political_dismissal_duration_to')->nullable();
            $table->string('political_dismissal_years','4')->nullable();
            $table->string('political_dismissal_months','2')->nullable();
            $table->string('political_dismissal_days','2')->nullable();
            $table->string('political_dismissal_order_number','20')->nullable();
            $table->date('political_dismissal_order_date')->nullable();
            $table->string('political_dismissal_reappointment_number','20')->nullable();
            $table->date('political_dismissal_date_reappointment')->nullable();
            $table->string('political_dismissal_ministerial_reappointment_number','20')->nullable();
            $table->date('political_dismissal_ministerial_reappointment_date')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
