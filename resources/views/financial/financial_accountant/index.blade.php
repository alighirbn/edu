<x-app-layout>

    <x-slot name="header">

        @include('financial.nav.navigation')

    </x-slot>

    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="text-align: left">
                        <x-nav-link :href="route('financial_accountant.create')" :active="request()->routeIs('financial_accountant.create')">
                            <x-primary-button>
                                {{ __('word.add') }}
                            </x-primary-button>
                        </x-nav-link>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div style="overflow-x: hidden ;height:500px">
                        <table>
                            {!! $dataTable->table() !!}
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        $.fn.dataTable.ext.errMode = 'none';
    </script>



    {!! $dataTable->scripts() !!}

</x-app-layout>
