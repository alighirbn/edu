<x-app-layout>

    <x-slot name="header">
        <style>
            @media print {

                /* page size and orientation and margin */
                @page {
                    size: A4 landscape;
                    margin: 0.5cm;
                }

                /* Hide every other element */
                body * {
                    visibility: hidden;
                }

                /* Then displaying print-container elements only */
                .print-container,
                .print-container * {
                    visibility: visible;
                }

                /* Adjusting the position to always start from top right */
                .print-container {
                    position: absolute;
                    right: 0;
                    top: 0;
                }
            }
        </style>
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="justify-content-around ">
                        <button id="print" onclick="window.print();"> {{ __('word.print') }} </button>
                        <div class="print-container">



                            <div class="flex">


                                <p id="facility_name" class="w-48 block mt-1 " type="text" name="facility_name">
                                    {{ __('word.name') }}
                                </p>
                                <p id="nominal_salary_total" class="w-48 block mt-1 " type="text"
                                    name="nominal_salary_total">
                                    {{ __('word.nominal_salary') }}
                                </p>
                                <p id="total_salary_amount" class="w-48 block mt-1 " type="text"
                                    name="total_salary_amount">
                                    {{ __('word.total_salary_amount') }}
                                </p>
                                <p id="transportation_allowances_amount" class="w-48 block mt-1 " type="text"
                                    name="transportation_allowances_amount">
                                    {{ __('word.transportation_allowances_amount') }}
                                </p>

                            </div>
                            @foreach ($payrolls as $payroll)
                                <div class="flex">


                                    <p id="facility_name" class="w-48 block mt-1 " type="number" name="facility_name">
                                        {{ $payroll->get_facility->name }}
                                    </p>
                                    <p id="nominal_salary_total" class="w-48 block mt-1 " type="number"
                                        name="nominal_salary_total">
                                        {{ $payroll->nominal_salary_total }}
                                    </p>
                                    <p id="total_salary_total" class="w-48 block mt-1 " type="number"
                                        name="total_salary_total">
                                        {{ $payroll->total_salary_total }}
                                    </p>
                                    <p id="transportation_allowances_total" class="w-48 block mt-1 " type="number"
                                        name="transportation_allowances_total">
                                        {{ $payroll->transportation_allowances_total }}
                                    </p>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

</x-app-layout>
