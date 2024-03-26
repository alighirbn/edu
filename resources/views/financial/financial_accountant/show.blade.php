<x-app-layout>

    <x-slot name="header">
        @include('financial.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="d-flex justify-content-around ">

                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="name" class="w-full mb-1" :value="__('word.financial_accountant_name')" />
                            <p id="name" class="w-full h-9 block mt-1" type="text" name="name">
                                {{ $financial_accountant->name }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="status" class="w-full mb-1" :value="__('word.financial_accountant_status')" />
                            <p id="status" class="w-full h-9 block mt-1" type="text" name="status">
                                {{ $financial_accountant->status }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="department_id" class="w-full mb-1" :value="__('word.department_id')" />
                            <p id="department_id" class="w-full h-9 block mt-1" type="text" name="department_id">
                                {{ $financial_accountant->get_department->department }}
                            </p>
                        </div>
                        <div class=" mx-4 my-4 w-full">
                            <x-input-label for="user_id" class="w-full mb-1" :value="__('word.financial_accountant_user_id')" />
                            <p id="user_id" class="w-full h-9 block mt-1" type="text" name="user_id">
                                {{ $financial_accountant->get_user->name }}
                            </p>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <th scope="col" width="10%">{{ __('word.name') }}</th>
                            <th scope="col" width="10%">{{ __('word.facility_type') }}</th>
                            <th scope="col" width="10%">{{ __('word.facility_parent') }}</th>
                        </thead>

                        @foreach ($facilitys as $facility)
                            <tr>
                                <td>{{ $facility->name }}</td>
                                <td>{{ $facility->get_facility_type_id->facility_types }}</td>
                                <td>{{ $facility->get_facility_parent_id->name }}</td>

                            </tr>
                        @endforeach
                    </table>
                    <div class="flex">
                        @if (isset($financial_accountant->user_id_create))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_create') }} {{ $financial_accountant->get_user_create->name }}
                                {{ $financial_accountant->created_at }}
                            </div>
                        @endif

                        @if (isset($financial_accountant->user_id_update))
                            <div class="mx-4 my-4 ">
                                {{ __('word.user_update') }} {{ $financial_accountant->get_user_update->name }}
                                {{ $financial_accountant->updated_at }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
