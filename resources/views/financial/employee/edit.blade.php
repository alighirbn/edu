<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="post" action="{{ route('payroll.employee_update', $employee->url_address) }}">
                            @csrf
                            @method('patch')

                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.financial_employee_edit') }}
                                {{ __($employee->full_name) }}
                            </h2>

                            <input type="hidden" id="id" name="id" value="{{ $employee->id }}">
                            <input type="hidden" id="url_address" name="url_address"
                                value="{{ $employee->url_address }}">

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_number" class="w-full mb-1" :value="__('word.job_number')" />
                                    <x-text-input id="job_number" class="w-full block mt-1" type="text"
                                        name="job_number" value="{{ $employee->job_number }}" />
                                    <x-input-error :messages="$errors->get('job_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="full_name" class="w-full mb-1" :value="__('word.full_name')" />
                                    <x-text-input id="full_name" class="w-full block mt-1 " type="text"
                                        name="full_name" value="{{ $employee->full_name }}" />
                                    <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_full_name" class="w-full mb-1" :value="__('word.mother_full_name')" />
                                    <x-text-input id="mother_full_name" class="w-full block mt-1" type="text"
                                        name="mother_full_name" value="{{ $employee->mother_full_name }}" />
                                    <x-input-error :messages="$errors->get('mother_full_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="contract_type_id" class="w-full mb-1" :value="__('word.contract_type_id')" />
                                    <select id="contract_type_id" class="w-full block mt-1 " name="contract_type_id">
                                        @foreach ($contract_types as $contract_type)
                                            <option value="{{ $contract_type->id }}"
                                                {{ $employee->contract_type_id == $contract_type->id ? 'selected' : '' }}>
                                                {{ $contract_type->contract_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('contract_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_title_id" class="w-full mb-1" :value="__('word.job_title_id')" />
                                    <select id="job_title_id" class="w-full block mt-1 " name="job_title_id">
                                        @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }}"
                                                {{ $employee->job_title_id == $job_title->id ? 'selected' : '' }}>
                                                {{ $job_title->job_title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_title_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="danager_provision_id" class="w-full mb-1" :value="__('word.danager_provision_id')" />
                                    <select id="danager_provision_id" class="w-full block mt-1 "
                                        name="danager_provision_id">
                                        @foreach ($danager_provisions as $danager_provision)
                                            <option value="{{ $danager_provision->id }}"
                                                {{ $employee->danager_provision_id == $danager_provision->id ? 'selected' : '' }}>
                                                {{ $danager_provision->danager_provision }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('danager_provision_id')" class="w-full mt-2" />
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_id" class="w-full mb-1" :value="__('word.job_grade_id')" />
                                    <select id="job_grade_id" class="w-full block mt-1 " name="job_grade_id">
                                        @foreach ($job_grades as $job_grade)
                                            <option value="{{ $job_grade->id }}"
                                                {{ $employee->job_grade_id == $job_grade->id ? 'selected' : '' }}>
                                                {{ $job_grade->job_grade }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_grade_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_id" class="w-full mb-1" :value="__('word.career_stage_id')" />
                                    <select id="career_stage_id" class="w-full block mt-1 " name="career_stage_id">
                                        @foreach ($career_stages as $career_stage)
                                            <option value="{{ $career_stage->id }}"
                                                {{ $employee->career_stage_id == $career_stage->id ? 'selected' : '' }}>
                                                {{ $career_stage->career_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('career_stage_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_status_id" class="w-full mb-1" :value="__('word.employee_status_id')" />
                                    <select id="employee_status_id" class="w-full block mt-1 "
                                        name="employee_status_id">
                                        @foreach ($employee_statuss as $employee_status)
                                            <option value="{{ $employee_status->id }}"
                                                {{ $employee->employee_status_id == $employee_status->id ? 'selected' : '' }}>
                                                {{ $employee_status->employee_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('employee_status_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employment_type_id" class="w-full mb-1" :value="__('word.employment_type_id')" />
                                    <select id="employment_type_id" class="w-full block mt-1 "
                                        name="employment_type_id">
                                        @foreach ($employment_types as $employment_type)
                                            <option value="{{ $employment_type->id }}"
                                                {{ $employee->employment_type_id == $employment_type->id ? 'selected' : '' }}>
                                                {{ $employment_type->employment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('employment_type_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="assignment_type_id" class="w-full mb-1" :value="__('word.assignment_type_id')" />
                                    <select id="assignment_type_id" class="w-full block mt-1 "
                                        name="assignment_type_id">
                                        @foreach ($assignment_types as $assignment_type)
                                            <option value="{{ $assignment_type->id }}"
                                                {{ $employee->assignment_type_id == $assignment_type->id ? 'selected' : '' }}>
                                                {{ $assignment_type->assignment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('assignment_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="academic_achievement_id" class="w-full mb-1"
                                        :value="__('word.academic_achievement_id')" />
                                    <select id="academic_achievement_id" class="w-full block mt-1 "
                                        name="academic_achievement_id">
                                        @foreach ($academic_achievements as $academic_achievement)
                                            <option value="{{ $academic_achievement->id }}"
                                                {{ $employee->academic_achievement_id == $academic_achievement->id ? 'selected' : '' }}>
                                                {{ $academic_achievement->academic_achievement }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('academic_achievement_id')" class="w-full mt-2" />
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="card_id" class="w-full mb-1" :value="__('word.card_id')" />
                                    <x-text-input id="card_id" class="w-full block mt-1" type="text"
                                        name="card_id" value="{{ $employee->card_id }}" />
                                    <x-input-error :messages="$errors->get('card_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="bank_name_id" class="w-full mb-1" :value="__('word.bank_name_id')" />
                                    <x-text-input id="bank_name_id" class="w-full block mt-1" type="text"
                                        name="bank_name_id" value="{{ $employee->bank_name_id }}" />
                                    <x-input-error :messages="$errors->get('bank_name_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="bank_account" class="w-full mb-1" :value="__('word.bank_account_id')" />
                                    <x-text-input id="bank_account" class="w-full block mt-1" type="text"
                                        name="bank_account" value="{{ $employee->bank_account }}" />
                                    <x-input-error :messages="$errors->get('bank_account')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="iban_code" class="w-full mb-1" :value="__('word.iban_code_id')" />
                                    <x-text-input id="iban_code" class="w-full block mt-1" type="text"
                                        name="iban_code" value="{{ $employee->iban_code }}" />
                                    <x-input-error :messages="$errors->get('iban_code')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="university_service_id" class="w-full mb-1"
                                        :value="__('word.university_service_id')" />
                                    <select id="university_service_id" class="w-full block mt-1 "
                                        name="university_service_id">
                                        @foreach ($university_services as $university_service)
                                            <option value="{{ $university_service->id }}"
                                                {{ $employee->university_service_id == $university_service->id ? 'selected' : '' }}>
                                                {{ $university_service->university_service }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('university_service_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="scientific_title_stage_id" class="w-full mb-1"
                                        :value="__('word.scientific_title_stage_id')" />
                                    <select id="scientific_title_stage_id" class="w-full block mt-1 "
                                        name="scientific_title_stage_id">
                                        @foreach ($scientific_title_stages as $scientific_title_stage)
                                            <option value="{{ $scientific_title_stage->id }}"
                                                {{ $employee->scientific_title_stage_id == $scientific_title_stage->id ? 'selected' : '' }}>
                                                {{ $scientific_title_stage->scientific_title_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('scientific_title_stage_id')" class="w-full mt-2" />
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="electric_shock_id" class="w-full mb-1" :value="__('word.electric_shock_id')" />
                                    <select id="electric_shock_id" class="w-full block mt-1 "
                                        name="electric_shock_id">
                                        @foreach ($electric_shocks as $electric_shock)
                                            <option value="{{ $electric_shock->id }}"
                                                {{ $employee->electric_shock_id == $electric_shock->id ? 'selected' : '' }}>
                                                {{ $electric_shock->electric_shock }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('electric_shock_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="security_guard_id" class="w-full mb-1" :value="__('word.security_guard_id')" />
                                    <select id="security_guard_id" class="w-full block mt-1 "
                                        name="security_guard_id">
                                        @foreach ($security_guards as $security_guard)
                                            <option value="{{ $security_guard->id }}"
                                                {{ $employee->security_guard_id == $security_guard->id ? 'selected' : '' }}>
                                                {{ $security_guard->security_guard }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('security_guard_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="night_watchman_id" class="w-full mb-1" :value="__('word.night_watchman_id')" />
                                    <select id="night_watchman_id" class="w-full block mt-1 "
                                        name="night_watchman_id">
                                        @foreach ($night_watchmans as $night_watchman)
                                            <option value="{{ $night_watchman->id }}"
                                                {{ $employee->night_watchman_id == $night_watchman->id ? 'selected' : '' }}>
                                                {{ $night_watchman->night_watchman }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('night_watchman_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="driver_allowance_id" class="w-full mb-1" :value="__('word.driver_allowance_id')" />
                                    <select id="driver_allowance_id" class="w-full block mt-1 "
                                        name="driver_allowance_id">
                                        @foreach ($driver_allowances as $driver_allowance)
                                            <option value="{{ $driver_allowance->id }}"
                                                {{ $employee->driver_allowance_id == $driver_allowance->id ? 'selected' : '' }}>
                                                {{ $driver_allowance->driver_allowance }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('driver_allowance_id')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="agricultural_risk_id" class="w-full mb-1"
                                        :value="__('word.agricultural_risk_id')" />
                                    <select id="agricultural_risk_id" class="w-full block mt-1 "
                                        name="agricultural_risk_id">
                                        @foreach ($agricultural_risks as $agricultural_risk)
                                            <option value="{{ $agricultural_risk->id }}"
                                                {{ $employee->agricultural_risk_id == $agricultural_risk->id ? 'selected' : '' }}>
                                                {{ $agricultural_risk->agricultural_risk }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('agricultural_risk_id')" class="w-full mt-2" />
                                </div>



                            </div>
                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="marital_status_id" class="w-full mb-1" :value="__('word.marital_status_id')" />
                                    <select id="marital_status_id" class="w-full block mt-1 "
                                        name="marital_status_id">
                                        @foreach ($marital_statuss as $marital_status)
                                            <option value="{{ $marital_status->id }}"
                                                {{ $employee->marital_status_id == $marital_status->id ? 'selected' : '' }}>
                                                {{ $marital_status->marital_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('marital_status_id')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="children_count_id" class="w-full mb-1" :value="__('word.children_count_id')" />
                                    <select id="children_count_id" class="w-full block mt-1 "
                                        name="children_count_id">
                                        @foreach ($children_counts as $children_count)
                                            <option value="{{ $children_count->id }}"
                                                {{ $employee->children_count_id == $children_count->id ? 'selected' : '' }}>
                                                {{ $children_count->children_count }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('children_count_id')" class="w-full mt-2" />
                                </div>






                            </div>
                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-primary-button class="ml-4">
                                        {{ __('word.edit') }}
                                    </x-primary-button>
                                </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
