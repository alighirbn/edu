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
        Schema::create('payroll', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('url_address', '60');
            $table->integer('payroll_year');
            $table->integer('payroll_month');
            $table->integer('payroll_days');
            $table->integer('payroll_missing_days');
            $table->integer('nominal_salary_amount');

            $table->unsignedBigInteger('employee_id')->nullable();
            $table->foreign('employee_id')->references('id')->on('employees');

            $table->unsignedBigInteger('financial_month_id')->nullable();
            $table->foreign('financial_month_id')->references('id')->on('payroll_date');

            $table->unsignedBigInteger('financial_accountent_id')->nullable();
            $table->foreign('financial_accountent_id')->references('id')->on('financial_accountant');

            $table->unsignedBigInteger('facility_id')->nullable();
            $table->foreign('facility_id')->references('id')->on('facilitys');

            // allowances
            $table->integer('Fixed_allowances_amount');
            $table->integer('transportation_allowances_amount');
            $table->integer('Certificate_allowance_amount');
            $table->integer('Position_allowance_amount');
            $table->integer('danager_allowance_amount');
            $table->integer('electric_shock_allowance_amount');
            $table->integer('University_service_allowance_amount');
            $table->integer('Scientific_title_allowance_amount');
            $table->integer('Marital_Status_allowance_amount');
            $table->integer('number_of_children_allowance_amount');
            $table->integer('Night_watchman_allowance_amount');
            $table->integer('Security_guard_allowance_amount');
            $table->integer('currency_difference_allowance_amount');

            $table->integer('Debit_increases_1_allowance_amount');
            $table->string('Debit_increases_1_allowance_note', '100')->nullable();

            $table->integer('Debit_increases_2_allowance_amount');
            $table->string('Debit_increases_2_allowance_note', '100')->nullable();

            $table->integer('Previous_salary_allowance_amount');
            $table->integer('Tuition_expenses_allowance_amount');
            $table->integer('Trustees_amount');
            $table->integer('driver_allowance_amount')->nullable();
            $table->integer('agricultural_risk_allowance_amount');
            $table->integer('total_salary_amount');

            //deduction
            $table->integer('retirement_contributions_amount');
            $table->integer('retirement_amount');
            $table->integer('tax_deduction_amount');
            $table->integer('Social_Welfare_Fund_amount');
            $table->integer('Medical_Insurance_amount');
            $table->integer('life_insurance_amount');
            $table->integer('stamp_fee_amount');
            $table->integer('support_fund_amount');
            $table->integer('central_Statistical_Organization_amount');

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

            $table->unsignedBigInteger('user_id_create')->nullable();
            $table->foreign('user_id_create')->references('id')->on('users');
            $table->unsignedBigInteger('user_id_update')->nullable();
            $table->foreign('user_id_update')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll');
    }
};
