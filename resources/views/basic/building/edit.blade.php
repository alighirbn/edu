<x-app-layout>

    <x-slot name="header">
        @include('basic.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="post" action="{{ route('building.update', $building->url_address) }}">
                            @csrf
                            @method('patch')
                            <input type="hidden" id="id" name="id" value="{{ $building->id }}">
                            <input type="hidden" id="url_address" name="url_address"
                                value="{{ $building->url_address }}">

                            <h1 class=" font-semibold underline text-l text-gray-900 leading-tight mx-4 my-8 w-full">
                                {{ __('word.building_info') }}
                            </h1>

                            <div class="flex ">
                                <div class=" mx-4 my-4 w-full ">
                                    <x-input-label for="building_reference" class="w-full mb-1" :value="__('word.building_reference')" />
                                    <x-text-input id="building_reference" class="w-full block mt-1" type="text"
                                        name="building_reference"
                                        value="{{ old('building_reference') ?? $building->building_reference }}" />
                                    <x-input-error :messages="$errors->get('building_reference')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="building_status_id" class="w-full mb-1" :value="__('word.building_status_id')" />
                                    <select id="building_status_id" class="w-full block mt-1 "
                                        name="building_status_id">
                                        @foreach ($building_statuses as $building_status)
                                            <option value="{{ $building_status->id }}"
                                                {{ (old('building_status_id') ?? $building->building_status_id) == $building_status->id ? 'selected' : '' }}>
                                                {{ $building_status->building_status }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('building_status_id')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="building_type_id" class="w-full mb-1" :value="__('word.building_type_id')" />
                                    <select id="building_type_id" class="w-full block mt-1 " name="building_type_id">
                                        @foreach ($building_types as $building_type)
                                            <option value="{{ $building_type->id }}"
                                                {{ (old('building_type_id') ?? $building->building_type_id) == $building_type->id ? 'selected' : '' }}>
                                                {{ $building_type->building_type }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('building_type_id')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold underline text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                                {{ __('word.building_address_full') }}
                            </h2>

                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="city" class="w-full mb-1" :value="__('word.city')" />
                                    <x-text-input id="city" class="w-full block mt-1" type="text" name="city"
                                        value="{{ old('city') ?? $building->city }}" />
                                    <x-input-error :messages="$errors->get('city')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="district" class="w-full mb-1" :value="__('word.district')" />
                                    <x-text-input id="district" class="w-full block mt-1" type="text" ame="district"
                                        value="{{ old('district') ?? $building->district }}" />
                                    <x-input-error :messages="$errors->get('district')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="quarter" class="w-full mb-1" :value="__('word.quarter')" />
                                    <x-text-input id="quarter" class="w-full block mt-1" type="text" name="quarter"
                                        value="{{ old('quarter') ?? $building->quarter }}" />
                                    <x-input-error :messages="$errors->get('quarter')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="latitude" class="w-full mb-1" :value="__('word.latitude')" />
                                    <x-text-input id="latitude" class="w-full block mt-1" type="text"
                                        name="latitude" value="{{ old('latitude') ?? $building->latitude }}" />
                                    <x-input-error :messages="$errors->get('latitude')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="longitude" class="w-full mb-1" :value="__('word.longitude')" />
                                    <x-text-input id="longitude" class="w-full block mt-1" type="text"
                                        name="longitude" value="{{ old('longitude') ?? $building->longitude }}" />
                                    <x-input-error :messages="$errors->get('longitude')" class="w-full mt-2" />
                                </div>
                            </div>


                            <h2 class="font-semibold underline text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                                {{ __('word.additional_info') }}
                            </h2>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="class_count" class="w-full mb-1" :value="__('word.class_count')" />
                                    <x-text-input id="class_count" class="w-full block mt-1" type="number"
                                        name="class_count" value="{{ $building->class_count }}" />
                                    <x-input-error :messages="$errors->get('class_count')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="hall_count" class="w-full mb-1" :value="__('word.hall_count')" />
                                    <x-text-input id="hall_count" class="w-full block mt-1" type="number"
                                        name="hall_count" value="{{ $building->hall_count }}" />
                                    <x-input-error :messages="$errors->get('hall_count')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="floor_count" class="w-full mb-1" :value="__('word.floor_count')" />
                                    <x-text-input id="floor_count" class="w-full block mt-1" type="number"
                                        name="floor_count" value="{{ $building->floor_count }}" />
                                    <x-input-error :messages="$errors->get('floor_count')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="sanitary_units_count" class="w-full mb-1"
                                        :value="__('word.sanitary_units_count')" />
                                    <x-text-input id="sanitary_units_count" class="w-full block mt-1" type="number"
                                        name="sanitary_units_count" value=" {{ $building->sanitary_units_count }}" />
                                    <x-input-error :messages="$errors->get('sanitary_units_count')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="lab_count" class="w-full mb-1" :value="__('word.lab_count')" />
                                    <x-text-input id="lab_count" class="w-full block mt-1" type="number"
                                        name="lab_count" value="{{ $building->lab_count }}" />
                                    <x-input-error :messages="$errors->get('lab_count')" class="w-full mt-2" />
                                </div>
                            </div>
                            <div class="flex">
                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_length" class="w-full mb-1" :value="__('word.school_length')" />
                                    <x-text-input id="school_length" class="w-full block mt-1" type="number"
                                        name="school_length"
                                        value="{{ old('school_length') ?? $building->school_length }}" />
                                    <x-input-error :messages="$errors->get('school_length')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="school_width" class="w-full mb-1" :value="__('word.school_width')" />
                                    <x-text-input id="school_width" class="w-full block mt-1" type="number"
                                        name="school_width"
                                        value="{{ old('school_width') ?? $building->school_width }}" />
                                    <x-input-error :messages="$errors->get('school_width')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="building_area" class="w-full mb-1" :value="__('word.building_area')" />
                                    <x-text-input id="building_area" class="w-full block mt-1" type="number"
                                        name="building_area"
                                        value=" {{ old('building_area') ?? $building->building_area }}" />
                                    <x-input-error :messages="$errors->get('building_area')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-full">
                                    <x-input-label for="building_year" class="w-full mb-1" :value="__('word.building_year')" />
                                    <x-text-input id="building_year" class="w-full block mt-1" type="number"
                                        name="building_year"
                                        value="{{ old('building_year') ?? $building->building_year }}" />
                                    <x-input-error :messages="$errors->get('building_year')" class="w-full mt-2" />
                                </div>
                            </div>


                            <div class="flex">
                                <div class=" mx-4 my-4 w-25">
                                    <x-input-label for="is_extend_area" class="w-full mb-1" :value="__('word.is_extend_area')" />
                                    <select id="is_extend_area" class="w-full block mt-1 " name="is_extend_area">
                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ (old('is_extend_area') ?? $building->is_extend_area) == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('is_extend_area')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-25">
                                    <x-input-label for="is_sport_area" class="w-full mb-1" :value="__('word.is_sport_area')" />
                                    <select id="is_sport_area" class="w-full block mt-1 "name="is_sport_area">

                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ (old('is_sport_area') ?? $building->is_sport_area) == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('is_sport_area')" class="w-full mt-2" />
                                </div>


                                <div class=" mx-4 my-4 w-25">
                                    <x-input-label for="is_garden_area" class="w-full mb-1" :value="__('word.is_garden_area')" />
                                    <select id="is_garden_area" class="w-full block mt-1 "name="is_garden_area">
                                        @foreach ($yesnos as $yesno)
                                            <option value="{{ $yesno->id }}"
                                                {{ (old('is_garden_area') ?? $building->is_garden_area) == $yesno->id ? 'selected' : '' }}>
                                                {{ $yesno->value }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('is_garden_area')" class="w-full mt-2" />
                                </div>
                            </div>

                            <div class=" mx-4 my-4 w-full">
                                <x-primary-button x-primary-button class="ml-4">
                                    {{ __('word.save') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
