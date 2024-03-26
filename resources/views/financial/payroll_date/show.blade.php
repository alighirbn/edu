<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <h2 class="font-semibold text-l text-gray-800 leading-tight mx-4 my-4 w-full">
                        {{ __('word.month') }}
                    </h2>

                    <div class="flex">

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="payroll_year" class="w-full mb-1" :value="__('word.payroll_year')" />
                            <p id="payroll_year" class="w-full h-9 block mt-1" type="text" name="payroll_year">
                                {{ $payroll_date->payroll_year }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="payroll_month" class="w-full mb-1" :value="__('word.payroll_month')" />
                            <p id="payroll_month" class="w-full h-9 block mt-1" type="text" name="payroll_month">
                                {{ $payroll_date->payroll_month }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="status" class="w-full mb-1" :value="__('word.payroll_status')" />
                            <p id="status" class="w-full h-9 block mt-1" type="text" name="status">
                                {{ $payroll_date->status }}
                            </p>
                        </div>



                    </div>
                    <div class="flex">
                        @if (isset($payroll_date->user_id_create))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_create') }} {{ $payroll_date->get_user_create->name }}
                                {{ $payroll_date->created_at }}
                            </div>
                        @endif

                        @if (isset($payroll_date->user_id_update))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_update') }} {{ $payroll_date->get_user_update->name }}
                                {{ $payroll_date->updated_at }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
</x-app-layout>
