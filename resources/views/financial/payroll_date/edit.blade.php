<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        <form method="POST" action="{{ route('payroll_date.update', $payroll_date->url_address) }}">
                            @csrf
                            @method('patch')

                            <input type="hidden" id="id" name="id" value="{{ $payroll_date->id }}">
                            <input type="hidden" id="url_address" name="url_address"
                                value="{{ $payroll_date->url_address }}">
                            <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                                {{ __('word.month') }}
                            </h2>
                            <div class="flex">

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
                                    <x-input-label for="status" class="w-full mb-1" :value="__('word.payroll_status')" />
                                    <select name="status" id="select-beast" class="w-full block mt-1">
                                        <option value="active"
                                            {{ $payroll_date->status == 'active' ? 'selected' : '' }}>active
                                        </option>
                                        <option value="disabled"
                                            {{ $payroll_date->status == 'disabled' ? 'selected' : '' }}>
                                            disabled</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('status')" class="w-full mt-2" />
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

</x-app-layout>
