<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="post" action="{{ route('employee.store') }}">
                            @csrf

                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.personal_info') }}
                            </h2>
                            <div class="flex ">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_number" class="w-full mb-1" :value="__('word.job_number')" />
                                    <x-text-input id="job_number" class="w-full block mt-1" type="text"
                                        name="job_number" value="{{ old('job_number') }}" />
                                    <x-input-error :messages="$errors->get('job_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.name')" />
                                    <x-text-input id="name" class="w-full block mt-1 " type="text"
                                        name="name" value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="father_name" class="w-full mb-1" :value="__('word.father_name')" />
                                    <x-text-input id="father_name" class="w-full block mt-1 " type="text"
                                        name="father_name" value="{{ old('father_name') }}" />
                                    <x-input-error :messages="$errors->get('father_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="grandfather_name" class="w-full mb-1" :value="__('word.grandfather_name')" />
                                    <x-text-input id="grandfather_name" class="w-full block mt-1" type="text"
                                        name="grandfather_name" value="{{ old('grandfather_name') }}" />
                                    <x-input-error :messages="$errors->get('grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="fourth_grandfather_name" class="w-full mb-1"
                                        :value="__('word.fourth_grandfather_name')" />
                                    <x-text-input id="fourth_grandfather_name" class="w-full block mt-1" type="text"
                                        name="fourth_grandfather_name" value="{{ old('fourth_grandfather_name') }}" />
                                    <x-input-error :messages="$errors->get('fourth_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="surname" class="w-full mb-1" :value="__('word.surname')" />
                                    <x-text-input id="surname" class="w-full block mt-1" type="text" name="surname"
                                        value="{{ old('surname') }}" />
                                    <x-input-error :messages="$errors->get('surname')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_name" class="w-full mb-1" :value="__('word.mother_name')" />
                                    <x-text-input id="mother_name" class="w-full block mt-1" type="text"
                                        name="mother_name" value="{{ old('mother_name') }}" />
                                    <x-input-error :messages="$errors->get('mother_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_father_name" class="w-full mb-1" :value="__('word.mother_father_name')" />
                                    <x-text-input id="mother_father_name" class="w-full block mt-1 " type="text"
                                        name="mother_father_name" value="{{ old('mother_father_name') }}" />
                                    <x-input-error :messages="$errors->get('mother_father_name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_grandfather_name" class="w-full mb-1"
                                        :value="__('word.mother_grandfather_name')" />
                                    <x-text-input id="mother_grandfather_name" class="w-full block mt-1 " type="text"
                                        name="mother_grandfather_name" value="{{ old('mother_grandfather_name') }}" />
                                    <x-input-error :messages="$errors->get('mother_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_surname" class="w-full mb-1" :value="__('word.mother_surname')" />
                                    <x-text-input id="mother_surname" class="w-full block mt-1" type="text"
                                        name="mother_surname" value="{{ old('mother_surname') }}" />
                                    <x-input-error :messages="$errors->get('mother_surname')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="date_of_birth" class="w-full mb-1" :value="__('word.date_of_birth')" />
                                    <div class="flex">
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="date_of_birth_d"
                                            value="{{ old('date_of_birth_d') }}" />
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="date_of_birth_m"
                                            value="{{ old('date_of_birth_m') }}" />
                                        <x-text-input id="date_of_birth" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="date_of_birth_y"
                                            value="{{ old('date_of_birth_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="place_of_birth" class="w-full mb-1" :value="__('word.place_of_birth')" />
                                    <x-text-input id="place_of_birth" class="w-full block mt-1 " type="text"
                                        name="place_of_birth" value="{{ old('place_of_birth') }}" />
                                    <x-input-error :messages="$errors->get('place_of_birth')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="marital_status_id" class="w-full mb-1" :value="__('word.marital_status_id')" />
                                    <select id="marital_status_id" class="w-full block mt-1 "
                                        name="marital_status_id">
                                        @foreach ($marital_statuss as $marital_status)
                                            <option value="{{ $marital_status->id }}"
                                                {{ old('marital_status_id') == $marital_status->id ? 'selected' : '' }}>
                                                {{ $marital_status->marital_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('marital_status_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="first_husband_name" class="w-full mb-1" :value="__('word.first_husband_name')" />
                                    <x-text-input id="first_husband_name" class="w-full block mt-1 " type="text"
                                        name="first_husband_name" value="{{ old('first_husband_name') }}" />
                                    <x-input-error :messages="$errors->get('first_husband_name')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_father_name" class="w-full mb-1" :value="__('word.husband_father_name')" />
                                    <x-text-input id="husband_father_name" class="w-full block mt-1 " type="text"
                                        name="husband_father_name" value="{{ old('husband_father_name') }}" />
                                    <x-input-error :messages="$errors->get('husband_father_name')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_grandfather_name" class="w-full mb-1"
                                        :value="__('word.husband_grandfather_name')" />
                                    <x-text-input id="husband_grandfather_name" class="w-full block mt-1"
                                        type="text" name="husband_grandfather_name"
                                        value="{{ old('husband_grandfather_name') }}" />
                                    <x-input-error :messages="$errors->get('husband_grandfather_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="husband_surname" class="w-full mb-1" :value="__('word.husband_surname')" />
                                    <x-text-input id="husband_surname" class="w-full block mt-1 " type="text"
                                        name="husband_surname" value="{{ old('husband_surname') }}" />
                                    <x-input-error :messages="$errors->get('husband_surname')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="number_of_children" class="w-full mb-1" :value="__('word.number_of_children')" />
                                    <x-text-input id="number_of_children" class="w-full block mt-1 " type="number"
                                        name="number_of_children" value="{{ old('number_of_children') }}" />
                                    <x-input-error :messages="$errors->get('number_of_children')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nationality_id" class="w-full mb-1" :value="__('word.nationality_id')" />
                                    <select id="nationality_id" class="w-full block mt-1 " name="nationality_id">
                                        @foreach ($nationalitys as $nationality)
                                            <option value="{{ $nationality->id }}"
                                                {{ old('nationality_id') == $nationality->id ? 'selected' : '' }}>
                                                {{ $nationality->nationality }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('nationality_id')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="mother_language_id" class="w-full mb-1" :value="__('word.mother_language_id')" />
                                    <select id="mother_language_id" class="w-full block mt-1 "
                                        name="mother_language_id">
                                        @foreach ($mother_languages as $mother_language)
                                            <option value="{{ $mother_language->id }}"
                                                {{ old('mother_language_id') == $mother_language->id ? 'selected' : '' }}>
                                                {{ $mother_language->mother_language }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('mother_language_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="gender_id" class="w-full mb-1" :value="__('word.gender_id')" />
                                    <select id="gender_id" class="w-full block mt-1 " name="gender_id">
                                        @foreach ($genders as $gender)
                                            <option value="{{ $gender->id }}"
                                                {{ old('gender_id') == $gender->id ? 'selected' : '' }}>
                                                {{ $gender->gender }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('gender_id')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_phone_number" class="w-full mb-1"
                                        :value="__('word.employee_phone_number')" />
                                    <x-text-input id="employee_phone_number" class="w-full block mt-1" type="number"
                                        name="employee_phone_number" value="{{ old('employee_phone_number') }}" />
                                    <x-input-error :messages="$errors->get('employee_phone_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_email" class="w-full mb-1" :value="__('word.employee_email')" />
                                    <x-text-input id="employee_email" class="w-full block mt-1 " type="email"
                                        name="employee_email" value="{{ old('employee_email') }}" />
                                    <x-input-error :messages="$errors->get('employee_email')" class="mt-2" />
                                </div>

                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.functional_data') }}
                            </h2>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="contract_type_id" class="w-full mb-1" :value="__('word.contract_type_id')" />
                                    <select id="contract_type_id" class="w-full block mt-1 " name="contract_type_id">
                                        @foreach ($contract_types as $contract_type)
                                            <option value="{{ $contract_type->id }}"
                                                {{ old('contract_type_id') == $contract_type->id ? 'selected' : '' }}>
                                                {{ $contract_type->contract_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('contract_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="employee_status_id" class="w-full mb-1" :value="__('word.employee_status_id')" />
                                    <select id="employee_status_id" class="w-full block mt-1 "
                                        name="employee_status_id">
                                        @foreach ($employee_statuss as $employee_status)
                                            <option value="{{ $employee_status->id }}"
                                                {{ old('employee_status_id') == $employee_status->id ? 'selected' : '' }}>
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
                                                {{ old('employment_type_id') == $employment_type->id ? 'selected' : '' }}>
                                                {{ $employment_type->employment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('employment_type_id')" class="w-full mt-2" />
                                </div>



                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="assignment_type_id" class="w-full mb-1" :value="__('word.assignment_type_id')" />
                                    <select id="assignment_type_id" class="w-full block mt-1 "
                                        name="assignment_type_id">
                                        @foreach ($assignment_types as $assignment_type)
                                            <option value="{{ $assignment_type->id }}"
                                                {{ old('assignment_type_id') == $assignment_type->id ? 'selected' : '' }}>
                                                {{ $assignment_type->assignment_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('assignment_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="teaching_specialization_id" class="w-full mb-1"
                                        :value="__('word.teaching_specialization_id')" />
                                    <select id="teaching_specialization_id" class="w-full block mt-1 "
                                        name="teaching_specialization_id">
                                        @foreach ($teaching_specializations as $teaching_specialization)
                                            <option value="{{ $teaching_specialization->id }}"
                                                {{ old('teaching_specialization_id') == $teaching_specialization->id ? 'selected' : '' }}>
                                                {{ $teaching_specialization->teaching_specialization }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('teaching_specialization_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_date" class="w-full mb-1" :value="__('word.appointment_date')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="appointment_date_d"
                                            value="{{ old('appointment_date_d') }}" />
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="appointment_date_m"
                                            value="{{ old('appointment_date_m') }}" />
                                        <x-text-input id="appointment_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="appointment_date_y"
                                            value="{{ old('appointment_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_date')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_number" class="w-full mb-1"
                                        :value="__('word.appointment_ministerial_order_number')" />
                                    <x-text-input id="appointment_ministerial_order_number" class="w-full block mt-1 "
                                        type="text" name="appointment_ministerial_order_number"
                                        value="{{ old('appointment_ministerial_order_number') }}" />
                                    <x-input-error :messages="$errors->get('appointment_ministerial_order_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_ministerial_order_date" class="w-full mb-1"
                                        :value="__('word.appointment_ministerial_order_date')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="appointment_ministerial_order_date_d"
                                            value="{{ old('appointment_ministerial_order_date_d') }}" />
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="appointment_ministerial_order_date_m"
                                            value="{{ old('appointment_ministerial_order_date_m') }}" />
                                        <x-text-input id="appointment_ministerial_order_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="appointment_ministerial_order_date_y"
                                            value="{{ old('appointment_ministerial_order_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_ministerial_order_date')" class="w-full mt-2" />
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_number" class="w-full mb-1"
                                        :value="__('word.appointment_administrative_order_number')" />
                                    <x-text-input id="appointment_administrative_order_number"
                                        class="w-full block mt-1 " type="text"
                                        name="appointment_administrative_order_number"
                                        value="{{ old('appointment_administrative_order_number') }}" />
                                    <x-input-error :messages="$errors->get('appointment_administrative_order_number')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_administrative_order_date" class="w-full mb-1"
                                        :value="__('word.appointment_administrative_order_date')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                            min="1" max="31" type="number"
                                            name="appointment_administrative_order_date_d"
                                            value="{{ old('appointment_administrative_order_date_d') }}" />
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                            min="1" max="12" type="number"
                                            name="appointment_administrative_order_date_m"
                                            value="{{ old('appointment_administrative_order_date_m') }}" />
                                        <x-text-input id="appointment_administrative_order_date"
                                            class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                            min="1950" max="2100" type="number"
                                            name="appointment_administrative_order_date_y"
                                            value="{{ old('appointment_administrative_order_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_administrative_order_date')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_number" class="w-full mb-1"
                                        :value="__('word.appointment_first_initiation_number')" />
                                    <x-text-input id="appointment_first_initiation_number" class="w-full block mt-1 "
                                        type="text" name="appointment_first_initiation_number"
                                        value="{{ old('appointment_first_initiation_number') }}" />
                                    <x-input-error :messages="$errors->get('appointment_first_initiation_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="appointment_first_initiation_date" class="w-full mb-1"
                                        :value="__('word.appointment_first_initiation_date')" />
                                    <div class="flex">
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="appointment_first_initiation_date_d"
                                            value="{{ old('appointment_first_initiation_date_d') }}" />
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="appointment_first_initiation_date_m"
                                            value="{{ old('appointment_first_initiation_date_m') }}" />
                                        <x-text-input id="appointment_first_initiation_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="appointment_first_initiation_date_y"
                                            value="{{ old('appointment_first_initiation_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('appointment_first_initiation_date')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="nominal_salary" class="w-full mb-1" :value="__('word.nominal_salary')" />
                                    <x-text-input id="nominal_salary" class="w-full block mt-1 " type="number"
                                        name="nominal_salary" value="{{ old('nominal_salary') }}" />
                                    <x-input-error :messages="$errors->get('nominal_salary')" class="mt-2" />
                                </div>
                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_title_id" class="w-full mb-1" :value="__('word.job_title_id')" />
                                    <select id="job_title_id" class="w-full block mt-1 " name="job_title_id">
                                        @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }}"
                                                {{ old('job_title_id') == $job_title->id ? 'selected' : '' }}>
                                                {{ $job_title->job_title }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_title_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_id" class="w-full mb-1" :value="__('word.job_grade_id')" />
                                    <select id="job_grade_id" class="w-full block mt-1 " name="job_grade_id">
                                        @foreach ($job_grades as $job_grade)
                                            <option value="{{ $job_grade->id }}"
                                                {{ old('job_grade_id') == $job_grade->id ? 'selected' : '' }}>
                                                {{ $job_grade->job_grade }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('job_grade_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="job_grade_date" class="w-full mb-1" :value="__('word.job_grade_date')" />
                                    <div class="flex">
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="job_grade_date_d"
                                            value="{{ old('job_grade_date_d') }}" />
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="job_grade_date_m"
                                            value="{{ old('job_grade_date_m') }}" />
                                        <x-text-input id="job_grade_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="job_grade_date_y"
                                            value="{{ old('job_grade_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('job_grade_date')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_id" class="w-full mb-1" :value="__('word.career_stage_id')" />
                                    <select id="career_stage_id" class="w-full block mt-1 " name="career_stage_id">
                                        @foreach ($career_stages as $career_stage)
                                            <option value="{{ $career_stage->id }}"
                                                {{ old('career_stage_id') == $career_stage->id ? 'selected' : '' }}>
                                                {{ $career_stage->career_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('career_stage_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="career_stage_date" class="w-full mb-1" :value="__('word.career_stage_date')" />
                                    <div class="flex">
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="career_stage_date_d"
                                            value="{{ old('career_stage_date_d') }}" />
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="career_stage_date_m"
                                            value="{{ old('career_stage_date_m') }}" />
                                        <x-text-input id="career_stage_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="career_stage_date_y"
                                            value="{{ old('career_stage_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('career_stage_date')" class="w-full mt-2" />
                                </div>

                            </div>




                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.National_card_data') }}
                            </h2>

                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_national_card" class="w-full mb-1" :value="__('word.is_national_card')" />
                                <select id="is_national_card" class="w-full block mt-1 " name="is_national_card">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ old('is_national_card') == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_national_card')" class="w-full mt-2" />
                            </div>

                            <div id="nc">




                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_number" class="w-full mb-1"
                                            :value="__('word.national_card_number')" />
                                        <x-text-input id="national_card_number" class="w-full block mt-1"
                                            type="number" name="national_card_number"
                                            value="{{ old('national_card_number') }}" />
                                        <x-input-error :messages="$errors->get('national_card_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_date_of_issue" class="w-full mb-1"
                                            :value="__('word.national_card_date_of_issue')" />
                                        <div class="flex">
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.day') }}" min="1" max="31"
                                                type="number" name="national_card_date_of_issue_d"
                                                value="{{ old('national_card_date_of_issue_d') }}" />
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.month') }}" min="1" max="12"
                                                type="number" name="national_card_date_of_issue_m"
                                                value="{{ old('national_card_date_of_issue_m') }}" />
                                            <x-text-input id="national_card_date_of_issue" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                                type="number" name="national_card_date_of_issue_y"
                                                value="{{ old('national_card_date_of_issue_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('national_card_date_of_issue')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_issuing_authority" class="w-full mb-1"
                                            :value="__('word.national_card_issuing_authority')" />
                                        <x-text-input id="national_card_issuing_authority" class="w-full block mt-1 "
                                            type="text" name="national_card_issuing_authority"
                                            value="{{ old('national_card_issuing_authority') }}" />
                                        <x-input-error :messages="$errors->get('national_card_issuing_authority')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="national_card_family_number" class="w-full mb-1"
                                            :value="__('word.national_card_family_number')" />
                                        <x-text-input id="national_card_family_number" class="w-full block mt-1 "
                                            type="text" name="national_card_family_number"
                                            value="{{ old('national_card_family_number') }}" />
                                        <x-input-error :messages="$errors->get('national_card_family_number')" class="w-full mt-2" />
                                    </div>
                                </div>
                            </div>

                            <div id="ci">

                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.Civil_status_identity_data') }}
                                </h2>


                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_identity_number" class="w-full mb-1"
                                            :value="__('word.civil_status_identity_number')" />
                                        <x-text-input id="civil_status_identity_number" class="w-full block mt-1"
                                            type="text" name="civil_status_identity_number"
                                            value="{{ old('civil_status_identity_number') }}" />
                                        <x-input-error :messages="$errors->get('civil_status_identity_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_registry_number" class="w-full mb-1"
                                            :value="__('word.civil_status_registry_number')" />
                                        <x-text-input id="civil_status_registry_number" class="w-full block mt-1 "
                                            type="text" name="civil_status_registry_number"
                                            value="{{ old('civil_status_registry_number') }}" />
                                        <x-input-error :messages="$errors->get('civil_status_registry_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_newspaper_number" class="w-full mb-1"
                                            :value="__('word.civil_status_newspaper_number')" />
                                        <x-text-input id="civil_status_newspaper_number" class="w-full block mt-1 "
                                            type="text" name="civil_status_newspaper_number"
                                            value="{{ old('civil_status_newspaper_number') }}" />
                                        <x-input-error :messages="$errors->get('civil_status_newspaper_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_issue_date" class="w-full mb-1"
                                            :value="__('word.civil_status_issue_date')" />
                                        <div class="flex">
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.day') }}" min="1" max="31"
                                                type="number" name="civil_status_issue_date_d"
                                                value="{{ old('civil_status_issue_date_d') }}" />
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.month') }}" min="1" max="12"
                                                type="number" name="civil_status_issue_date_m"
                                                value="{{ old('civil_status_issue_date_m') }}" />
                                            <x-text-input id="civil_status_issue_date" class="w-20 block mt-1 "
                                                placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                                type="number" name="civil_status_issue_date_y"
                                                value="{{ old('civil_status_issue_date_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('civil_status_issue_date')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="civil_status_issuer" class="w-full mb-1"
                                            :value="__('word.civil_status_issuer')" />
                                        <x-text-input id="civil_status_issuer" class="w-full block mt-1 "
                                            type="text" name="civil_status_issuer"
                                            value="{{ old('civil_status_issuer') }}" />
                                        <x-input-error :messages="$errors->get('civil_status_issuer')" class="w-full mt-2" />
                                    </div>
                                </div>

                                <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                    {{ __('word.Nationality_certificate_data') }}
                                </h2>

                                <div class="flex">
                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_number" class="w-full mb-1"
                                            :value="__('word.nationality_certificate_number')" />
                                        <x-text-input id="nationality_certificate_number" class="w-full block mt-1 "
                                            type="text" name="nationality_certificate_number"
                                            value="{{ old('nationality_certificate_number') }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing_wallet"
                                            class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing_wallet')" />
                                        <x-text-input id="nationality_certificate_authority_issuing_wallet"
                                            class="w-full block mt-1 " type="text"
                                            name="nationality_certificate_authority_issuing_wallet"
                                            value="{{ old('nationality_certificate_authority_issuing_wallet') }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing_wallet')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing_date"
                                            class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing_date')" />
                                        <div class="flex">
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="nationality_certificate_authority_issuing_date_d"
                                                value="{{ old('nationality_certificate_authority_issuing_date_d') }}" />
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="nationality_certificate_authority_issuing_date_m"
                                                value="{{ old('nationality_certificate_authority_issuing_date_m') }}" />
                                            <x-text-input id="nationality_certificate_authority_issuing_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="nationality_certificate_authority_issuing_date_y"
                                                value="{{ old('nationality_certificate_authority_issuing_date_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing_date')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="nationality_certificate_authority_issuing"
                                            class="w-full mb-1" :value="__('word.nationality_certificate_authority_issuing')" />
                                        <x-text-input id="nationality_certificate_authority_issuing"
                                            class="w-full block mt-1 " type="text"
                                            name="nationality_certificate_authority_issuing"
                                            value="{{ old('nationality_certificate_authority_issuing') }}" />
                                        <x-input-error :messages="$errors->get('nationality_certificate_authority_issuing')" class="w-full mt-2" />
                                    </div>

                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Residence_card_information') }}
                            </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_number" class="w-full mb-1"
                                        :value="__('word.housing_card_number')" />
                                    <x-text-input id="housing_card_number" class="w-full block mt-1" type="text"
                                        name="housing_card_number" value="{{ old('housing_card_number') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_date_of_issue" class="w-full mb-1"
                                        :value="__('word.housing_card_date_of_issue')" />
                                    <div class="flex">
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="housing_card_date_of_issue_d"
                                            value="{{ old('housing_card_date_of_issue_d') }}" />
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="housing_card_date_of_issue_m"
                                            value="{{ old('housing_card_date_of_issue_m') }}" />
                                        <x-text-input id="housing_card_date_of_issue" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="housing_card_date_of_issue_y"
                                            value="{{ old('housing_card_date_of_issue_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('housing_card_date_of_issue')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_issuing_authority" class="w-full mb-1"
                                        :value="__('word.housing_card_issuing_authority')" />
                                    <x-text-input id="housing_card_issuing_authority" class="w-full block mt-1 "
                                        type="text" name="housing_card_issuing_authority"
                                        value="{{ old('housing_card_issuing_authority') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_issuing_authority')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_residence_address" class="w-full mb-1"
                                        :value="__('word.housing_card_residence_address')" />
                                    <x-text-input id="housing_card_residence_address" class="w-full block mt-1 "
                                        type="text" name="housing_card_residence_address"
                                        value="{{ old('housing_card_residence_address') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_residence_address')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_governorate" class="w-full mb-1"
                                        :value="__('word.housing_card_governorate')" />
                                    <x-text-input id="housing_card_governorate" class="w-full block mt-1 "
                                        type="text" name="housing_card_governorate"
                                        value="{{ old('housing_card_governorate') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_governorate')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_district" class="w-full mb-1"
                                        :value="__('word.housing_card_district')" />
                                    <x-text-input id="housing_card_district" class="w-full block mt-1" type="text"
                                        name="housing_card_district" value="{{ old('housing_card_district') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_district')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_neighborhood" class="w-full mb-1"
                                        :value="__('word.housing_card_neighborhood')" />
                                    <x-text-input id="housing_card_neighborhood" class="w-full block mt-1 "
                                        type="text" name="housing_card_neighborhood"
                                        value="{{ old('housing_card_neighborhood') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_neighborhood')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_house_number" class="w-full mb-1"
                                        :value="__('word.housing_card_house_number')" />
                                    <x-text-input id="housing_card_house_number" class="w-full block mt-1 "
                                        type="text" name="housing_card_house_number"
                                        value="{{ old('housing_card_house_number') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_house_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_nearest_point_of_reference" class="w-full mb-1"
                                        :value="__('word.housing_card_nearest_point_of_reference')" />
                                    <x-text-input id="housing_card_nearest_point_of_reference"
                                        class="w-full block mt-1 " type="text"
                                        name="housing_card_nearest_point_of_reference"
                                        value="{{ old('housing_card_nearest_point_of_reference') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_nearest_point_of_reference')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="housing_card_mukhtar_name" class="w-full mb-1"
                                        :value="__('word.housing_card_mukhtar_name')" />
                                    <x-text-input id="housing_card_mukhtar_name" class="w-full block mt-1 "
                                        type="text" name="housing_card_mukhtar_name"
                                        value="{{ old('housing_card_mukhtar_name') }}" />
                                    <x-input-error :messages="$errors->get('housing_card_mukhtar_name')" class="w-full mt-2" />
                                </div>
                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Academic_achievement_data1') }}
                            </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="first_academic_achievement_id" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_academic_achievement')" />
                                    <select id="first_academic_achievement_id" class="w-full block mt-1 "
                                        name="first_academic_achievement_id">
                                        @foreach ($academic_achievements as $academic_achievement)
                                            <option value="{{ $academic_achievement->id }}"
                                                {{ old('first_academic_achievement_id') == $academic_achievement->id ? 'selected' : '' }}>
                                                {{ $academic_achievement->academic_achievement }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('first_academic_achievement_id')" class="w-full mt-2" />
                                </div>



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment')" />
                                    <x-text-input id="certificate_of_appointment" class="w-full block mt-1 "
                                        type="text" name="certificate_of_appointment"
                                        value="{{ old('certificate_of_appointment') }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_graduation_year"
                                        class="w-full mb-1" :value="__('word.certificate_of_appointment_graduation_year')" />
                                    <x-text-input id="certificate_of_appointment_graduation_year"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_graduation_year"
                                        value="{{ old('certificate_of_appointment_graduation_year') }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_graduation_year')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_university_institute_school_name"
                                        class="w-full mb-1" :value="__(
                                            'word.certificate_of_appointment_university_institute_school_name',
                                        )" />
                                    <x-text-input id="certificate_of_appointment_university_institute_school_name"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_university_institute_school_name"
                                        value="{{ old('certificate_of_appointment_university_institute_school_name') }}" />
                                    <x-input-error :messages="$errors->get(
                                        'certificate_of_appointment_university_institute_school_name',
                                    )" class="mt-2" />
                                </div>

                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_college_name" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_college_name')" />
                                    <x-text-input id="certificate_of_appointment_college_name"
                                        class="w-full block mt-1 " type="text"
                                        name="certificate_of_appointment_college_name"
                                        value="{{ old('certificate_of_appointment_college_name') }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_college_name')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_major" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_major')" />
                                    <x-text-input id="certificate_of_appointment_major" class="w-full block mt-1"
                                        type="text" name="certificate_of_appointment_major"
                                        value="{{ old('certificate_of_appointment_major') }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_major')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('word.certificate_of_appointment_mark')" />
                                    <x-text-input id="certificate_of_appointment_mark" class="w-full block mt-1 "
                                        type="number" name="certificate_of_appointment_mark"
                                        value="{{ old('certificate_of_appointment_mark') }}" />
                                    <x-input-error :messages="$errors->get('certificate_of_appointment_mark')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Academic_achievement_data2') }}
                            </h2>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="academic_achievement_id" class="w-full mb-1"
                                        :value="__('word.last_academic_achievement')" />
                                    <select id="academic_achievement_id" class="w-full block mt-1 "
                                        name="academic_achievement_id">
                                        @foreach ($academic_achievements as $academic_achievement)
                                            <option value="{{ $academic_achievement->id }}"
                                                {{ old('first_academic_achievement_id') == $academic_achievement->id ? 'selected' : '' }}>
                                                {{ $academic_achievement->academic_achievement }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('first_academic_achievement_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_obtained" class="w-full mb-1"
                                        :value="__('word.last_certificate_obtained')" />
                                    <x-text-input id="last_certificate_obtained" class="w-full block mt-1 "
                                        type="text" name="last_certificate_obtained"
                                        value="{{ old('last_certificate_obtained') }}" />
                                    <x-input-error :messages="$errors->get('last_certificate_obtained')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_year_of_graduation" class="w-full mb-1"
                                        :value="__('word.last_year_of_graduation')" />
                                    <x-text-input id="last_year_of_graduation" class="w-full block mt-1 "
                                        type="text" name="last_year_of_graduation"
                                        value="{{ old('last_year_of_graduation') }}" />
                                    <x-input-error :messages="$errors->get('last_year_of_graduation')" class="mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_university" class="w-full mb-1"
                                        :value="__('word.last_name_of_the_university')" />
                                    <x-text-input id="last_name_of_the_university" class="w-full block mt-1 "
                                        type="text" name="last_name_of_the_university"
                                        value="{{ old('last_name_of_the_university') }}" />
                                    <x-input-error :messages="$errors->get('last_name_of_the_university')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_name_of_the_college" class="w-full mb-1"
                                        :value="__('word.last_name_of_the_college')" />
                                    <x-text-input id="last_name_of_the_college" class="w-full block mt-1 "
                                        type="text" name="last_name_of_the_college"
                                        value="{{ old('last_name_of_the_college') }}" />
                                    <x-input-error :messages="$errors->get('last_name_of_the_college')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_major" class="w-full mb-1" :value="__('word.last_major')" />
                                    <x-text-input id="last_major" class="w-full block mt-1 " type="text"
                                        name="last_major" value="{{ old('last_major') }}" />
                                    <x-input-error :messages="$errors->get('last_major')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="last_certificate_of_appointment_mark" class="w-full mb-1"
                                        :value="__('word.last_certificate_of_appointment_mark')" />
                                    <x-text-input id="last_certificate_of_appointment_mark" class="w-full block mt-1 "
                                        type="number" name="last_certificate_of_appointment_mark"
                                        value="{{ old('last_certificate_of_appointment_mark') }}" />
                                    <x-input-error :messages="$errors->get('last_certificate_of_appointment_mark')" class="mt-2" />
                                </div>

                            </div>



                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Academic_achievement_data3') }}
                            </h2>
                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_scientific_title" class="w-full mb-1" :value="__('word.is_scientific_title')" />
                                <select id="is_scientific_title" class="w-full block mt-1 "
                                    name="is_scientific_title">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ old('is_scientific_title') == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_scientific_title')" class="w-full mt-2" />
                            </div>

                            <div id="st" class="flex">



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="scientific_title_stage_id" class="w-full mb-1"
                                        :value="__('word.scientific_title_stage_id')" />
                                    <select id="scientific_title_stage_id" class="w-full block mt-1 "
                                        name="scientific_title_stage_id">
                                        @foreach ($scientific_title_stages as $scientific_title_stage)
                                            <option value="{{ $scientific_title_stage->id }}"
                                                {{ old('scientific_title_stage_id') == $scientific_title_stage->id ? 'selected' : '' }}>
                                                {{ $scientific_title_stage->scientific_title_stage }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('scientific_title_stage_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="scientific_title_date" class="w-full mb-1"
                                        :value="__('word.scientific_title_date')" />
                                    <div class="flex">
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.day') }}" min="1" max="31"
                                            type="number" name="scientific_title_date_d"
                                            value="{{ old('scientific_title_date_d') }}" />
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.month') }}" min="1" max="12"
                                            type="number" name="scientific_title_date_m"
                                            value="{{ old('scientific_title_date_m') }}" />
                                        <x-text-input id="scientific_title_date" class="w-20 block mt-1 "
                                            placeholder="{{ __('word.year') }}" min="1950" max="2100"
                                            type="number" name="scientific_title_date_y"
                                            value="{{ old('scientific_title_date_y') }}" />
                                    </div>
                                    <x-input-error :messages="$errors->get('scientific_title_date')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.Political_career_segregation_data') }}
                            </h2>

                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_political_dismissal" class="w-full mb-1"
                                    :value="__('word.is_political_dismissal')" />
                                <select id="is_political_dismissal" class="w-full block mt-1 "
                                    name="is_political_dismissal">
                                    @foreach ($yesnos as $yesno)
                                        <option value="{{ $yesno->id }}"
                                            {{ old('is_political_dismissal') == $yesno->id ? 'selected' : '' }}>
                                            {{ $yesno->value }}
                                        </option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('is_political_dismissal')" class="w-full mt-2" />
                            </div>

                            <div id="pd">


                                <div class="flex">



                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_type_id" class="w-full mb-1"
                                            :value="__('word.political_dismissal_type_id')" />
                                        <select id="political_dismissal_type_id" class="w-full block mt-1 "
                                            name="political_dismissal_type_id">
                                            @foreach ($political_dismissal_types as $political_dismissal_type)
                                                <option value="{{ $political_dismissal_type->id }}"
                                                    {{ old('political_dismissal_type_id') == $political_dismissal_type->id ? 'selected' : '' }}>
                                                    {{ $political_dismissal_type->political_dismissal_type }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <x-input-error :messages="$errors->get('political_dismissal_type_id')" class="w-full mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_duration_from" class="w-full mb-1"
                                            :value="__('word.political_dismissal_duration_from')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="political_dismissal_duration_from_d"
                                                value="{{ old('political_dismissal_duration_from_d') }}" />
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="political_dismissal_duration_from_m"
                                                value="{{ old('political_dismissal_duration_from_m') }}" />
                                            <x-text-input id="political_dismissal_duration_from"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="political_dismissal_duration_from_y"
                                                value="{{ old('political_dismissal_duration_from_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_duration_from')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_duration_to" class="w-full mb-1"
                                            :value="__('word.political_dismissal_duration_to')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="political_dismissal_duration_to_d"
                                                value="{{ old('political_dismissal_duration_to_d') }}" />
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="political_dismissal_duration_to_m"
                                                value="{{ old('political_dismissal_duration_to_m') }}" />
                                            <x-text-input id="political_dismissal_duration_to"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="political_dismissal_duration_to_y"
                                                value="{{ old('political_dismissal_duration_to_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_duration_to')" class="w-full mt-2" />
                                    </div>
                                </div>


                                <div class="flex">

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_years" class="w-full mb-1"
                                            :value="__('word.political_dismissal_years')" />
                                        <x-text-input id="political_dismissal_years" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_years"
                                            value="{{ old('political_dismissal_years') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_years')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_months" class="w-full mb-1"
                                            :value="__('word.political_dismissal_months')" />
                                        <x-text-input id="political_dismissal_months" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_months"
                                            value="{{ old('political_dismissal_months') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_months')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_days" class="w-full mb-1"
                                            :value="__('word.political_dismissal_days')" />
                                        <x-text-input id="political_dismissal_days" class="w-full block mt-1 "
                                            type="number" name="political_dismissal_days"
                                            value="{{ old('political_dismissal_days') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_days')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_order_number" class="w-full mb-1"
                                            :value="__('word.political_dismissal_order_number')" />
                                        <x-text-input id="political_dismissal_order_number"
                                            class="w-full block mt-1" type="text"
                                            name="political_dismissal_order_number"
                                            value="{{ old('political_dismissal_order_number') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_order_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_order_date" class="w-full mb-1"
                                            :value="__('word.political_dismissal_order_date')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="political_dismissal_order_date_d"
                                                value="{{ old('political_dismissal_order_date_d') }}" />
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="political_dismissal_order_date_m"
                                                value="{{ old('political_dismissal_order_date_m') }}" />
                                            <x-text-input id="political_dismissal_order_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="political_dismissal_order_date_y"
                                                value="{{ old('political_dismissal_order_date_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_order_date')" class="w-full mt-2" />
                                    </div>

                                </div>


                                <div class="flex">


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_reappointment_number"
                                            class="w-full mb-1" :value="__('word.political_dismissal_reappointment_number')" />
                                        <x-text-input id="political_dismissal_reappointment_number"
                                            class="w-full block mt-1 " type="text"
                                            name="political_dismissal_reappointment_number"
                                            value="{{ old('political_dismissal_reappointment_number') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_reappointment_number')" class="w-full mt-2" />
                                    </div>


                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_date_reappointment"
                                            class="w-full mb-1" :value="__('word.political_dismissal_date_reappointment')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="political_dismissal_date_reappointment_d"
                                                value="{{ old('political_dismissal_date_reappointment_d') }}" />
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="political_dismissal_date_reappointment_m"
                                                value="{{ old('political_dismissal_date_reappointment_m') }}" />
                                            <x-text-input id="political_dismissal_date_reappointment"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="political_dismissal_date_reappointment_y"
                                                value="{{ old('political_dismissal_date_reappointment_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_date_reappointment')" class="mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_ministerial_reappointment_number"
                                            class="w-full mb-1" :value="__('word.political_dismissal_ministerial_reappointment_number')" />
                                        <x-text-input id="political_dismissal_ministerial_reappointment_number"
                                            class="w-full block mt-1 " type="text"
                                            name="political_dismissal_ministerial_reappointment_number"
                                            value="{{ old('political_dismissal_ministerial_reappointment_number') }}" />
                                        <x-input-error :messages="$errors->get('political_dismissal_ministerial_reappointment_number')" class="w-full mt-2" />
                                    </div>

                                    <div class=" mx-4 my-4 w-full">
                                        <x-input-label for="political_dismissal_ministerial_reappointment_date"
                                            class="w-full mb-1" :value="__('word.political_dismissal_ministerial_reappointment_date')" />
                                        <div class="flex">
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.day') }}"
                                                min="1" max="31" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_d"
                                                value="{{ old('political_dismissal_ministerial_reappointment_date_d') }}" />
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.month') }}"
                                                min="1" max="12" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_m"
                                                value="{{ old('political_dismissal_ministerial_reappointment_date_m') }}" />
                                            <x-text-input id="political_dismissal_ministerial_reappointment_date"
                                                class="w-20 block mt-1 " placeholder="{{ __('word.year') }}"
                                                min="1950" max="2100" type="number"
                                                name="political_dismissal_ministerial_reappointment_date_y"
                                                value="{{ old('political_dismissal_ministerial_reappointment_date_y') }}" />
                                        </div>
                                        <x-input-error :messages="$errors->get('political_dismissal_ministerial_reappointment_date')" class="w-full mt-2" />
                                    </div>


                                </div>

                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-primary-button class="ml-4">
                                    {{ __('word.save') }}
                                </x-primary-button>
                            </div>





                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            toggleFieldspd();
            toggleFieldsst();
            toggleFieldsnc();
            toggleFieldsci();

            $("#is_national_card").change(function() {
                toggleFieldsnc();
                toggleFieldsci();
            });


            $("#is_scientific_title").change(function() {
                toggleFieldsst();
            });

            $("#is_political_dismissal").change(function() {
                toggleFieldspd();
            });

        });

        function toggleFieldsnc() {
            if ($("#is_national_card").val() == 2)
                $("#nc").show();


            else
                $("#nc").hide();


        }

        function toggleFieldsci() {
            if ($("#is_national_card").val() == 1)
                $("#ci").show();


            else
                $("#ci").hide();


        }

        function toggleFieldsst() {
            if ($("#is_scientific_title").val() == 2)
                $("#st").show();


            else
                $("#st").hide();


        }

        function toggleFieldspd() {
            if ($("#is_scientific_title").val() == 2)
                $("#st").show();


            else
                $("#st").hide();


            if ($("#is_political_dismissal").val() == 2)
                $("#pd").show();


            else
                $("#pd").hide();

            //prevent ENTER KEY from submiing the form
            $(':input').keypress(function(e) {
                var code = e.keyCode || e.which;
                if (code == 13)
                    return false;
            });

        }
    </script>

</x-app-layout>
