<x-app-layout>



    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900  " style="text-align: center">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <h2 class="font-semibold  text-l text-gray-800 leading-tight mx-4 my-8 w-full">
                        {{ __('word.edit') . ' : ' . __('word.' . $tableName) . '->' . $tableName }}
                    </h2>
                    <div style="overflow-x:auto;">
                        <table class="table table-striped ">
                            <thead>
                                @foreach ($headers as $header)
                                    @if (!in_array($header, $removeItems))
                                        <th scope="col" class="w-40">
                                            {{ __('word.' . $header) }}</th>
                                    @endif
                                @endforeach
                                <th scope="col" class="w-40">
                                    {{ __('word.action') }}</th>
                            </thead>
                            <tbody>
                                @foreach ($tableValues as $tableValue)
                                    <tr>
                                        @foreach ($headers as $header)
                                            @if (!in_array($header, $removeItems))
                                                <td>
                                                    @include('basic.tables.parts.edit')
                                                </td>
                                            @endif
                                        @endforeach
                                        <td>
                                            @include('basic.tables.parts.delete')
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
