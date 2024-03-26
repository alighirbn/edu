<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.night_watchman') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="night_watchman">
                    <button type="submit" class="btn btn-info w-25 text-dark ">{{ __('word.edit') }}</button>
                </form>
            </div>
        </th>
    </thead>
</table>
<table class="table table-striped">
    <thead>

        <th scope="col" width="30%">{{ __('word.name') }}</th>
        <th scope="col" width="30%">{{ __('word.amount_type') }}</th>
        <th scope="col" width="30%">{{ __('word.amount') }}</th>
    </thead>

    @foreach ($night_watchmans as $night_watchman)
        <tr>

            <td>{{ $night_watchman->night_watchman }}</td>
            <td>{{ $night_watchman->get_amount_type->amount_type }}</td>
            @if ($night_watchman->get_amount_type->amount_type == 'نسبة')
                <td>{{ $night_watchman->amount * 100 }}%</td>
            @else
                <td>{{ $night_watchman->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
