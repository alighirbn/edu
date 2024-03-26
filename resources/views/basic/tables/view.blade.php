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
                    <table dir="rtl" class="table text-center border-white">
                        <thead>
                            <tr>
                                <th class="wd-15p border-bottom-0 font-weight-bold"
                                    style="font-size: x-large; background-color: #e9e7e0"> {{ __('word.tables') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tables as $table)
                                <tr>
                                    <td>
                                        <form action="{{ route('tables.view') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="table_name" value="{{ $table->Tables_in_edu }}">
                                            <button type="submit"
                                                class="btn btn-info w-25 text-dark ">{{ __('word.' . $table->Tables_in_edu) }}</button>
                                        </form>

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
