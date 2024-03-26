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
        Schema::create('payroll_last_values', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('children_count_id')->nullable()->default('2');
            $table->foreign('children_count_id')->references('id')->on('children_count');

            $table->unsignedBigInteger('marital_status_id')->nullable()->default('2');
            $table->foreign('marital_status_id')->references('id')->on('marital_status');

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

            $table->unsignedBigInteger('contract_type_id')->nullable()->default('1');
            $table->foreign('contract_type_id')->references('id')->on('contract_type');

            $table->unsignedBigInteger('assignment_type_id')->nullable()->default('2');
            $table->foreign('assignment_type_id')->references('id')->on('assignment_type');

            $table->unsignedBigInteger('job_grade_id')->nullable()->default('8');
            $table->foreign('job_grade_id')->references('id')->on('job_grade');

            $table->unsignedBigInteger('career_stage_id')->nullable()->default('1');
            $table->foreign('career_stage_id')->references('id')->on('career_stage');

            $table->unsignedBigInteger('academic_achievement_id')->nullable()->default('7');
            $table->foreign('academic_achievement_id')->references('id')->on('academic_achievements');

            $table->unsignedBigInteger('scientific_title_stage_id')->nullable()->default('1');
            $table->foreign('scientific_title_stage_id')->references('id')->on('scientific_title_stage');

            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->unsignedBigInteger('main_section_id')->nullable()->default('1');
            $table->foreign('main_section_id')->references('id')->on('main_sections');

            //mail
            $table->string('implementation_mail_1_id', '100')->nullable();
            $table->integer('implementation_mail_1_amount');

            $table->string('implementation_mail_2_id', '100')->nullable();
            $table->integer('implementation_mail_2_amount');

            $table->string('implementation_mail_3_id', '100')->nullable();
            $table->integer('implementation_mail_3_amount');

            $table->string('implementation_mail_4_id', '100')->nullable();
            $table->integer('implementation_mail_4_amount');

            $table->string('implementation_mail_5_id', '100')->nullable();
            $table->integer('implementation_mail_5_amount');

            $table->string('implementation_mail_6_id', '100')->nullable();
            $table->integer('implementation_mail_6_amount');

            $table->string('implementation_mail_7_id', '100')->nullable();
            $table->integer('implementation_mail_7_amount');

            $table->string('implementation_mail_8_id', '100')->nullable();
            $table->integer('implementation_mail_8_amount');

            $table->string('implementation_mail_9_id', '100')->nullable();
            $table->integer('implementation_mail_9_amount');

            $table->string('implementation_mail_10_id', '100')->nullable();
            $table->integer('implementation_mail_10_amount');

            $table->string('implementation_mail_11_id', '100')->nullable();
            $table->integer('implementation_mail_11_amount');

            $table->string('implementation_mail_12_id', '100')->nullable();
            $table->integer('implementation_mail_12_amount');

            $table->string('implementation_mail_13_id', '100')->nullable();
            $table->integer('implementation_mail_13_amount');

            $table->string('implementation_mail_14_id', '100')->nullable();
            $table->integer('implementation_mail_14_amount');

            $table->string('implementation_mail_15_id', '100')->nullable();
            $table->integer('implementation_mail_15_amount');

            $table->string('implementation_mail_16_id', '100')->nullable();
            $table->integer('implementation_mail_16_amount');

            $table->string('implementation_mail_17_id', '100')->nullable();
            $table->integer('implementation_mail_17_amount');

            $table->string('implementation_mail_18_id', '100')->nullable();
            $table->integer('implementation_mail_18_amount');

            $table->string('implementation_mail_19_id', '100')->nullable();
            $table->integer('implementation_mail_19_amount');

            $table->string('implementation_mail_20_id', '100')->nullable();
            $table->integer('implementation_mail_20_amount');

            $table->string('implementation_mail_21_id', '100')->nullable();
            $table->integer('implementation_mail_21_amount');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_last_values');
    }
};
