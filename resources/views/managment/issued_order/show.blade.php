<x-app-layout>

    <x-slot name="header">
        @include('role.nav.navigation')
    </x-slot>


    <div class="py-6">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="bg-light p-4 rounded">
                        
                        <div class="lead">

                        </div>

                        <div class="container mt-4">

                            <h3>{{ __('word.permission') }}</h3>

                            <table class="table table-striped">
                                <thead>
                                    <th scope="col" width="15%">{{ __('word.name') }}</th>
                                    <th scope="col" width="15%">{{ __('word.guard') }}</th>
                                    <th scope="col" width="15%">{{ __('word.guard') }}</th>
                                    <th scope="col" width="20%">{{ __('word.guard') }}</th>
                                    <th scope="col" width="25%">{{ __('word.guard') }}</th>
                                </thead>

                                @foreach ($issued_orders as $issued_order)
                                    <tr>
                                        <td>{{ $issued_order->order_number }}</td>
                                        <td>{{ $issued_order->order_date }}</td>
                                        <td>{{ $issued_order->issued_orderable->get_order_type->order_type }}</td>
                                        <td>{{ $issued_order->issued_orderable->get_department->department }} /{{ $issued_order->issued_orderable->get_main_facility->name }} / {{ $issued_order->issued_orderable->get_sub_facility->name }}</td>
                                        <td>{{ $issued_order->issued_orderable->order_text }}</td>
                                    </tr>
                                @endforeach

                                
                            </table>
                            {{ $issued_orders->links() }}
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>

</x-app-layout>
