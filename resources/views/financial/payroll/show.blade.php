<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="justify-content-around ">


                        <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                            {{ __('word.nominal_salary') }}
                        </h2>
                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="payroll_year" class="w-full mb-1" :value="__('word.payroll_year')" />
                                <p id="payroll_year" class="w-full block mt-1" type="number" name="payroll_year">
                                    {{ $payroll->payroll_year }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="payroll_month" class="w-full mb-1" :value="__('word.payroll_month')" />
                                <p id="payroll_month" class="w-full block mt-1" type="number" name="payroll_month">
                                    {{ $payroll->payroll_month }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="nominal_salary_amount" class="w-full mb-1" :value="__('word.nominal_salary_amount')" />
                                <p id="nominal_salary_amount" class="w-full block mt-1 allowances allowances"
                                    type="number" name="nominal_salary_amount"> {{ $payroll->nominal_salary_amount }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="payroll_days" class="w-full mb-1" :value="__('word.payroll_days')" />
                                <p id="payroll_days" class="w-full block mt-1" type="number" name="payroll_days">
                                    {{ $payroll->payroll_days }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="payroll_missing_days" class="w-full mb-1" :value="__('word.payroll_missing_days')" />
                                <p id="payroll_missing_days" class="w-full block mt-1" type="number"
                                    name="payroll_missing_days">
                                    {{ $payroll->payroll_missing_days }}
                                </p>
                            </div>
                        </div>
                        <div class="allowances">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.allowances') }}
                            </h2>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Fixed_allowances_amount" class="w-48 mb-1" :value="__('word.Fixed_allowances_amount')" />
                                    <p id="Fixed_allowances_amount" class="w-48 block mt-1 allowances" type="number"
                                        name="Fixed_allowances_amount"> {{ $payroll->Fixed_allowances_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="transportation_allowances_amount" class="w-48 mb-1"
                                        :value="__('word.transportation_allowances_amount')" />
                                    <p id="transportation_allowances_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="transportation_allowances_amount">
                                        {{ $payroll->transportation_allowances_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Certificate_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Certificate_allowance_amount')" />
                                    <p id="Certificate_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Certificate_allowance_amount">
                                        {{ $payroll->Certificate_allowance_amount }}
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Position_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Position_allowance_amount')" />
                                    <p id="Position_allowance_amount" class="w-48 block mt-1 allowances" type="number"
                                        name="Position_allowance_amount"> {{ $payroll->Position_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="danager_allowance_amount" class="w-48 mb-1" :value="__('word.danager_allowance_amount')" />
                                    <p id="danager_allowance_amount" class="w-48 block mt-1 allowances" type="number"
                                        name="danager_allowance_amount"> {{ $payroll->danager_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="electric_shock_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.electric_shock_allowance_amount')" />
                                    <p id="electric_shock_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="electric_shock_allowance_amount">
                                        {{ $payroll->electric_shock_allowance_amount }}
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="University_service_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.University_service_allowance_amount')" />

                                    <p id="University_service_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="University_service_allowance_amount">
                                        {{ $payroll->University_service_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Scientific_title_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Scientific_title_allowance_amount')" />

                                    <p id="Scientific_title_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Scientific_title_allowance_amount">
                                        {{ $payroll->Scientific_title_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Marital_Status_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Marital_Status_allowance_amount')" />
                                    <p id="Marital_Status_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Marital_Status_allowance_amount">
                                        {{ $payroll->Marital_Status_allowance_amount }}
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="number_of_children_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.number_of_children_allowance_amount')" />

                                    <p id="number_of_children_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="number_of_children_allowance_amount">
                                        {{ $payroll->number_of_children_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Night_watchman_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Night_watchman_allowance_amount')" />
                                    <p id="Night_watchman_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Night_watchman_allowance_amount">
                                        {{ $payroll->Night_watchman_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Security_guard_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Security_guard_allowance_amount')" />
                                    <p id="Security_guard_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Security_guard_allowance_amount">
                                        {{ $payroll->Security_guard_allowance_amount }}
                                    </p>

                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="currency_difference_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.currency_difference_allowance_amount')" />
                                    <p id="currency_difference_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="currency_difference_allowance_amount">
                                        {{ $payroll->currency_difference_allowance_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Debit_increases_1_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Debit_increases_1_allowance_amount')" />
                                    <p id="Debit_increases_1_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Debit_increases_1_allowance_amount">
                                        {{ $payroll->Debit_increases_1_allowance_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Debit_increases_2_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Debit_increases_2_allowance_amount')" />
                                    <p id="Debit_increases_2_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Debit_increases_2_allowance_amount">
                                        {{ $payroll->Debit_increases_2_allowance_amount }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Previous_salary_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Previous_salary_allowance_amount')" />
                                    <p id="Previous_salary_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Previous_salary_allowance_amount">
                                        {{ $payroll->Previous_salary_allowance_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Tuition_expenses_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.Tuition_expenses_allowance_amount')" />
                                    <p id="Tuition_expenses_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="Tuition_expenses_allowance_amount">
                                        {{ $payroll->Tuition_expenses_allowance_amount }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Trustees_amount" class="w-48 mb-1" :value="__('word.Trustees_amount')" />
                                    <p id="Trustees_amount" class="w-48 block mt-1 allowances" type="number"
                                        name="Trustees_amount"> {{ $payroll->Trustees_amount }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="driver_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.driver_allowance_amount')" />
                                    <p id="driver_allowance_amount" class="w-48 block mt-1 allowances" type="number"
                                        name="driver_allowance_amount"> {{ $payroll->driver_allowance_amount }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="agricultural_risk_allowance_amount" class="w-48 mb-1"
                                        :value="__('word.agricultural_risk_allowance_amount')" />

                                    <p id="agricultural_risk_allowance_amount" class="w-48 block mt-1 allowances"
                                        type="number" name="agricultural_risk_allowance_amount">
                                        {{ $payroll->agricultural_risk_allowance_amount }}
                                    </p>

                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="total_salary_amount" class="w-48 mb-1" :value="__('word.total_salary_amount')" />
                                    <p id="total_salary_amount" class="w-48 block mt-1" type="number"
                                        name="total_salary_amount"> {{ $payroll->total_salary_amount }}
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="deduction">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-48">
                                {{ __('word.deduction') }}
                            </h2>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="retirement_contributions_amount" class="w-48 mb-1"
                                        :value="__('word.retirement_contributions_amount')" />
                                    <p id="retirement_contributions_amount"
                                        class="w-48 block mt-1 deduction deduction" type="number"
                                        name="retirement_contributions_amount">
                                        {{ $payroll->retirement_contributions_amount }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="retirement_amount" class="w-48 mb-1" :value="__('word.retirement_amount')" />
                                    <p id="retirement_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="retirement_amount"> {{ $payroll->retirement_amount }}
                                    </p>

                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="tax_deduction_amount" class="w-48 mb-1" :value="__('word.tax_deduction_amount')" />
                                    <p id="tax_deduction_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="tax_deduction_amount"> {{ $payroll->tax_deduction_amount }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Social_Welfare_Fund_amount" class="w-48 mb-1"
                                        :value="__('word.Social_Welfare_Fund_amount')" />
                                    <p id="Social_Welfare_Fund_amount" class="w-48 block mt-1 deduction"
                                        type="number" name="Social_Welfare_Fund_amount">
                                        {{ $payroll->Social_Welfare_Fund_amount }}
                                    </p>

                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="Medical_Insurance_amount" class="w-48 mb-1"
                                        :value="__('word.Medical_Insurance_amount')" />
                                    <p id="Medical_Insurance_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="Medical_Insurance_amount"> {{ $payroll->Medical_Insurance_amount }}
                                    </p>
                                </div>




                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="life_insurance_amount" class="w-48 mb-1" :value="__('word.life_insurance_amount')" />
                                    <p id="life_insurance_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="life_insurance_amount"> {{ $payroll->life_insurance_amount }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="stamp_fee_amount" class="w-48 mb-1" :value="__('word.stamp_fee_amount')" />
                                    <p id="stamp_fee_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="stamp_fee_amount"> {{ $payroll->stamp_fee_amount }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="support_fund_amount" class="w-48 mb-1" :value="__('word.support_fund_amount')" />
                                    <p id="support_fund_amount" class="w-48 block mt-1 deduction" type="number"
                                        name="support_fund_amount"> {{ $payroll->support_fund_amount }}
                                    </p>

                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="central_Statistical_Organization_amount" class="w-48 mb-1"
                                        :value="__('word.central_Statistical_Organization_amount')" />
                                    <p id="central_Statistical_Organization_amount" class="w-48 block mt-1 deduction"
                                        type="number" name="central_Statistical_Organization_amount">
                                        {{ $payroll->central_Statistical_Organization_amount }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="implementation">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-48">
                                {{ __('word.implementation') }}
                            </h2>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_1_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_1_id')" />
                                    <p id="implementation_mail_1_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_1_id"> {{ $payroll->implementation_mail_1_id }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_1_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_1_amount')" />
                                    <p id="implementation_mail_1_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_1_amount">
                                        {{ $payroll->implementation_mail_1_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_2_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_2_id')" />
                                    <p id="implementation_mail_2_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_2_id"> {{ $payroll->implementation_mail_2_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_2_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_2_amount')" />
                                    <p id="implementation_mail_2_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_2_amount">
                                        {{ $payroll->implementation_mail_2_amount }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_3_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_3_id')" />
                                    <p id="implementation_mail_3_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_3_id"> {{ $payroll->implementation_mail_3_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_3_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_3_amount')" />
                                    <p id="implementation_mail_3_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_3_amount">
                                        {{ $payroll->implementation_mail_3_amount }}
                                    </p>
                                </div>


                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_4_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_4_id')" />
                                    <p id="implementation_mail_4_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_4_id"> {{ $payroll->implementation_mail_4_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_4_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_4_amount')" />
                                    <p id="implementation_mail_4_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_4_amount">
                                        {{ $payroll->implementation_mail_4_amount }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_5_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_5_id')" />
                                    <p id="implementation_mail_5_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_5_id"> {{ $payroll->implementation_mail_5_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_5_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_5_amount')" />
                                    <p id="implementation_mail_5_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_5_amount">
                                        {{ $payroll->implementation_mail_5_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_6_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_6_id')" />
                                    <p id="implementation_mail_6_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_6_id"> {{ $payroll->implementation_mail_6_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_6_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_6_amount')" />
                                    <p id="implementation_mail_6_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_6_amount">
                                        {{ $payroll->implementation_mail_6_amount }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex">

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_7_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_7_id')" />
                                    <p id="implementation_mail_7_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_7_id"> {{ $payroll->implementation_mail_7_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_7_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_7_amount')" />
                                    <p id="implementation_mail_7_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_7_amount">
                                        {{ $payroll->implementation_mail_7_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_8_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_8_id')" />
                                    <p id="implementation_mail_8_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_8_id"> {{ $payroll->implementation_mail_8_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_8_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_8_amount')" />
                                    <p id="implementation_mail_8_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_8_amount">
                                        {{ $payroll->implementation_mail_8_amount }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_9_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_9_id')" />
                                    <p id="implementation_mail_9_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_9_id"> {{ $payroll->implementation_mail_9_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_9_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_9_amount')" />
                                    <p id="implementation_mail_9_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_9_amount">
                                        {{ $payroll->implementation_mail_9_amount }}
                                    </p>
                                </div>


                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_10_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_10_id')" />
                                    <p id="implementation_mail_10_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_10_id"> {{ $payroll->implementation_mail_10_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_10_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_10_amount')" />
                                    <p id="implementation_mail_10_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_10_amount">
                                        {{ $payroll->implementation_mail_10_amount }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_11_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_11_id')" />
                                    <p id="implementation_mail_11_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_11_id"> {{ $payroll->implementation_mail_11_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_11_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_11_amount')" />
                                    <p id="implementation_mail_11_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_11_amount">
                                        {{ $payroll->implementation_mail_11_amount }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_12_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_12_id')" />
                                    <p id="implementation_mail_12_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_12_id"> {{ $payroll->implementation_mail_12_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_12_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_12_amount')" />
                                    <p id="implementation_mail_12_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_12_amount">
                                        {{ $payroll->implementation_mail_12_amount }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex">



                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_13_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_13_id')" />
                                    <p id="implementation_mail_13_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_13_id"> {{ $payroll->implementation_mail_13_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_13_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_13_amount')" />
                                    <p id="implementation_mail_13_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_13_amount">
                                        {{ $payroll->implementation_mail_13_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_14_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_14_id')" />
                                    <p id="implementation_mail_14_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_14_id"> {{ $payroll->implementation_mail_14_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_14_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_14_amount')" />
                                    <p id="implementation_mail_14_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_14_amount">
                                        {{ $payroll->implementation_mail_14_amount }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_15_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_15_id')" />
                                    <p id="implementation_mail_15_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_15_id"> {{ $payroll->implementation_mail_15_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_15_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_15_amount')" />
                                    <p id="implementation_mail_15_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_15_amount">
                                        {{ $payroll->implementation_mail_15_amount }}
                                    </p>
                                </div>


                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_16_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_16_id')" />
                                    <p id="implementation_mail_16_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_16_id"> {{ $payroll->implementation_mail_16_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_16_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_16_amount')" />
                                    <p id="implementation_mail_16_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_16_amount">
                                        {{ $payroll->implementation_mail_16_amount }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_17_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_17_id')" />
                                    <p id="implementation_mail_17_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_17_id"> {{ $payroll->implementation_mail_17_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_17_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_17_amount')" />
                                    <p id="implementation_mail_17_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_17_amount">
                                        {{ $payroll->implementation_mail_17_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_18_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_18_id')" />
                                    <p id="implementation_mail_18_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_18_id"> {{ $payroll->implementation_mail_18_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_18_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_18_amount')" />
                                    <p id="implementation_mail_18_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_18_amount">
                                        {{ $payroll->implementation_mail_18_amount }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_19_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_19_id')" />
                                    <p id="implementation_mail_19_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_19_id"> {{ $payroll->implementation_mail_19_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_19_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_19_amount')" />
                                    <p id="implementation_mail_19_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_19_amount">
                                        {{ $payroll->implementation_mail_19_amount }}
                                    </p>
                                </div>

                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_20_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_20_id')" />
                                    <p id="implementation_mail_20_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_20_id"> {{ $payroll->implementation_mail_20_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_20_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_20_amount')" />
                                    <p id="implementation_mail_20_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_20_amount">
                                        {{ $payroll->implementation_mail_20_amount }}
                                    </p>
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_21_id" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_21_id')" />
                                    <p id="implementation_mail_21_id" class="w-48 block mt-1" type="text"
                                        name="implementation_mail_21_id"> {{ $payroll->implementation_mail_21_id }}
                                    </p>
                                </div>
                                <div class=" mx-4 my-4 w-48">
                                    <x-input-label for="implementation_mail_21_amount" class="w-48 mb-1"
                                        :value="__('word.implementation_mail_21_amount')" />
                                    <p id="implementation_mail_21_amount" class="w-48 block mt-1 implementation"
                                        type="number" name="implementation_mail_21_amount">
                                        {{ $payroll->implementation_mail_21_amount }}
                                    </p>
                                </div>



                            </div>
                        </div>
                        <div class="flex">
                            @if (isset($payroll->user_id_create))
                                <div class="mx-4 my-4 ">
                                    {{ __('word.user_create') }} {{ $payroll->get_user_create->name }}
                                    {{ $payroll->created_at }}
                                </div>
                            @endif

                            @if (isset($payroll->user_id_update))
                                <div class="mx-4 my-4 ">
                                    {{ __('word.user_update') }} {{ $payroll->get_user_update->name }}
                                    {{ $payroll->updated_at }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
