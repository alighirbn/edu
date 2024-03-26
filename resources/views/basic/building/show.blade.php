<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <h1 class=" font-semibold underline text-l text-gray-900 leading-tight mx-4 my-8 w-full">
                            {{ __('word.building_info') }}
                        </h1>
                        <div class="flex ">
                            <div class=" mx-4 my-4 w-full ">
                                <x-input-label for="building_reference" class="w-full mb-1" :value="__('word.building_reference')" />
                                <p id="building_reference" class="w-full h-9 block mt-1" type="text"
                                    name="building_reference">
                                    {{ $building->building_reference }}
                            </div>

                            <div class=" mx-4 my-4 w-full ">
                                <x-input-label for="building_status_id" class="w-full mb-1" :value="__('word.building_status_id')" />
                                <p id="building_status_id" class="w-full h-9 block mt-1 " type="text"
                                    name="building_status_id">
                                    {{ $building->get_Building_Status->building_status }}
                            </div>

                            <div class=" mx-4 my-4 w-full ">
                                <x-input-label for="building_type_id" class="w-full mb-1" :value="__('word.building_type_id')" />
                                <p id="building_type_id" class="w-full h-9 block mt-1 " type="text"
                                    name="building_type_id">
                                    {{ $building->get_Building_Type->building_type }}
                            </div>

                        </div>

                        <h2 class="font-semibold underline text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                            {{ __('word.building_address_full') }}
                        </h2>

                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="city" class="w-full mb-1" :value="__('word.city')" />
                                <p id="city" class="w-full h-9 block mt-1 " type="text" name="city">
                                    {{ $building->city }}
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="district" class="w-full mb-1" :value="__('word.district')" />
                                <p id="district" class="w-full h-9 block mt-1 " type="text" name="district">
                                    {{ $building->district }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="quarter" class="w-full mb-1" :value="__('word.quarter')" />
                                <p id="quarter" class="w-full h-9 block mt-1 " type="text" name="quarter">
                                    {{ $building->quarter }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="latitude" class="w-full mb-1" :value="__('word.latitude')" />
                                <p id="latitude" class="w-full h-9 block mt-1 " type="text" name="latitude">
                                    {{ $building->latitude }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="longitude" class="w-full mb-1" :value="__('word.longitude')" />
                                <p id="longitude" class="w-full h-9 block mt-1 " type="text" name="longitude">
                                    {{ $building->longitude }}
                            </div>
                        </div>
                        <h2 class="font-semibold underline text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                            {{ __('word.additional_info') }}
                        </h2>
                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="class_count" class="w-full mb-1" :value="__('word.class_count')" />
                                <p id="class_count" class="w-full h-9 block mt-1 " type="number" name="class_count">
                                    {{ $building->class_count }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="hall_count" class="w-full mb-1" :value="__('word.hall_count')" />
                                <p id="hall_count" class="w-full h-9 block mt-1 " type="number" name="hall_count">
                                    {{ $building->hall_count }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="floor_count" class="w-full mb-1" :value="__('word.floor_count')" />
                                <p id="floor_count" class="w-full h-9 block mt-1 " type="number" name="floor_count">
                                    {{ $building->floor_count }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="sanitary_units_count" class="w-full mb-1" :value="__('word.sanitary_units_count')" />
                                <p id="sanitary_units_count" class="w-full h-9 block mt-1 " type="number"
                                    name="sanitary_units_count">
                                    {{ $building->sanitary_units_count }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="lab_count" class="w-full mb-1" :value="__('word.lab_count')" />
                                <p id="lab_count" class="w-full h-9 block mt-1 " type="number" name="lab_count">
                                    {{ $building->lab_count }}
                            </div>
                        </div>
                        <div class="flex">
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_length" class="w-full mb-1" :value="__('word.school_length')" />
                                <p id="school_length" class="w-full h-9 block mt-1 " type="number"
                                    name="school_length">
                                    {{ $building->school_length }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="school_width" class="w-full mb-1" :value="__('word.school_width')" />
                                <p id="school_width" class="w-full h-9 block mt-1 " type="number"
                                    name="school_width">
                                    {{ $building->school_width }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="building_area" class="w-full mb-1" :value="__('word.building_area')" />
                                <p id="building_area" class="w-full h-9 block mt-1 " type="number"
                                    name="building_area">
                                    {{ $building->building_area }}
                            </div>
                            <div class=" mx-4 my-4 w-full">
                                <x-input-label for="building_year" class="w-full mb-1" :value="__('word.building_year')" />
                                <p id="building_year" class="w-full h-9 block mt-1 " type="number"
                                    name="building_year">
                                    {{ $building->building_year }}
                            </div>
                        </div>
                        <div class="flex">
                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_extend_area" class="w-full mb-1" :value="__('word.is_extend_area')" />
                                <p id="is_extend_area_" class="w-full h-9 block mt-1 " type="text"
                                    name="is_extend_area">
                                    @if ($building->is_extend_area == 2)
                                        {{ __('نعم') }}
                                    @else
                                        {{ __('لا') }}
                                    @endif
                            </div>

                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_sport_area" class="w-full mb-1" :value="__('word.is_sport_area')" />
                                <p id="is_sport_area" class="w-full h-9 block mt-1 " type="text"
                                    name="is_sport_area">
                                    @if ($building->is_sport_area == 2)
                                        {{ __('نعم') }}
                                    @else
                                        {{ __('لا') }}
                                    @endif
                            </div>
                            <div class=" mx-4 my-4 w-25">
                                <x-input-label for="is_garden_area" class="w-full mb-1" :value="__('word.is_garden_area')" />
                                <p id="is_garden_area" class="w-full h-9 block mt-1 " type="text"
                                    name="is_garden_area">
                                    @if ($building->is_garden_area == 2)
                                        {{ __('نعم') }}
                                    @else
                                        {{ __('لا') }}
                                    @endif
                            </div>
                        </div>



                        <div class="flex">
                            @if (isset($building->user_id_create))
                                <div class="mx-4 my-4 ">
                                    {{ __('word.user_create') }} {{ $building->get_user_create->name }}
                                    {{ $building->created_at }}
                                </div>
                            @endif

                            @if (isset($building->user_id_update))
                                <div class="mx-4 my-4 ">
                                    {{ __('word.user_update') }} {{ $building->get_user_update->name }}
                                    {{ $building->updated_at }}
                                </div>
                            @endif
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
