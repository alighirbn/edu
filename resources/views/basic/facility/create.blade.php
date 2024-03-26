<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST" action="{{ route('facility.store') }}">
                            @csrf
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="counting_number" class="w-full mb-1" :value="__('word.Counting_number')" />
                                    <x-text-input id="counting_number" class="w-full block mt-1" type="text"
                                        name="counting_number" value="{{ old('counting_number') }}" />
                                    <x-input-error :messages="$errors->get('counting_number')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="name" class="w-full mb-1" :value="__('word.School_name')" />
                                    <x-text-input id="name" class="w-full block mt-1" type="text" name="name"
                                        value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('name')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="facility_type_id" class="w-full mb-1" :value="__('word.facility_type')" />
                                    <select id="facility_type_id" class="w-full block mt-1 " name="facility_type_id">

                                        @foreach ($facility_types as $facility_type)
                                            <option value="{{ $facility_type->id }}"
                                                {{ old('facility_type_id') == $facility_type->id ? 'selected' : '' }}>
                                                {{ $facility_type->facility_types }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('facility_type_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="facility_parent_id" class="w-full mb-1" :value="__('word.facility_parent')" />
                                    <select id="facility_parent_id" class="w-full block mt-1 "
                                        name="facility_parent_id">

                                        @foreach ($facility_parents as $facility_parent)
                                            <option value="{{ $facility_parent->id }}"
                                                {{ old('facility_parent_id') == $facility_parent->id ? 'selected' : '' }}>
                                                {{ $facility_parent->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('facility_parent_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_main_school" class="w-full mb-1" :value="__('word.Is_main_school')" />
                                    <select id="is_main_school" class="w-full block mt-1 " name="is_main_school">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_main_school') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_main_school')" class="w-full mt-2" />

                                </div>

                                <div class=" mx-4 my-4 w-full" id="gs">
                                    <x-input-label for="guest_school" class="w-full mb-1" :value="__('word.Guest_school')" />
                                    <x-text-input id="guest_school" class="w-full block mt-1" type="text"
                                        name="guest_school" value="{{ old('guest_school') }}" />
                                    <x-input-error :messages="$errors->get('guest_school')" class="w-full mt-2" />
                                </div>

                            </div>
                            <div class="flex">



                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="province_id" class="w-full mb-1" :value="__('word.Province')" />
                                    <select id="province_id" class="w-full block mt-1 " name="province_id">

                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}"
                                                {{ old('province_id') == $province->id ? 'selected' : '' }}>
                                                {{ $province->province }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('province_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="main_section_id" class="w-full mb-1" :value="__('word.Main_section')" />
                                    <select id="main_section_id" class="w-full block mt-1 " name="main_section_id">

                                        @foreach ($main_section as $main_sections)
                                            <option value="{{ $main_sections->id }}"
                                                {{ old('main_section_id') == $main_sections->id ? 'selected' : '' }}>
                                                {{ $main_sections->main_sections }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('main_section_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="established_year" class="w-full mb-1" :value="__('word.established_year')" />
                                    <x-text-input id="established_year" class="w-full block mt-1" type="text"
                                        name="established_year" value="{{ old('established_year') }}" />
                                    <x-input-error :messages="$errors->get('established_year')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_property_id" class="w-full mb-1" :value="__('word.School_property')" />
                                    <select id="school_property_id" class="w-full block mt-1 "
                                        name="school_property_id">

                                        @foreach ($school_property as $school_properties)
                                            <option value="{{ $school_properties->id }}"
                                                {{ old('school_property_id') == $school_properties->id ? 'selected' : '' }}>
                                                {{ $school_properties->school_properties }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('school_property_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="duality_id" class="w-full mb-1" :value="__('word.Duality')" />
                                    <select id="duality_id" class="w-full block mt-1 " name="duality_id">

                                        @foreach ($duality as $dualities)
                                            <option value="{{ $dualities->id }}"
                                                {{ old('duality_id') == $dualities->id ? 'selected' : '' }}>
                                                {{ $dualities->dualities }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('duality_id')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_time_id" class="w-full mb-1" :value="__('word.School_time')" />
                                    <select id="school_time_id" class="w-full block mt-1 " name="school_time_id">

                                        @foreach ($school_time as $school_times)
                                            <option value="{{ $school_times->id }}"
                                                {{ old('school_time_id') == $school_times->id ? 'selected' : '' }}>
                                                {{ $school_times->school_times }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('school_time_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_invironment_id" class="w-full mb-1"
                                        :value="__('word.School_invironment')" />
                                    <select id="school_invironment_id" class="w-full block mt-1 "
                                        name="school_invironment_id">

                                        @foreach ($school_invironment as $school_invironments)
                                            <option value="{{ $school_invironments->id }}"
                                                {{ old('school_invironment_id') == $school_invironments->id ? 'selected' : '' }}>
                                                {{ $school_invironments->school_invironments }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('school_invironment_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_gender_id" class="w-full mb-1" :value="__('word.School_gender')" />
                                    <select id="school_gender_id" class="w-full block mt-1 " name="school_gender_id">

                                        @foreach ($school_gender as $school_genders)
                                            <option value="{{ $school_genders->id }}"
                                                {{ old('school_gender_id') == $school_genders->id ? 'selected' : '' }}>
                                                {{ $school_genders->school_genders }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('school_gender_id')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_stage_id" class="w-full mb-1" :value="__('word.School_stage')" />
                                    <select id="school_stage_id" class="w-full block mt-1 " name="school_stage_id">

                                        @foreach ($school_stage as $school_stages)
                                            <option value="{{ $school_stages->id }}"
                                                {{ old('school_stage_id') == $school_stages->id ? 'selected' : '' }}>
                                                {{ $school_stages->school_stages }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('school_stage_id')" class="w-full mt-2" />
                                </div>

                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="personale_design_number" class="w-full mb-1"
                                        :value="__('word.personale_design_number')" />
                                    <x-text-input id="personale_design_number" class="w-full block mt-1"
                                        type="text" name="personale_design_number"
                                        value="{{ old('personale_design_number') }}" />
                                    <x-input-error :messages="$errors->get('personale_design_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full" id="mp">
                                    <x-input-label for="male_pupils_number" class="w-full mb-1" :value="__('word.male_pupils_number')" />
                                    <x-text-input id="male_pupils_number" class="w-full block mt-1" type="text"
                                        name="male_pupils_number" value="{{ old('male_pupils_number') }}" />
                                    <x-input-error :messages="$errors->get('male_pupils_number')" class="w-full mt-2" />
                                </div>
                                <div class=" mx-4 my-4 w-full" id="fp">
                                    <x-input-label for="female_pupils_number" class="w-full mb-1"
                                        :value="__('word.female_pupils_number')" />
                                    <x-text-input id="female_pupils_number" class="w-full block mt-1" type="text"
                                        name="female_pupils_number" value="{{ old('female_pupils_number') }}" />
                                    <x-input-error :messages="$errors->get('female_pupils_number')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="occupied_rooms_number" class="w-full mb-1"
                                        :value="__('word.occupied_rooms_number')" />
                                    <x-text-input id="occupied_rooms_number" class="w-full block mt-1" type="text"
                                        name="occupied_rooms_number" value="{{ old('occupied_rooms_number') }}" />
                                    <x-input-error :messages="$errors->get('occupied_rooms_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="filed_classes_number" class="w-full mb-1"
                                        :value="__('word.filed_classes_number')" />
                                    <x-text-input id="filed_classes_number" class="w-full block mt-1" type="text"
                                        name="filed_classes_number" value="{{ old('filed_classes_number') }}" />
                                    <x-input-error :messages="$errors->get('filed_classes_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="desks_number" class="w-full mb-1" :value="__('word.desks_number')" />
                                    <x-text-input id="desks_number" class="w-full block mt-1" type="text"
                                        name="desks_number" value="{{ old('desks_number') }}" />
                                    <x-input-error :messages="$errors->get('desks_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_there_airconditions" class="w-full mb-1"
                                        :value="__('word.is_there_airconditions')" />
                                    <select id="is_there_airconditions" class="w-full block mt-1 "
                                        name="is_there_airconditions">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_there_airconditions') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_there_airconditions')" class="w-full mt-2" />
                                </div>
                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_special_education" class="w-full mb-1"
                                        :value="__('word.is_special_education')" />
                                    <select id="is_special_education" class="w-full block mt-1 "
                                        name="is_special_education">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_special_education') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_special_education')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_computer_available" class="w-full mb-1"
                                        :value="__('word.is_computer_available')" />
                                    <select id="is_computer_available" class="w-full block mt-1 "
                                        name="is_computer_available">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_computer_available') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_computer_available')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_teaching_computer" class="w-full mb-1"
                                        :value="__('word.is_teaching_computer')" />
                                    <select id="is_teaching_computer" class="w-full block mt-1 "
                                        name="is_teaching_computer">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_teaching_computer') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_teaching_computer')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_teaching_other_languages" class="w-full mb-1"
                                        :value="__('word.is_teaching_other_languages')" />
                                    <select id="is_teaching_other_languages" class="w-full block mt-1 "
                                        name="is_teaching_other_languages">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_teaching_other_languages') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_teaching_other_languages')" class="w-full mt-2" />
                                </div>

                            </div>

                            <div class="flex">

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_electronic_classes" class="w-full mb-1"
                                        :value="__('word.is_electronic_classes')" />
                                    <select id="is_electronic_classes" class="w-full block mt-1 "
                                        name="is_electronic_classes">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_electronic_classes') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_electronic_classes')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="classrooms_number" class="w-full mb-1" :value="__('word.classrooms_number')" />
                                    <x-text-input id="classrooms_number" class="w-full block mt-1" type="text"
                                        name="classrooms_number" value="{{ old('classrooms_number') }}" />
                                    <x-input-error :messages="$errors->get('classrooms_number')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="halls_count" class="w-full mb-1" :value="__('word.halls_count')" />
                                    <x-text-input id="halls_count" class="w-full block mt-1" type="text"
                                        name="halls_count" value="{{ old('halls_count') }}" />
                                    <x-input-error :messages="$errors->get('halls_count')" class="w-full mt-2" />
                                </div>

                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="is_predicated" class="w-full mb-1" :value="__('word.is_predicated')" />
                                    <select id="is_predicated" class="w-full block mt-1 " name="is_predicated">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ old('is_predicated') == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach

                                    </select>
                                    <x-input-error :messages="$errors->get('is_predicated')" class="w-full mt-2" />
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
        $("#mp").show();
        $("#fp").hide();

        $(document).ready(function() {

            toggleFieldsst();

            $("#is_main_school").change(function() {
                toggleFieldsst();
            });

            $("#school_gender_id").change(function() {
                toggleFieldsnc();
                toggleFieldsci();
            });

        });

        function toggleFieldsnc() {
            if ($("#school_gender_id").val() == 1 || $("#school_gender_id").val() == 3)
                $("#mp").show();

            else
                $("#mp").hide();

        }

        function toggleFieldsci() {
            if ($("#school_gender_id").val() == 2 || $("#school_gender_id").val() == 3)
                $("#fp").show();
            else
                $("#fp").hide();

        }


        function toggleFieldsst() {
            if ($("#is_main_school").val() == 1)
                $("#gs").hide();
            else
                $("#gs").show();

        }

        //prevent ENTER KEY from submiing the form
        $(':input').keypress(function(e) {
            var code = e.keyCode || e.which;
            if (code == 13)
                return false;
        });
    </script>


</x-app-layout>
