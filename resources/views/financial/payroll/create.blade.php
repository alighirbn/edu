<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')

    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        @endif

                        @include('financial.employee.show')

                        <div class="float-left">
                            @can('employee-update')
                                <a href="{{ route('payroll.employee_edit', $employee->url_address) }}"
                                    class="mx-4 my-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{ __('word.edit') }}</a>
                            @endcan
                        </div>

                        <form method="POST" action="{{ route('payroll.store') }}">
                            @csrf
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.nominal_salary') }}
                            </h2>
                            <div class="flex">

                                <x-text-input id="employee_id" type="hidden" name="employee_id"
                                    value="{{ $employee->id }}" />
                                <x-text-input id="financial_month_id" type="hidden" name="financial_month_id"
                                    value="{{ $payroll_date->id }}" />
                                <x-text-input id="financial_accountent_id" type="hidden" name="financial_accountent_id"
                                    value="{{ $financial_accountant->id }}" />
                                <x-text-input id="facility_id" type="hidden" name="facility_id"
                                    value="{{ $employee->salary_address_id }}" />

                                <x-text-input id="main_section_id" type="hidden" name="main_section_id"
                                    value="{{ $employee->get_payroll_facility->main_section_id }}" />

                                <x-text-input id="children_count_id" type="hidden" name="children_count_id"
                                    value="{{ $employee->children_count_id }}" />

                                <x-text-input id="marital_status_id" type="hidden" name="marital_status_id"
                                    value="{{ $employee->marital_status_id }}" />

                                <x-text-input id="driver_allowance_id" type="hidden" name="driver_allowance_id"
                                    value="{{ $employee->driver_allowance_id }}" />

                                <x-text-input id="agricultural_risk_id" type="hidden" name="agricultural_risk_id"
                                    value="{{ $employee->agricultural_risk_id }}" />

                                <x-text-input id="electric_shock_id" type="hidden" name="electric_shock_id"
                                    value="{{ $employee->electric_shock_id }}" />

                                <x-text-input id="university_service_id" type="hidden" name="university_service_id"
                                    value="{{ $employee->university_service_id }}" />

                                <x-text-input id="danager_provision_id" type="hidden" name="danager_provision_id"
                                    value="{{ $employee->danager_provision_id }}" />

                                <x-text-input id="night_watchman_id" type="hidden" name="night_watchman_id"
                                    value="{{ $employee->night_watchman_id }}" />

                                <x-text-input id="security_guard_id" type="hidden" name="security_guard_id"
                                    value="{{ $employee->security_guard_id }}" />

                                <x-text-input id="contract_type_id" type="hidden" name="contract_type_id"
                                    value="{{ $employee->contract_type_id }}" />

                                <x-text-input id="assignment_type_id" type="hidden" name="assignment_type_id"
                                    value="{{ $employee->assignment_type_id }}" />

                                <x-text-input id="job_grade_id" type="hidden" name="job_grade_id"
                                    value="{{ $employee->job_grade_id }}" />

                                <x-text-input id="career_stage_id" type="hidden" name="career_stage_id"
                                    value="{{ $employee->career_stage_id }}" />

                                <x-text-input id="academic_achievement_id" type="hidden" name="academic_achievement_id"
                                    value="{{ $employee->academic_achievement_id }}" />

                                <x-text-input id="scientific_title_stage_id" type="hidden"
                                    name="scientific_title_stage_id"
                                    value="{{ $employee->scientific_title_stage_id }}" />




                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="payroll_year" class="w-full mb-1" :value="__('word.payroll_year')" />
                                    <x-text-input id="payroll_year" class="w-full block mt-1" type="number"
                                        name="payroll_year" value="{{ $payroll_date->payroll_year }}" />
                                    <x-input-error :messages="$errors->get('payroll_year')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="payroll_month" class="w-full mb-1" :value="__('word.payroll_month')" />
                                    <x-text-input id="payroll_month" class="w-full block mt-1" type="number"
                                        name="payroll_month" value="{{ $payroll_date->payroll_month }}" />
                                    <x-input-error :messages="$errors->get('payroll_month')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nominal_salary_amount" class="w-full mb-1"
                                        :value="__('word.nominal_salary_amount')" />
                                    <x-text-input id="nominal_salary_amount"
                                        class="w-full block mt-1 allowances allowances" type="number"
                                        name="nominal_salary_amount" value="{{ old('nominal_salary_amount') }}" />
                                    <x-input-error :messages="$errors->get('nominal_salary_amount')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="payroll_days" class="w-full mb-1" :value="__('word.payroll_days')" />
                                    <x-text-input id="payroll_days" class="w-full block mt-1" type="number"
                                        name="payroll_days" value="{{ 30 }}" />
                                    <x-input-error :messages="$errors->get('payroll_days')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="payroll_missing_days" class="w-full mb-1" :value="__('word.payroll_missing_days')" />
                                    <x-text-input id="payroll_missing_days" class="w-full block mt-1" type="number"
                                        name="payroll_missing_days" value="{{ 0 }}" />

                                    <x-input-error :messages="$errors->get('payroll_missing_days')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="allowances">
                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.allowances') }}
                                </h2>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Fixed_allowances_amount" class="w-48 mb-1"
                                            :value="__('word.Fixed_allowances_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Fixed_allowances_amount" class="m-2"
                                                data-changesource="employee.contract_type_id"
                                                data-change="contract_type_id" data-input="Fixed_allowances_amount"
                                                data-type="dynamic"
                                                data-sourcetype="employee.get_contract_type.amount_type_id"
                                                data-source="employee.get_contract_type.amount">
                                            <x-text-input id="Fixed_allowances_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Fixed_allowances_amount"
                                                value="{{ old('Fixed_allowances_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Fixed_allowances_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="transportation_allowances_amount" class="w-48 mb-1"
                                            :value="__('word.transportation_allowances_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_transportation_allowances_amount"
                                                class="m-2"
                                                data-changesource="employee.get_payroll_facility.main_section_id"
                                                data-change="main_section_id"
                                                data-input="transportation_allowances_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_payroll_facility.get_main_section_id.amount_type_id"
                                                data-source="employee.get_payroll_facility.get_main_section_id.amount">
                                            <x-text-input id="transportation_allowances_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="transportation_allowances_amount"
                                                value="{{ old('transportation_allowances_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('transportation_allowances_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Certificate_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Certificate_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Certificate_allowance_amount"
                                                class="m-2" data-changesource="employee.academic_achievement_id"
                                                data-change="academic_achievement_id"
                                                data-input="Certificate_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_academic_achievement.amount_type_id"
                                                data-source="employee.get_academic_achievement.amount">
                                            <x-text-input id="Certificate_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Certificate_allowance_amount"
                                                value="{{ old('Certificate_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Certificate_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Position_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Position_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Position_allowance_amount" class="m-2"
                                                data-changesource="employee.assignment_type_id"
                                                data-change="assignment_type_id"
                                                data-input="Position_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_assignment_type.amount_type_id"
                                                data-source="employee.get_assignment_type.amount">
                                            <x-text-input id="Position_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Position_allowance_amount"
                                                value="{{ old('Position_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Position_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="danager_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.danager_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_danager_allowance_amount" class="m-2"
                                                data-changesource="employee.danager_provision_id"
                                                data-change="danager_provision_id"
                                                data-input="danager_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_danager_provision.amount_type_id"
                                                data-source="employee.get_danager_provision.amount">
                                            <x-text-input id="danager_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="danager_allowance_amount"
                                                value="{{ old('danager_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('danager_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="electric_shock_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.electric_shock_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_electric_shock_allowance_amount"
                                                class="m-2" data-changesource="employee.electric_shock_id"
                                                data-change="electric_shock_id"
                                                data-input="electric_shock_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_electric_shock.amount_type_id"
                                                data-source="employee.get_electric_shock.amount">
                                            <x-text-input id="electric_shock_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="electric_shock_allowance_amount"
                                                value="{{ old('electric_shock_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('electric_shock_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="University_service_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.University_service_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_University_service_allowance_amount"
                                                class="m-2" data-changesource="employee.university_service_id"
                                                data-change="university_service_id"
                                                data-input="University_service_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_university_service.amount_type_id"
                                                data-source="employee.get_university_service.amount">
                                            <x-text-input id="University_service_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="University_service_allowance_amount"
                                                value="{{ old('University_service_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('University_service_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Scientific_title_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Scientific_title_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Scientific_title_allowance_amount"
                                                class="m-2" data-changesource="employee.scientific_title_stage_id"
                                                data-change="scientific_title_stage_id"
                                                data-input="Scientific_title_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_scientific_title_stage.amount_type_id"
                                                data-source="employee.get_scientific_title_stage.amount">
                                            <x-text-input id="Scientific_title_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Scientific_title_allowance_amount"
                                                value="{{ old('Scientific_title_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Scientific_title_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Marital_Status_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Marital_Status_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Marital_Status_allowance_amount"
                                                class="m-2" data-changesource="employee.marital_status_id"
                                                data-change="marital_status_id"
                                                data-input="Marital_Status_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_marital_status.amount_type_id"
                                                data-source="employee.get_marital_status.amount">
                                            <x-text-input id="Marital_Status_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Marital_Status_allowance_amount"
                                                value="{{ old('Marital_Status_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Marital_Status_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="number_of_children_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.number_of_children_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_number_of_children_allowance_amount"
                                                class="m-2" data-changesource="employee.children_count_id"
                                                data-change="children_count_id"
                                                data-input="number_of_children_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_children_count.amount_type_id"
                                                data-source="employee.get_children_count.amount">
                                            <x-text-input id="number_of_children_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="number_of_children_allowance_amount"
                                                value="{{ old('number_of_children_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('number_of_children_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Night_watchman_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Night_watchman_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Night_watchman_allowance_amount"
                                                class="m-2" data-changesource="employee.night_watchman_id"
                                                data-change="night_watchman_id"
                                                data-input="Night_watchman_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_night_watchman.amount_type_id"
                                                data-source="employee.get_night_watchman.amount">
                                            <x-text-input id="Night_watchman_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Night_watchman_allowance_amount"
                                                value="{{ old('Night_watchman_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Night_watchman_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Security_guard_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Security_guard_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Security_guard_allowance_amount"
                                                class="m-2" data-changesource="employee.security_guard_id"
                                                data-change="security_guard_id"
                                                data-input="Security_guard_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_security_guard.amount_type_id"
                                                data-source="employee.get_security_guard.amount">
                                            <x-text-input id="Security_guard_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="Security_guard_allowance_amount"
                                                value="{{ old('Security_guard_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Security_guard_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="currency_difference_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.currency_difference_allowance_amount')" />
                                        <x-text-input id="currency_difference_allowance_amount"
                                            class="w-48 block mt-1 allowances" type="number"
                                            name="currency_difference_allowance_amount"
                                            value="{{ old('currency_difference_allowance_amount') }}" />
                                        <x-input-error :messages="$errors->get('currency_difference_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Debit_increases_1_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Debit_increases_1_allowance_amount')" />
                                        <x-text-input id="Debit_increases_1_allowance_amount"
                                            class="w-48 block mt-1 allowances" type="number"
                                            name="Debit_increases_1_allowance_amount"
                                            value="{{ old('Debit_increases_1_allowance_amount') }}" />
                                        <x-input-error :messages="$errors->get('Debit_increases_1_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Debit_increases_2_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Debit_increases_2_allowance_amount')" />
                                        <x-text-input id="Debit_increases_2_allowance_amount"
                                            class="w-48 block mt-1 allowances" type="number"
                                            name="Debit_increases_2_allowance_amount"
                                            value="{{ old('Debit_increases_2_allowance_amount') }}" />
                                        <x-input-error :messages="$errors->get('Debit_increases_2_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Previous_salary_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Previous_salary_allowance_amount')" />
                                        <x-text-input id="Previous_salary_allowance_amount"
                                            class="w-48 block mt-1 allowances" type="number"
                                            name="Previous_salary_allowance_amount"
                                            value="{{ old('Previous_salary_allowance_amount') }}" />
                                        <x-input-error :messages="$errors->get('Previous_salary_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Tuition_expenses_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.Tuition_expenses_allowance_amount')" />
                                        <x-text-input id="Tuition_expenses_allowance_amount"
                                            class="w-48 block mt-1 allowances" type="number"
                                            name="Tuition_expenses_allowance_amount"
                                            value="{{ old('Tuition_expenses_allowance_amount') }}" />
                                        <x-input-error :messages="$errors->get('Tuition_expenses_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Trustees_amount" class="w-48 mb-1" :value="__('word.Trustees_amount')" />
                                        <x-text-input id="Trustees_amount" class="w-48 block mt-1 allowances"
                                            type="number" name="Trustees_amount"
                                            value="{{ old('Trustees_amount') }}" />
                                        <x-input-error :messages="$errors->get('Trustees_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="driver_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.driver_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_driver_allowance_amount" class="m-2"
                                                data-changesource="employee.driver_allowance_id"
                                                data-change="driver_allowance_id" data-input="driver_allowance_amount"
                                                data-type="dynamic"
                                                data-sourcetype="employee.get_driver_allowance.amount_type_id"
                                                data-source="employee.get_driver_allowance.amount">
                                            <x-text-input id="driver_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="driver_allowance_amount"
                                                value="{{ old('driver_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('driver_allowance_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="agricultural_risk_allowance_amount" class="w-48 mb-1"
                                            :value="__('word.agricultural_risk_allowance_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_agricultural_risk_allowance_amount"
                                                class="m-2" data-changesource="employee.agricultural_risk_id"
                                                data-change="agricultural_risk_id"
                                                data-input="agricultural_risk_allowance_amount" data-type="dynamic"
                                                data-sourcetype="employee.get_agricultural_risk.amount_type_id"
                                                data-source="employee.get_agricultural_risk.amount">
                                            <x-text-input id="agricultural_risk_allowance_amount"
                                                class="w-48 block mt-1 allowances" type="number"
                                                name="agricultural_risk_allowance_amount"
                                                value="{{ old('agricultural_risk_allowance_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('agricultural_risk_allowance_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="total_salary_amount" class="w-48 mb-1"
                                            :value="__('word.total_salary_amount')" />
                                        <x-text-input id="total_salary_amount" class="w-48 block mt-1" type="number"
                                            name="total_salary_amount" value="{{ old('total_salary_amount') }}" />
                                        <x-input-error :messages="$errors->get('total_salary_amount')" class="w-48 mt-2" />
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
                                        <x-text-input id="retirement_contributions_amount"
                                            class="w-48 block mt-1 deduction deduction" type="number"
                                            name="retirement_contributions_amount"
                                            value="{{ old('retirement_contributions_amount') }}" />
                                        <x-input-error :messages="$errors->get('retirement_contributions_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="retirement_amount" class="w-48 mb-1" :value="__('word.retirement_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_retirement_amount" class="m-2"
                                                data-changesource="employee.contract_type_id"
                                                data-change="contract_type_id" data-input="retirement_amount"
                                                data-type="dynamic"
                                                data-sourcetype="employee.get_contract_type.amount_type_id_retirement"
                                                data-source="employee.get_contract_type.amount_retirement">
                                            <x-text-input id="retirement_amount" class="w-48 block mt-1 deduction"
                                                type="number" name="retirement_amount"
                                                value="{{ old('retirement_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('retirement_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="tax_deduction_amount" class="w-48 mb-1"
                                            :value="__('word.tax_deduction_amount')" />
                                        <x-text-input id="tax_deduction_amount" class="w-48 block mt-1 deduction"
                                            type="number" name="tax_deduction_amount"
                                            value="{{ old('tax_deduction_amount') }}" />
                                        <x-input-error :messages="$errors->get('tax_deduction_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Social_Welfare_Fund_amount" class="w-48 mb-1"
                                            :value="__('word.Social_Welfare_Fund_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_Social_Welfare_Fund_amount" class="m-2"
                                                data-changesource="employee.contract_type_id"
                                                data-change="contract_type_id" data-input="Social_Welfare_Fund_amount"
                                                data-type="dynamic"
                                                data-sourcetype="employee.get_contract_type.amount_type_id_Social_Welfare_Fund"
                                                data-source="employee.get_contract_type.amount_Social_Welfare_Fund">
                                            <x-text-input id="Social_Welfare_Fund_amount"
                                                class="w-48 block mt-1 deduction" type="number"
                                                name="Social_Welfare_Fund_amount"
                                                value="{{ old('Social_Welfare_Fund_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('Social_Welfare_Fund_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="Medical_Insurance_amount" class="w-48 mb-1"
                                            :value="__('word.Medical_Insurance_amount')" />
                                        <x-text-input id="Medical_Insurance_amount" class="w-48 block mt-1 deduction"
                                            type="number" name="Medical_Insurance_amount"
                                            value="{{ old('Medical_Insurance_amount') }}" />
                                        <x-input-error :messages="$errors->get('Medical_Insurance_amount')" class="w-48 mt-2" />
                                    </div>




                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="life_insurance_amount" class="w-48 mb-1"
                                            :value="__('word.life_insurance_amount')" />
                                        <x-text-input id="life_insurance_amount" class="w-48 block mt-1 deduction"
                                            type="number" name="life_insurance_amount"
                                            value="{{ old('life_insurance_amount') }}" />
                                        <x-input-error :messages="$errors->get('life_insurance_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="stamp_fee_amount" class="w-48 mb-1" :value="__('word.stamp_fee_amount')" />
                                        <x-text-input id="stamp_fee_amount" class="w-48 block mt-1 deduction"
                                            type="number" name="stamp_fee_amount"
                                            value="{{ old('stamp_fee_amount') }}" />
                                        <x-input-error :messages="$errors->get('stamp_fee_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="support_fund_amount" class="w-48 mb-1"
                                            :value="__('word.support_fund_amount')" />
                                        <div class="inline-flex items-center">
                                            <input type="checkbox" id="ch_support_fund_amount" class="m-2"
                                                data-changesource="employee.contract_type_id"
                                                data-change="contract_type_id" data-input="support_fund_amount"
                                                data-type="dynamic"
                                                data-sourcetype="employee.get_contract_type.amount_type_id_support_fund"
                                                data-source="employee.get_contract_type.amount_support_fund">
                                            <x-text-input id="support_fund_amount" class="w-48 block mt-1 deduction"
                                                type="number" name="support_fund_amount"
                                                value="{{ old('support_fund_amount') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('support_fund_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="central_Statistical_Organization_amount" class="w-48 mb-1"
                                            :value="__('word.central_Statistical_Organization_amount')" />
                                        <x-text-input id="central_Statistical_Organization_amount"
                                            class="w-48 block mt-1 deduction" type="number"
                                            name="central_Statistical_Organization_amount"
                                            value="{{ old('central_Statistical_Organization_amount') }}" />
                                        <x-input-error :messages="$errors->get('central_Statistical_Organization_amount')" class="w-48 mt-2" />
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
                                        <x-text-input id="implementation_mail_1_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_1_id"
                                            value="{{ old('implementation_mail_1_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_1_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_1_id')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_1_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_1_amount')" />
                                        <x-text-input id="implementation_mail_1_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_1_amount"
                                            value="{{ old('implementation_mail_1_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_1_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_1_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_2_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_2_id')" />
                                        <x-text-input id="implementation_mail_2_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_2_id"
                                            value="{{ old('implementation_mail_2_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_2_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_2_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_2_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_2_amount')" />
                                        <x-text-input id="implementation_mail_2_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_2_amount"
                                            value="{{ old('implementation_mail_2_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_2_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_2_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_3_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_3_id')" />
                                        <x-text-input id="implementation_mail_3_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_3_id"
                                            value="{{ old('implementation_mail_3_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_3_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_3_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_3_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_3_amount')" />
                                        <x-text-input id="implementation_mail_3_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_3_amount"
                                            value="{{ old('implementation_mail_3_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_3_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_3_amount')" class="w-48 mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_4_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_4_id')" />
                                        <x-text-input id="implementation_mail_4_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_4_id"
                                            value="{{ old('implementation_mail_4_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_4_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_4_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_4_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_4_amount')" />
                                        <x-text-input id="implementation_mail_4_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_4_amount"
                                            value="{{ old('implementation_mail_4_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_4_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_4_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_5_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_5_id')" />
                                        <x-text-input id="implementation_mail_5_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_5_id"
                                            value="{{ old('implementation_mail_5_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_5_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_5_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_5_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_5_amount')" />
                                        <x-text-input id="implementation_mail_5_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_5_amount"
                                            value="{{ old('implementation_mail_5_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_5_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_5_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_6_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_6_id')" />
                                        <x-text-input id="implementation_mail_6_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_6_id"
                                            value="{{ old('implementation_mail_6_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_6_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_6_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_6_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_6_amount')" />
                                        <x-text-input id="implementation_mail_6_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_6_amount"
                                            value="{{ old('implementation_mail_6_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_6_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_6_amount')" class="w-48 mt-2" />
                                    </div>

                                </div>
                                <div class="flex">

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_7_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_7_id')" />
                                        <x-text-input id="implementation_mail_7_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_7_id"
                                            value="{{ old('implementation_mail_7_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_7_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_7_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_7_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_7_amount')" />
                                        <x-text-input id="implementation_mail_7_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_7_amount"
                                            value="{{ old('implementation_mail_7_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_7_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_7_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_8_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_8_id')" />
                                        <x-text-input id="implementation_mail_8_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_8_id"
                                            value="{{ old('implementation_mail_8_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_8_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_8_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_8_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_8_amount')" />
                                        <x-text-input id="implementation_mail_8_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_8_amount"
                                            value="{{ old('implementation_mail_8_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_8_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_8_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_9_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_9_id')" />
                                        <x-text-input id="implementation_mail_9_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_9_id"
                                            value="{{ old('implementation_mail_9_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_9_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_9_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_9_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_9_amount')" />
                                        <x-text-input id="implementation_mail_9_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_9_amount"
                                            value="{{ old('implementation_mail_9_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_9_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_9_amount')" class="w-48 mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_10_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_10_id')" />
                                        <x-text-input id="implementation_mail_10_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_10_id"
                                            value="{{ old('implementation_mail_10_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_10_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_10_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_10_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_10_amount')" />
                                        <x-text-input id="implementation_mail_10_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_10_amount"
                                            value="{{ old('implementation_mail_10_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_10_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_10_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_11_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_11_id')" />
                                        <x-text-input id="implementation_mail_11_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_11_id"
                                            value="{{ old('implementation_mail_11_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_11_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_11_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_11_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_11_amount')" />
                                        <x-text-input id="implementation_mail_11_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_11_amount"
                                            value="{{ old('implementation_mail_11_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_11_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_11_amount')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_12_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_12_id')" />
                                        <x-text-input id="implementation_mail_12_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_12_id"
                                            value="{{ old('implementation_mail_12_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_12_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_12_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_12_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_12_amount')" />
                                        <x-text-input id="implementation_mail_12_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_12_amount"
                                            value="{{ old('implementation_mail_12_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_12_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_12_amount')" class="w-48 mt-2" />
                                    </div>

                                </div>
                                <div class="flex">



                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_13_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_13_id')" />
                                        <x-text-input id="implementation_mail_13_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_13_id"
                                            value="{{ old('implementation_mail_13_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_13_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_13_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_13_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_13_amount')" />
                                        <x-text-input id="implementation_mail_13_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_13_amount"
                                            value="{{ old('implementation_mail_13_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_13_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_13_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_14_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_14_id')" />
                                        <x-text-input id="implementation_mail_14_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_14_id"
                                            value="{{ old('implementation_mail_14_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_14_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_14_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_14_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_14_amount')" />
                                        <x-text-input id="implementation_mail_14_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_14_amount"
                                            value="{{ old('implementation_mail_14_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_14_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_14_amount')" class="w-48 mt-2" />
                                    </div>
                                </div>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_15_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_15_id')" />
                                        <x-text-input id="implementation_mail_15_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_15_id"
                                            value="{{ old('implementation_mail_15_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_15_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_15_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_15_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_15_amount')" />
                                        <x-text-input id="implementation_mail_15_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_15_amount"
                                            value="{{ old('implementation_mail_15_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_15_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_15_amount')" class="w-48 mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_16_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_16_id')" />
                                        <x-text-input id="implementation_mail_16_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_16_id"
                                            value="{{ old('implementation_mail_16_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_16_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_16_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_16_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_16_amount')" />
                                        <x-text-input id="implementation_mail_16_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_16_amount"
                                            value="{{ old('implementation_mail_16_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_16_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_16_amount')" class="w-48 mt-2" />
                                    </div>

                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_17_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_17_id')" />
                                        <x-text-input id="implementation_mail_17_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_17_id"
                                            value="{{ old('implementation_mail_17_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_17_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_17_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_17_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_17_amount')" />
                                        <x-text-input id="implementation_mail_17_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_17_amount"
                                            value="{{ old('implementation_mail_17_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_17_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_17_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_18_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_18_id')" />
                                        <x-text-input id="implementation_mail_18_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_18_id"
                                            value="{{ old('implementation_mail_18_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_18_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_18_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_18_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_18_amount')" />
                                        <x-text-input id="implementation_mail_18_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_18_amount"
                                            value="{{ old('implementation_mail_18_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_18_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_18_amount')" class="w-48 mt-2" />
                                    </div>

                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_19_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_19_id')" />
                                        <x-text-input id="implementation_mail_19_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_19_id"
                                            value="{{ old('implementation_mail_19_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_19_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_19_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_19_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_19_amount')" />
                                        <x-text-input id="implementation_mail_19_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_19_amount"
                                            value="{{ old('implementation_mail_19_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_19_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_19_amount')" class="w-48 mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_20_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_20_id')" />
                                        <x-text-input id="implementation_mail_20_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_20_id"
                                            value="{{ old('implementation_mail_20_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_20_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_20_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_20_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_20_amount')" />
                                        <x-text-input id="implementation_mail_20_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_20_amount"
                                            value="{{ old('implementation_mail_20_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_20_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_20_amount')" class="w-48 mt-2" />
                                    </div>

                                </div>
                                <div class="flex">
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_21_id" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_21_id')" />
                                        <x-text-input id="implementation_mail_21_id" class="w-48 block mt-1"
                                            type="text" name="implementation_mail_21_id"
                                            value="{{ old('implementation_mail_21_id') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_21_id : null }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_21_id')" class="w-48 mt-2" />
                                    </div>
                                    <div class=" mx-4 my-4 w-48">
                                        <x-input-label for="implementation_mail_21_amount" class="w-48 mb-1"
                                            :value="__('word.implementation_mail_21_amount')" />
                                        <x-text-input id="implementation_mail_21_amount"
                                            class="w-48 block mt-1 implementation" type="number"
                                            name="implementation_mail_21_amount"
                                            value="{{ old('implementation_mail_21_amount') ?? isset($employee->get_payroll_last_values) ? $employee->get_payroll_last_values->implementation_mail_21_amount : 0 }}" />
                                        <x-input-error :messages="$errors->get('implementation_mail_21_amount')" class="w-48 mt-2" />
                                    </div>



                                </div>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-primary-button class="ml-4" id="submit">
                                    {{ __('word.save') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function() {
            var employee = {!! json_encode($employee->toArray(), JSON_HEX_TAG) !!};
            var salary_scale = {!! json_encode($salary_scale->toArray(), JSON_HEX_TAG) !!};

            // ******************** value initialization **************************
            // employee_id
            $("#employee_id").val(employee.id);

            // initialize allowances with 0
            $("input[class *= 'allowances']").each(function() {
                $(this).val(0);
            });

            // initialize deduction with 0
            $("input[class *= 'deduction']").each(function() {
                $(this).val(0);
            });

            // initialize implementation with 0
            $("input[class *= 'implementation']").each(function() {
                if ($(this).val() == null) {
                    $(this).val(0);
                }
            });

            // initialize nominal_salary_amount
            $("#nominal_salary_amount").val(salary_scale.salary).prop(
                    'disabled',
                    true)
                .css(
                    "background-color",
                    "#d3d3d3");

            $("#total_salary_amount").prop(
                    'disabled',
                    true)
                .css(
                    "background-color",
                    "#d3d3d3");

            //function to sum all allowances & deduction & implementation inputs 
            function cal() {
                var sum = 0;
                $("input[class *= 'allowances']").each(function() {
                    sum += +$(this).val();
                });
                $("input[class *= 'deduction']").each(function() {
                    sum += -$(this).val();
                });
                $("input[class *= 'implementation']").each(function() {
                    sum += -$(this).val();
                });
                $("#total_salary_amount").val(sum);
            }

            // initialize input fields with dynamic data source 
            $('input[type=checkbox]').each(function() {

                //value
                if ($(this).data('type') == 'dynamic' && eval($(this).data('sourcetype')) == 2) {
                    $('#' + $(this).data('input')).val(eval($(this).data('source')) * salary_scale.salary);
                } else {

                    $('#' + $(this).data('input')).val(eval($(this).data('source')));
                }
                //style
                $('#' + $(this).data('input')).prop(
                        'disabled',
                        true)
                    .css(
                        "background-color",
                        "#d3d3d3");
                cal();


            });

            $("input[class *= 'allowances']").on("change", function() {
                cal();
            });
            $("input[class *= 'deduction']").on("change", function() {
                cal();
            });
            $("input[class *= 'implementation']").on("change", function() {
                cal();
            });


            // on checkbox change 
            $('input[type=checkbox]').on('click', function() {

                if ($(this).is(':checked')) {
                    //value and style
                    $('#' + $(this).data('input')).val(0).prop('disabled', false).css("background-color",
                        "yellow").select();
                    $('#' + $(this).data('change')).val(1)
                } else {
                    //value
                    if ($(this).data('type') == 'dynamic' && eval($(this).data('sourcetype')) == 2) {
                        $('#' + $(this).data('input')).val(eval($(this).data('source')) * salary_scale
                            .salary);
                    } else {

                        $('#' + $(this).data('input')).val(eval($(this).data('source')));
                    }
                    $('#' + $(this).data('change')).val(eval($(this).data('changesource')))
                    //style
                    $('#' + $(this).data('input')).prop(
                            'disabled',
                            true)
                        .css(
                            "background-color",
                            "#d3d3d3");
                }
                cal();
            });

            // on submit
            $('#submit').on('click', function() {
                $("#nominal_salary_amount").val(salary_scale.salary).prop(
                        'disabled',
                        false)
                    .css(
                        "background-color",
                        "#d3d3d3");
                $("#total_salary_amount").prop(
                        'disabled',
                        false)
                    .css(
                        "background-color",
                        "#d3d3d3");

                $('input[type=checkbox]').each(function() {
                    //style
                    $('#' + $(this).data('input')).prop(
                            'disabled',
                            false)
                        .css(
                            "background-color",
                            "#d3d3d3");
                });
                cal();
            });

        });
    </script>

</x-app-layout>
