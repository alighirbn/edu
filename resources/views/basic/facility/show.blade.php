<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        <div class="d-flex justify-content-around ">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="counting_number" class="w-full mb-1" :value="__('word.Counting_number')" />
                                <p id="counting_number" class="w-full h-9 block mt-1" type="text"
                                    name="counting_number">
                                    {{ $facility->counting_number }}
                                </p>
                            </div>


                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="name" class="w-full mb-1" :value="__('word.School_name')" />
                                <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
                                    {{ $facility->name }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_main_school" class="w-full mb-1" :value="__('word.Is_main_school')" />
                                @if ($facility->is_main_school == 2)
                                    <p id="is_main_school" class="w-full h-9 block mt-1" type="text"
                                        name="is_main_school">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_main_school" class="w-full h-9 block mt-1" type="text"
                                        name="is_main_school">
                                        لا
                                    </p>
                                @endif
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="guest_school" class="w-full mb-1" :value="__('word.Guest_school')" />
                                <p id="guest_school" class="w-full h-9 block mt-1" type="text" name="guest_school">
                                    {{ $facility->guest_school }}
                                </p>
                            </div>


                        </div>


                    </div>

                    <div>
                        <div class="d-flex justify-content-around ">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="province" class="w-full mb-1" :value="__('word.Province')" />
                                <p id="province" class="w-full h-9 block mt-1" type="text" name="province">
                                    {{ $facility->get_province->province }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="main_section_id" class="w-full mb-1" :value="__('word.Main_section')" />
                                <p id="main_section_id" class="w-full h-9 block mt-1" type="text"
                                    name="main_section_id">
                                    {{ $facility->get_main_section_id->main_sections }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="established_year" class="w-full mb-1" :value="__('word.established_year')" />
                                <p id="established_year" class="w-full h-9 block mt-1" type="text"
                                    name="established_year">
                                    {{ $facility->established_year }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-around ">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_property_id" class="w-full mb-1" :value="__('word.School_property')" />
                                <p id="school_property_id" class="w-full h-9 block mt-1" type="text"
                                    name="school_property_id">
                                    {{ $facility->get_school_property_id->school_properties }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="duality_id" class="w-full mb-1" :value="__('word.Duality')" />
                                <p id="duality_id" class="w-full h-9 block mt-1" type="text" name="duality_id">
                                    {{ $facility->get_duality_id->dualities }}
                                </p>
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_time_id" class="w-full mb-1" :value="__('word.School_time')" />
                                <p id="school_time_id" class="w-full h-9 block mt-1" type="text"
                                    name="school_time_id">
                                    {{ $facility->get_school_time_id->school_times }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_invironment_id" class="w-full mb-1" :value="__('word.School_invironment')" />
                                <p id="school_invironment_id" class="w-full h-9 block mt-1" type="text"
                                    name="school_invironment_id">
                                    {{ $facility->get_school_invironment_id->school_invironments }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_gender_id" class="w-full mb-1" :value="__('word.School_gender')" />
                                <p id="school_gender_id" class="w-full h-9 block mt-1" type="text"
                                    name="school_gender_id">
                                    {{ $facility->get_school_gender_id->school_genders }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_stage_id" class="w-full mb-1" :value="__('word.School_stage')" />
                                <p id="school_stage_id" class="w-full h-9 block mt-1" type="text"
                                    name="school_stage_id">
                                    {{ $facility->get_school_stage_id->school_stages }}
                                </p>
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-around ">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="personale_design_number" class="w-full mb-1" :value="__('word.personale_design_number')" />
                                <p id="personale_design_number" class="w-full h-9 block mt-1" type="text"
                                    name="personale_design_number">
                                    {{ $facility->personale_design_number }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="male_pupils_number" class="w-full mb-1" :value="__('word.male_pupils_number')" />
                                <p id="male_pupils_number" class="w-full h-9 block mt-1" type="text"
                                    name="male_pupils_number">
                                    {{ $facility->male_pupils_number }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="female_pupils_number" class="w-full mb-1" :value="__('word.female_pupils_number')" />
                                <p id="female_pupils_number" class="w-full h-9 block mt-1" type="text"
                                    name="female_pupils_number">
                                    {{ $facility->female_pupils_number }}
                                </p>
                            </div>
                        </div>
                    </div>


                    <div>
                        <div class="d-flex justify-content-around ">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="occupied_rooms_number" class="w-full mb-1" :value="__('word.occupied_rooms_number')" />
                                <p id="occupied_rooms_number" class="w-full h-9 block mt-1" type="text"
                                    name="occupied_rooms_number">
                                    {{ $facility->occupied_rooms_number }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="filed_classes_number" class="w-full mb-1" :value="__('word.filed_classes_number')" />
                                <p id="filed_classes_number" class="w-full h-9 block mt-1" type="text"
                                    name="filed_classes_number">
                                    {{ $facility->filed_classes_number }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="desks_number" class="w-full mb-1" :value="__('word.desks_number')" />
                                <p id="desks_number" class="w-full h-9 block mt-1" type="text"
                                    name="desks_number">
                                    {{ $facility->desks_number }}
                                </p>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_there_airconditions" class="w-full mb-1" :value="__('word.is_there_airconditions')" />
                                @if ($facility->is_there_airconditions == 2)
                                    <p id="is_there_airconditions" class="w-full h-9 block mt-1" type="text"
                                        name="is_there_airconditions">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_there_airconditions" class="w-full h-9 block mt-1" type="text"
                                        name="is_there_airconditions">
                                        لا
                                    </p>
                                @endif
                            </div>

                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-around ">

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_special_education" class="w-full mb-1" :value="__('word.is_special_education')" />
                                @if ($facility->is_special_education == 2)
                                    <p id="is_special_education" class="w-full h-9 block mt-1" type="text"
                                        name="is_special_education">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_special_education" class="w-full h-9 block mt-1" type="text"
                                        name="is_special_education">
                                        لا
                                    </p>
                                @endif
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_computer_available" class="w-full mb-1" :value="__('word.is_computer_available')" />
                                @if ($facility->is_computer_available == 2)
                                    <p id="is_computer_available" class="w-full h-9 block mt-1" type="text"
                                        name="is_computer_available">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_computer_available" class="w-full h-9 block mt-1" type="text"
                                        name="is_computer_available">
                                        لا
                                    </p>
                                @endif
                            </div>


                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_teaching_computer" class="w-full mb-1" :value="__('word.is_teaching_computer')" />
                                @if ($facility->is_teaching_computer == 2)
                                    <p id="is_teaching_computer" class="w-full h-9 block mt-1" type="text"
                                        name="is_teaching_computer">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_teaching_computer" class="w-full h-9 block mt-1" type="text"
                                        name="is_teaching_computer">
                                        لا
                                    </p>
                                @endif
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="is_teaching_other_languages" class="w-full mb-1"
                                    :value="__('word.is_teaching_other_languages')" />
                                @if ($facility->is_teaching_other_languages == 2)
                                    <p id="is_teaching_other_languages" class="w-full h-9 block mt-1" type="text"
                                        name="is_teaching_other_languages">
                                        نعم
                                    </p>
                                @else
                                    <p id="is_teaching_other_languages" class="w-full h-9 block mt-1" type="text"
                                        name="is_teaching_other_languages">
                                        لا
                                    </p>
                                @endif
                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-around ">

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="is_electronic_classes" class="w-full mb-1" :value="__('word.is_electronic_classes')" />
                            @if ($facility->is_electronic_classes == 2)
                                <p id="is_electronic_classes" class="w-full h-9 block mt-1" type="text"
                                    name="is_electronic_classes">
                                    نعم
                                </p>
                            @else
                                <p id="is_electronic_classes" class="w-full h-9 block mt-1" type="text"
                                    name="is_electronic_classes">
                                    لا
                                </p>
                            @endif
                        </div>

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="classrooms_number" class="w-full mb-1" :value="__('word.classrooms_number')" />
                            <p id="classrooms_number" class="w-full h-9 block mt-1" type="text"
                                name="classrooms_number">
                                {{ $facility->classrooms_number }}
                            </p>
                        </div>

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="halls_count" class="w-full mb-1" :value="__('word.halls_count')" />
                            <p id="halls_count" class="w-full h-9 block mt-1" type="text" name="halls_count">
                                {{ $facility->halls_count }}
                            </p>
                        </div>

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="is_predicated" class="w-full mb-1" :value="__('word.is_predicated')" />
                            @if ($facility->is_predicated == 2)
                                <p id="is_predicated" class="w-full h-9 block mt-1" type="text"
                                    name="is_predicated">
                                    نعم
                                </p>
                            @else
                                <p id="is_predicated" class="w-full h-9 block mt-1" type="text"
                                    name="is_predicated">
                                    لا
                                </p>
                            @endif
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
