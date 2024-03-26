<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')

    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @elseif ($message = Session::get('failure'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="flex">

                            <div class="p-6 mx-2 my-2 w-full">
                                <x-input-label for="facility_id" class="w-full mb-1" :value="__('word.facility_name')" />
                                <select id="facility_id" class="w-full block mt-1 " name="facility_id">
                                    <option value="">
                                        {{ __('word.show_all') }}
                                    </option>
                                    @foreach ($facilitys as $facility)
                                        <option value="{{ $facility->id }}">
                                            {{ $facility->name }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="p-6 mx-2 my-2 w-full">
                                <x-input-label class="w-full mb-1" :value="__('word.action')" />
                                <a href="{{ route('payroll.add_all') }}"
                                    class="w-full block my-1 mx-1 view btn btn-danger">
                                    {{ __('word.payroll_add_all') }}
                                </a>

                            </div>
                        </div>
                        <div>

                            <table class="table table-bordered data-table">
                                <thead>
                                    <th scope="col" width="3%" class="text-center"></th>
                                    <th scope="col" width="10%" class="text-center">{{ __('word.card_id') }}
                                    </th>
                                    <th scope="col" width="12%" class="text-center">{{ __('word.full_name') }}
                                    </th>
                                    <th scope="col" width="10%" class="text-center">
                                        {{ __('word.bank_account_id') }}
                                    </th>
                                    <th scope="col" width="13%" class="text-center">
                                        {{ __('word.facility_name') }}
                                    </th>
                                    <th scope="col" width="10%" class="text-center">
                                        {{ __('word.nominal_salary') }}
                                    </th>
                                    <th scope="col" width="10%" class="text-center">
                                        {{ __('word.total_salary_amount') }}
                                    </th>
                                    <th scope="col" width="15%" class="text-center">{{ __('word.action') }}</th>
                                    <th scope="col" width="15%" class="text-center">{{ __('word.payroll_note') }}
                                    </th>
                                    <th scope="col" width="0%" class="text-center">{{ __('word.facility_id') }}
                                    </th>
                                </thead>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {

            var employees_list_table = $('.data-table').DataTable({
                    language: {
                        url: "{{ url('/') . '/../lang/' . __(LaravelLocalization::getCurrentLocale()) . '/datatable.json' }}"
                    },
                    processing: true,
                    serverSide: true,
                    paging: true,
                    ajax: "{{ route('payroll.employees_list') }}",
                    columns: [{
                            data: 'color',
                            name: 'color',
                            orderable: false,
                            searchable: false,
                        },
                        {
                            data: 'card_id',
                            name: 'card_id'
                        },
                        {
                            data: 'full_name',
                            name: 'full_name',
                            class: 'bg-font-medium text-lg text-gray-700',
                        },
                        {
                            data: 'bank_account',
                            name: 'bank_account'
                        },
                        {
                            data: 'get_payroll_facility.name',
                            name: 'get_payroll_facility.name',
                            class: 'bg-font-medium text-lg text-gray-700',
                        },
                        {
                            data: 'nominal_salary',
                            name: 'nominal_salary'
                        },
                        {
                            data: 'total_salary',
                            name: 'total_salary'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                        },
                        {
                            data: 'note',
                            name: 'note',
                            orderable: false,
                            searchable: false,
                        },
                        {
                            data: 'salary_address_id',
                            name: 'salary_address_id',
                            orderable: false,

                        },
                    ]
                }).order([2, 'asc'])
                .column(9).visible(false)
                .column(9).search($('#facility_id').val());


            $('#facility_id').on('change', function() {
                var selectedValue = $(this).val();
                employees_list_table.column(9).search(selectedValue).draw();
            });
        });
    </script>


</x-app-layout>
