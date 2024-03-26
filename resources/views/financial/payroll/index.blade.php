<x-app-layout>

    <x-slot name="header">

        @include('financial.nav.navigation')

    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered data-table">
                        <thead>
                            <th scope="col" width="10%" class="text-center">{{ __('word.action') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.job_number') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">
                                {{ __('word.full_name') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.mother_full_name') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">
                                {{ __('word.bank_account_id') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">
                                {{ __('word.card_id') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.payroll_year') }}</th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.payroll_month') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.nominal_salary_amount') }}
                            </th>
                            <th scope="col" width="10%" class="text-center">{{ __('word.total_salary_amount') }}
                            </th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {

            var payroll_table = $('.data-table').DataTable({
                language: {
                    url: "{{ url('/') . '/../lang/' . __(LaravelLocalization::getCurrentLocale()) . '/datatable.json' }}"
                },
                processing: true,
                serverSide: true,
                paging: true,
                ajax: "{{ route('payroll.index') }}",
                columns: [{
                        data: 'action',
                        name: 'action'
                    },
                    {
                        data: 'get_employee.job_number',
                        name: 'get_employee.job_number'
                    },
                    {
                        data: 'get_employee.full_name',
                        name: 'get_employee.full_name'
                    },
                    {
                        data: 'get_employee.mother_full_name',
                        name: 'get_employee.mother_full_name'
                    },
                    {
                        data: 'get_employee.bank_account',
                        name: 'get_employee.bank_account'
                    },
                    {
                        data: 'get_employee.card_id',
                        name: 'get_employee.card_id'
                    },
                    {
                        data: 'payroll_year',
                        name: 'payroll_year'
                    },
                    {
                        data: 'payroll_month',
                        name: 'payroll_month'
                    },
                    {
                        data: 'nominal_salary_amount',
                        name: 'nominal_salary_amount'
                    },
                    {
                        data: 'total_salary_amount',
                        name: 'total_salary_amount'
                    },
                ]
            });
        });
    </script>


</x-app-layout>
