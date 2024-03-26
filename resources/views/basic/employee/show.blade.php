<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>


                        <div id="info1">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.personal_info') }}
                            </h2>
                            <div class="d-flex justify-content-around ">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_number" class="w-full mb-1" :value="__('word.job_number')" />
                                    <p id="job_number" class="w-full h-9 block mt-1" type="text" name="job_number">
                                        {{ $employee->job_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.name')" />
                                    <p id="name" class="w-full h-9 block mt-1 " type="text" name="name">
                                        {{ $employee->name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="father_name" class="w-full mb-1" :value="__('word.father_name')" />
                                    <p id="father_name" class="w-full h-9 block mt-1 " type="text"
                                        name="father_name">
                                        {{ $employee->father_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="grandfather_name" class="w-full mb-1" :value="__('word.grandfather_name')" />
                                    <p id="grandfather_name" class="w-full h-9 block mt-1" type="text"
                                        name="grandfather_name">
                                        {{ $employee->grandfather_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="fourth_grandfather_name" class="w-full mb-1"
                                        :value="__('word.fourth_grandfather_name')" />
                                    <p id="fourth_grandfather_name" class="w-full h-9 block mt-1" type="text"
                                        name="fourth_grandfather_name">
                                        {{ $employee->fourth_grandfather_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="surname" class="w-full mb-1" :value="__('word.surname')" />
                                    <p id="surname" class="w-full h-9 block mt-1" type="text" name="surname">
                                        {{ $employee->surname }}
                                    </p>

                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_name" class="w-full mb-1" :value="__('word.mother_name')" />
                                    <p id="mother_name" class="w-full h-9 block mt-1" type="text" name="mother_name">
                                        {{ $employee->mother_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_father_name" class="w-full mb-1" :value="__('word.mother_father_name')" />
                                    <p id="mother_father_name" class="w-full h-9 block mt-1 " type="text"
                                        name="mother_father_name">
                                        {{ $employee->mother_father_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_grandfather_name" class="w-full mb-1"
                                        :value="__('word.mother_grandfather_name')" />
                                    <p id="mother_grandfather_name" class="w-full h-9 block mt-1 " type="text"
                                        name="mother_grandfather_name">
                                        {{ $employee->mother_grandfather_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_surname" class="w-full mb-1" :value="__('word.mother_surname')" />
                                    <p id="mother_surname" class="w-full h-9 block mt-1" type="text"
                                        name="mother_surname">
                                        {{ $employee->mother_surname }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="date_of_birth" class="w-full mb-1" :value="__('word.date_of_birth')" />

                                    <p id="date_of_birth" class="w-full h-9 block mt-1 "
                                        type="text"name="date_of_birth">
                                        {{ $employee->date_of_birth }}
                                    </p>


                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="place_of_birth" class="w-full mb-1" :value="__('word.place_of_birth')" />
                                    <p id="place_of_birth" class="w-full h-9 block mt-1 " type="text"
                                        name="place_of_birth">
                                        {{ $employee->place_of_birth }}
                                    </p>

                                </div>

                            </div>

                            <div class="flex">


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="marital_status_id" class="w-full mb-1" :value="__('word.marital_status_id')" />
                                    <p id="marital_status_id" class="w-full h-9 block mt-1 " type="text"
                                        name="marital_status_id">
                                        {{ $employee->get_marital_status->marital_status }}

                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="first_husband_name" class="w-full mb-1" :value="__('word.first_husband_name')" />
                                    <p id="first_husband_name" class="w-full h-9 block mt-1 " type="text"
                                        name="first_husband_name">
                                        {{ $employee->first_husband_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_father_name" class="w-full mb-1" :value="__('word.husband_father_name')" />
                                    <p id="husband_father_name" class="w-full h-9 block mt-1 " type="text"
                                        name="husband_father_name">
                                        {{ $employee->husband_father_name }}
                                    </p>

                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_grandfather_name" class="w-full mb-1"
                                        :value="__('word.husband_grandfather_name')" />
                                    <p id="husband_grandfather_name" class="w-full h-9 block mt-1" type="text"
                                        name="husband_grandfather_name">
                                        {{ $employee->husband_grandfather_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_surname" class="w-full mb-1" :value="__('word.husband_surname')" />
                                    <p id="husband_surname" class="w-full h-9 block mt-1 " type="text"
                                        name="husband_surname">
                                        {{ $employee->husband_surname }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="number_of_children" class="w-full mb-1" :value="__('word.number_of_children')" />
                                    <p id="number_of_children" class="w-full h-9 block mt-1 " type="text"
                                        name="number_of_children">
                                        {{ $employee->number_of_children }}
                                    </p>

                                </div>

                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_id" class="w-full mb-1" :value="__('word.nationality_id')" />
                                    <p id="nationality_id" class="w-full h-9 block mt-1 " type="text"
                                        name="nationality_id" type="text">
                                        {{ $employee->get_Nationality->nationality }}
                                    </p>

                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_language_id" class="w-full mb-1" :value="__('word.mother_language_id')" />
                                    <p id="mother_language_id" class="w-full h-9 block mt-1 " type="text"
                                        name="mother_language_id">
                                        {{ $employee->get_Mother_Language->mother_language }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="gender_id" class="w-full mb-1" :value="__('word.gender_id')" />
                                    <p id="gender_id" class="w-full h-9 block mt-1 " type="text"
                                        name="gender_id">
                                        {{ $employee->get_Gender->gender }}
                                    </p>

                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_phone_number" class="w-full mb-1"
                                        :value="__('word.employee_phone_number')" />
                                    <p id="employee_phone_number" class="w-full h-9 block mt-1" type="text"
                                        name="employee_phone_number">
                                        {{ $employee->employee_phone_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_email" class="w-full mb-1" :value="__('word.employee_email')" />
                                    <p id="employee_email" class="w-full h-9 block mt-1 " type="email"
                                        name="employee_email">
                                        {{ $employee->employee_email }}
                                    </p>

                                </div>

                            </div>
                        </div>

                        <div id="info2">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.functional_data') }}
                            </h2>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="contract_type_id" class="w-full mb-1" :value="__('word.contract_type_id')" />
                                    <p id="contract_type_id" class="w-full h-9 block mt-1 " type="text"
                                        name="contract_type_id">
                                        {{ $employee->get_Contract_Type->contract_type }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_status_id" class="w-full mb-1" :value="__('word.employee_status_id')" />
                                    <p id="employee_status_id" class="w-full h-9 block mt-1 " type="text"
                                        name="employee_status_id">
                                        {{ $employee->get_Employee_Status->employee_status }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employment_type_id" class="w-full mb-1" :value="__('word.employment_type_id')" />
                                    <p id="employment_type_id" class="w-full h-9 block mt-1 " type="text"
                                        name="employment_type_id">
                                        {{ $employee->get_Employment_Type->employment_type }}
                                    </p>

                                </div>


                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="assignment_type_id" class="w-full mb-1" :value="__('word.assignment_type_id')" />
                                    <p id="assignment_type_id" class="w-full h-9 block mt-1 "type="text"
                                        name="assignment_type_id">
                                        {{ $employee->get_Assignment_Type->assignment_type }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="teaching_specialization_id" class="w-full mb-1"
                                        :value="__('word.teaching_specialization_id')" />
                                    <p id="teaching_specialization_id" class="w-full h-9 block mt-1 " type="text"
                                        name="teaching_specialization_id">
                                        {{ $employee->get_Teaching_Specialization->teaching_specialization }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_date" class="w-full mb-1" :value="__('word.appointment_date')" />

                                    <p id="appointment_date" class="w-full block mt-1 h-9 " type="text"
                                        name="appointment_date">
                                        {{ $employee->appointment_date }}

                                    </p>



                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_number" class="w-full mb-1"
                                        :value="__('word.appointment_ministerial_order_number')" />
                                    <p id="appointment_ministerial_order_number" class="w-full h-9 block mt-1 "
                                        type="text" name="appointment_ministerial_order_number">
                                        {{ $employee->appointment_ministerial_order_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_date" class="w-full mb-1"
                                        :value="__('word.appointment_ministerial_order_date')" />

                                    <p id="appointment_ministerial_order_date" class="w-full block mt-1 h-9 "
                                        placeholder="يوم" type="number" name="appointment_ministerial_order_date">
                                        {{ $employee->appointment_ministerial_order_date }}
                                    </p>


                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_number" class="w-full mb-1"
                                        :value="__('word.appointment_administrative_order_number')" />
                                    <p id="appointment_administrative_order_number" class="w-full h-9 block mt-1 "
                                        type="text" name="appointment_administrative_order_number">
                                        {{ $employee->appointment_administrative_order_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_date" class="w-full mb-1"
                                        :value="__('word.appointment_administrative_order_date')" />

                                    <p id="appointment_administrative_order_date" class="w-full block mt-1 h-9 "
                                        type="number" name="appointment_administrative_order_date">
                                        {{ $employee->appointment_administrative_order_date }}
                                    </p>


                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_number" class="w-full mb-1"
                                        :value="__('word.appointment_first_initiation_number')" />
                                    <p id="appointment_first_initiation_number" class="w-full h-9 block mt-1 "
                                        type="text" name="appointment_first_initiation_number">
                                        {{ $employee->appointment_first_initiation_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_date" class="w-full mb-1"
                                        :value="__('word.appointment_first_initiation_date')" />

                                    <p id="appointment_first_initiation_date" class="w-full block mt-1 h-9 "
                                        type="text" name="appointment_first_initiation_date">
                                        {{ $employee->appointment_first_initiation_date }}
                                    </p>


                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nominal_salary" class="w-full mb-1" :value="__('word.nominal_salary')" />
                                    <p id="nominal_salary" class="w-full h-9 block mt-1 " type="text"
                                        name="nominal_salary">
                                        {{ $employee->nominal_salary }}
                                    </p>

                                </div>

                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_title_id" class="w-full mb-1" :value="__('word.job_title_id')" />
                                    <p id="job_title_id" class="w-full h-9 block mt-1 " type="text"
                                        name="job_title_id">
                                        {{ $employee->get_Job_Title->job_title }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_id" class="w-full mb-1" :value="__('word.job_grade_id')" />
                                    <p id="job_grade_id" class="w-full h-9 block mt-1 " type="text"
                                        name="job_grade_id">
                                        {{ $employee->get_Job_Grade->job_grade }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_date" class="w-full mb-1" :value="__('word.job_grade_date')" />

                                    <p id="job_grade_date" class="w-full block mt-1 h-9 " type="text"
                                        name="job_grade_date">
                                        {{ $employee->job_grade_date }}
                                    </p>


                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_id" class="w-full mb-1" :value="__('word.career_stage_id')" />
                                    <p id="career_stage_id" class="w-full h-9 block mt-1 " type="text"
                                        name="career_stage_id">
                                        {{ $employee->get_Career_Stage->career_stage }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_date" class="w-full mb-1" :value="__('word.career_stage_date')" />

                                    <p id="career_stage_date" class="w-full block mt-1 h-9 " type="text"
                                        type="number" name="career_stage_date">
                                        {{ $employee->career_stage_date }}
                                    </p>


                                </div>

                            </div>

                        </div>

                        <div id="info3">
                            @if ($employee->is_national_card == 2)
                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.National_card_data') }}
                                </h2>


                                <div id="nc">




                                    <div class="flex">
                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="national_card_number" class="w-full mb-1"
                                                :value="__('word.national_card_number')" />
                                            <p id="national_card_number" class="w-full h-9 block mt-1" type="text"
                                                name="national_card_number">
                                                {{ $employee->national_card_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="national_card_date_of_issue" class="w-full mb-1"
                                                :value="__('word.national_card_date_of_issue')" />

                                            <p id="national_card_date_of_issue" class="w-full block mt-1 h-9 "
                                                type="text" name="national_card_date_of_issue">
                                                {{ $employee->national_card_date_of_issue }}
                                            </p>


                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="national_card_issuing_authority" class="w-full mb-1"
                                                :value="__('word.national_card_issuing_authority')" />
                                            <p id="national_card_issuing_authority" class="w-full h-9 block mt-1 "
                                                type="text" name="national_card_issuing_authority">
                                                {{ $employee->national_card_issuing_authority }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="national_card_family_number" class="w-full mb-1"
                                                :value="__('word.national_card_family_number')" />
                                            <p id="national_card_family_number" class="w-full h-9 block mt-1 "
                                                type="text" name="national_card_family_number">
                                                {{ $employee->national_card_family_number }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            @else
                                <div id="ci">

                                    <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                        {{ __('word.Civil_status_identity_data') }}
                                    </h2>


                                    <div class="flex">
                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="civil_status_identity_number" class="w-full mb-1"
                                                :value="__('word.civil_status_identity_number')" />
                                            <p id="civil_status_identity_number" class="w-full h-9 block mt-1"
                                                type="text" name="civil_status_identity_number">
                                                {{ $employee->civil_status_identity_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="civil_status_registry_number" class="w-full mb-1"
                                                :value="__('word.civil_status_registry_number')" />
                                            <p id="civil_status_registry_number" class="w-full h-9 block mt-1 "
                                                type="text" name="civil_status_registry_number">
                                                {{ $employee->civil_status_registry_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="civil_status_newspaper_number" class="w-full mb-1"
                                                :value="__('word.civil_status_newspaper_number')" />
                                            <p id="civil_status_newspaper_number" class="w-full h-9 block mt-1 "
                                                type="text" name="civil_status_newspaper_number">
                                                {{ $employee->civil_status_newspaper_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="civil_status_issue_date" class="w-full mb-1"
                                                :value="__('word.civil_status_issue_date')" />

                                            <p id="civil_status_issue_date" class="w-full block mt-1 h-9 "
                                                type="text" name="civil_status_issue_date">
                                                {{ $employee->civil_status_issue_date }}
                                            </p>


                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="civil_status_issuer" class="w-full mb-1"
                                                :value="__('word.civil_status_issuer')" />
                                            <p id="civil_status_issuer" class="w-full h-9 block mt-1 " type="text"
                                                name="civil_status_issuer">
                                                {{ $employee->civil_status_issuer }}
                                            </p>

                                        </div>
                                    </div>

                                    <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                        {{ __('word.Nationality_certificate_data') }}
                                    </h2>

                                    <div class="flex">
                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="nationality_certificate_number" class="w-full mb-1"
                                                :value="__('word.nationality_certificate_number')" />
                                            <p id="nationality_certificate_number" class="w-full h-9 block mt-1 "
                                                type="text" name="nationality_certificate_number">
                                                {{ $employee->nationality_certificate_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="nationality_certificate_authority_issuing_wallet"
                                                class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing_wallet')" />
                                            <p id="nationality_certificate_authority_issuing_wallet"
                                                class="w-full h-9 block mt-1 " type="text"
                                                name="nationality_certificate_authority_issuing_wallet">
                                                {{ $employee->nationality_certificate_authority_issuing_wallet }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="nationality_certificate_authority_issuing_date"
                                                class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing_date')" />

                                            <p id="nationality_certificate_authority_issuing_date"
                                                class="w-full block mt-1 h-9 " type="text"
                                                name="nationality_certificate_authority_issuing_date">
                                                {{ $employee->nationality_certificate_authority_issuing_date }}
                                            </p>


                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="nationality_certificate_authority_issuing"
                                                class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing')" />
                                            <p id="nationality_certificate_authority_issuing"
                                                class="w-full h-9 block mt-1 " type="text"
                                                name="nationality_certificate_authority_issuing">
                                                {{ $employee->nationality_certificate_authority_issuing }}
                                            </p>

                                        </div>


                                    </div>

                                </div>
                            @endif
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Residence_card_information') }}
                            </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_number" class="w-full mb-1" :value="__('word.housing_card_number')" />
                                    <p id="housing_card_number" class="w-full h-9 block mt-1" type="text"
                                        name="housing_card_number">
                                        {{ $employee->housing_card_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_date_of_issue" class="w-full mb-1"
                                        :value="__('word.housing_card_date_of_issue')" />

                                    <p id="housing_card_date_of_issue" class="w-full block mt-1 h-9 " type="text"
                                        name="housing_card_date_of_issue">
                                        {{ $employee->housing_card_date_of_issue }}
                                    </p>


                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_issuing_authority" class="w-full mb-1"
                                        :value="__('word.housing_card_issuing_authority')" />
                                    <p id="housing_card_issuing_authority" class="w-full h-9 block mt-1 "
                                        type="text" name="housing_card_issuing_authority">
                                        {{ $employee->housing_card_issuing_authority }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_residence_address" class="w-full mb-1"
                                        :value="__('word.housing_card_residence_address')" />
                                    <p id="housing_card_residence_address" class="w-full h-9 block mt-1 "
                                        type="text" name="housing_card_residence_address">
                                        {{ $employee->housing_card_residence_address }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_governorate" class="w-full mb-1"
                                        :value="__('word.housing_card_governorate')" />
                                    <p id="housing_card_governorate" class="w-full h-9 block mt-1 " type="text"
                                        name="housing_card_governorate">
                                        {{ $employee->housing_card_governorate }}
                                    </p>

                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_district" class="w-full mb-1"
                                        :value="__('word.housing_card_district')" />
                                    <p id="housing_card_district" class="w-full h-9 block mt-1" type="text"
                                        name="housing_card_district">
                                        {{ $employee->housing_card_district }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_neighborhood" class="w-full mb-1"
                                        :value="__('word.housing_card_neighborhood')" />
                                    <p id="housing_card_neighborhood" class="w-full h-9 block mt-1 " type="text"
                                        name="housing_card_neighborhood">
                                        {{ $employee->housing_card_neighborhood }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_house_number" class="w-full mb-1"
                                        :value="__('word.housing_card_house_number')" />
                                    <p id="housing_card_house_number" class="w-full h-9 block mt-1 " type="text"
                                        name="housing_card_house_number">
                                        {{ $employee->housing_card_house_number }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_nearest_point_of_reference" class="w-full mb-1"
                                        :value="__('word.housing_card_nearest_point_of_reference')" />
                                    <p id="housing_card_nearest_point_of_reference" class="w-full h-9 block mt-1 "
                                        type="text" name="housing_card_nearest_point_of_reference">
                                        {{ $employee->housing_card_nearest_point_of_reference }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_mukhtar_name" class="w-full mb-1"
                                        :value="__('word.housing_card_mukhtar_name')" />
                                    <p id="housing_card_mukhtar_name" class="w-full h-9 block mt-1 " type="text"
                                        name="housing_card_mukhtar_name">
                                        {{ $employee->housing_card_mukhtar_name }}
                                    </p>

                                </div>
                            </div>

                        </div>
                        <div id="info4">

                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Academic_achievement_data1') }}
                            </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="first_academic_achievement_id" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_academic_achievement')" />
                                    <p id="first_academic_achievement_id" class="w-full h-9 block mt-1"
                                        type="text" name="first_academic_achievement_id">
                                        {{ $employee->get_first_academic_achievement->academic_achievement }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment')" />
                                    <p id="certificate_of_appointment" class="w-full h-9 block mt-1 " type="text"
                                        name="certificate_of_appointment">
                                        {{ $employee->certificate_of_appointment }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_graduation_year"
                                        class="w-full mb-1" :value="__('word.certificate_of_appointment_graduation_year')" />
                                    <p id="certificate_of_appointment_graduation_year" class="w-full h-9 block mt-1 "
                                        type="text" name="certificate_of_appointment_graduation_year">
                                        {{ $employee->certificate_of_appointment_graduation_year }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_university_institute_school_name"
                                        class="w-full mb-1" :value="__(
                                            'word.certificate_of_appointment_university_institute_school_name',
                                        )" />
                                    <p id="certificate_of_appointment_university_institute_school_name"
                                        class="w-full h-9 block mt-1 " type="text"
                                        name="certificate_of_appointment_university_institute_school_name">
                                        {{ $employee->certificate_of_appointment_university_institute_school_name }}
                                    </p>

                                </div>

                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_college_name" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_college_name')" />
                                    <p id="certificate_of_appointment_college_name" class="w-full h-9 block mt-1 "
                                        type="text" name="certificate_of_appointment_college_name">
                                        {{ $employee->certificate_of_appointment_college_name }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_major" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_major')" />
                                    <p id="certificate_of_appointment_major" class="w-full h-9 block mt-1"
                                        type="text" name="certificate_of_appointment_major">
                                        {{ $employee->certificate_of_appointment_major }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_mark')" />
                                    <p id="certificate_of_appointment_mark" class="w-full h-9 block mt-1 "
                                        type="number" name="certificate_of_appointment_mark">
                                        {{ $employee->certificate_of_appointment_mark }}
                                    </p>

                                </div>
                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Academic_achievement_data2') }}
                            </h2>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="academic_achievement_id" class="w-full mb-1"
                                        :value="__('word.last_academic_achievement')" />
                                    <p id="academic_achievement_id" class="w-full h-9 block mt-1" type="text"
                                        name="academic_achievement_id">
                                        {{ $employee->get_academic_achievement->academic_achievement }}
                                    </p>

                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_obtained" class="w-full mb-1"
                                        :value="__('word.last_certificate_obtained')" />
                                    <p id="last_certificate_obtained" class="w-full h-9 block mt-1 " type="text"
                                        name="last_certificate_obtained">
                                        {{ $employee->last_certificate_obtained }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_year_of_graduation" class="w-full mb-1"
                                        :value="__('word.last_year_of_graduation')" />
                                    <p id="last_year_of_graduation" class="w-full h-9 block mt-1 " type="text"
                                        name="last_year_of_graduation">
                                        {{ $employee->last_year_of_graduation }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_university" class="w-full mb-1"
                                        :value="__('word.last_name_of_the_university')" />
                                    <p id="last_name_of_the_university" class="w-full h-9 block mt-1 " type="text"
                                        name="last_name_of_the_university">
                                        {{ $employee->last_name_of_the_university }}
                                    </p>

                                </div>
                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_college" class="w-full mb-1"
                                        :value="__('word.last_name_of_the_college')" />
                                    <p id="last_name_of_the_college" class="w-full h-9 block mt-1 " type="text"
                                        name="last_name_of_the_college">
                                        {{ $employee->last_name_of_the_college }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_major" class="w-full mb-1" :value="__('word.last_major')" />
                                    <p id="last_major" class="w-full h-9 block mt-1 " type="text"
                                        name="last_major">
                                        {{ $employee->last_major }}
                                    </p>

                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('word.last_certificate_of_appointment_mark')" />
                                    <p id="last_certificate_of_appointment_mark" class="w-full h-9 block mt-1 "
                                        type="number" name="last_certificate_of_appointment_mark">
                                        {{ $employee->last_certificate_of_appointment_mark }}
                                    </p>

                                </div>

                            </div>


                            @if ($employee->is_scientific_title == 2)
                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.Academic_achievement_data3') }}
                                </h2>


                                <div id="st" class="flex">



                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="scientific_title_stage_id" class="w-full mb-1"
                                            :value="__('word.scientific_title_stage_id')" />
                                        <p id="scientific_title_stage_id" class="w-full h-9 block mt-1 "
                                            type="text" name="scientific_title_stage_id">
                                            {{ $employee->get_Scientific_Title_Stage->scientific_title_stage }}
                                        </p>

                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="scientific_title_date" class="w-full mb-1"
                                            :value="__('word.scientific_title_date')" />

                                        <p id="scientific_title_date" class="w-full block mt-1 h-9 " type="text"
                                            name="scientific_title_date">
                                            {{ $employee->scientific_title_date }}
                                        </p>


                                    </div>
                                </div>
                            @else
                            @endif
                        </div>
                        <div class="info5">
                            @if ($employee->is_political_dismissal == 2)
                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.Political_career_segregation_data') }}
                                </h2>

                                <div id="pd">


                                    <div class="flex">



                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_type_id" class="w-full mb-1"
                                                :value="__('word.political_dismissal_type_id')" />
                                            <p id="political_dismissal_type_id" class="w-full h-9 block mt-1 "
                                                type="text" name="political_dismissal_type_id">
                                                {{ $employee->get_Political_Dismissal_Type->political_dismissal_type }}
                                            </p>

                                        </div>


                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_duration_from" class="w-full mb-1"
                                                :value="__('word.political_dismissal_duration_from')" />

                                            <p id="political_dismissal_duration_from" class="w-full block mt-1 h-9 "
                                                type="text" name="political_dismissal_duration_from">
                                                {{ $employee->political_dismissal_duration_from }}
                                            </p>


                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_duration_to" class="w-full mb-1"
                                                :value="__('word.political_dismissal_duration_to')" />

                                            <p id="political_dismissal_duration_to" class="w-full block mt-1 h-9 "
                                                type="text" name="political_dismissal_duration_to_d">
                                                {{ $employee->political_dismissal_duration_to_d }}
                                            </p>


                                        </div>
                                    </div>


                                    <div class="flex">

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_years" class="w-full mb-1"
                                                :value="__('word.political_dismissal_years')" />
                                            <p id="political_dismissal_years" class="w-full h-9 block mt-1 "
                                                type="text" name="political_dismissal_years">
                                                {{ $employee->political_dismissal_years }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_months" class="w-full mb-1"
                                                :value="__('word.political_dismissal_months')" />
                                            <p id="political_dismissal_months" class="w-full h-9 block mt-1 "
                                                type="text" name="political_dismissal_months">
                                                {{ $employee->political_dismissal_months }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_days" class="w-full mb-1"
                                                :value="__('word.political_dismissal_days')" />
                                            <p id="political_dismissal_days" class="w-full h-9 block mt-1 "
                                                type="text" name="political_dismissal_days">
                                                {{ $employee->political_dismissal_days }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_order_number" class="w-full mb-1"
                                                :value="__('word.political_dismissal_order_number')" />
                                            <p id="political_dismissal_order_number" class="w-full h-9 block mt-1"
                                                type="text" name="political_dismissal_order_number" />
                                            {{ $employee->political_dismissal_order_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_order_date" class="w-full mb-1"
                                                :value="__('word.political_dismissal_order_date')" />

                                            <p id="political_dismissal_order_date" class="w-full block mt-1 h-9 "
                                                type="text" name="political_dismissal_order_date" />
                                            {{ $employee->political_dismissal_order_date }}
                                            </p>


                                        </div>

                                    </div>


                                    <div class="flex">


                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_reappointment_number"
                                                class="w-full mb-1" :value="__('word.political_dismissal_reappointment_number')" />
                                            <p id="political_dismissal_reappointment_number"
                                                class="w-full h-9 block mt-1 " type="text"
                                                name="political_dismissal_reappointment_number">
                                                {{ $employee->political_dismissal_reappointment_number }}
                                            </p>

                                        </div>


                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_date_reappointment"
                                                class="w-full mb-1" :value="__('word.political_dismissal_date_reappointment')" />

                                            <p id="political_dismissal_date_reappointment"
                                                class="w-full block mt-1 h-9 " type="text"
                                                name="political_dismissal_date_reappointment">
                                                {{ $employee->political_dismissal_date_reappointment }}
                                            </p>


                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_ministerial_reappointment_number"
                                                class="w-full mb-1" :value="__(
                                                    'word.political_dismissal_ministerial_reappointment_number',
                                                )" />
                                            <p id="political_dismissal_ministerial_reappointment_number"
                                                class="w-full h-9 block mt-1 " type="text"
                                                name="political_dismissal_ministerial_reappointment_number">
                                                {{ $employee->political_dismissal_ministerial_reappointment_number }}
                                            </p>

                                        </div>

                                        <div class=" mx-4 my-4 w-full">
                                            <x-input-label for="political_dismissal_ministerial_reappointment_date"
                                                class="w-full mb-1" :value="__(
                                                    'word.political_dismissal_ministerial_reappointment_date',
                                                )" />

                                            <p id="political_dismissal_ministerial_reappointment_date"
                                                class="w-full block mt-1 h-9 " type="text"
                                                name="political_dismissal_ministerial_reappointment_date">
                                                {{ $employee->political_dismissal_ministerial_reappointment_date }}
                                            </p>


                                        </div>

                                    </div>

                                </div>
                            @else
                            @endif
                            <div class="flex">
                                @if (isset($employee->user_id_create))
                                    <div class="mx-4 my-4 ">

                                        {{ __('word.user_create') }} {{ $employee->get_user_create->name }}

                                        {{ $employee->created_at }}
                                    </div>
                                @endif

                                @if (isset($employee->user_id_update))
                                    <div class="mx-4 my-4 ">

                                        {{ __('word.user_update') }} {{ $employee->get_user_update->name }}

                                        {{ $employee->updated_at }}
                                    </div>
                                @endif

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

</x-app-layout>
