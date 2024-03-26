<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.driver_allowance') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="driver_allowance">
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

    @foreach ($driver_allowances as $driver_allowance)
        <tr>

            <td>{{ $driver_allowance->driver_allowance }}</td>
            <td>{{ $driver_allowance->get_amount_type->amount_type }}</td>
            @if ($driver_allowance->get_amount_type->amount_type == 'نسبة')
                <td>{{ $driver_allowance->amount * 100 }}%</td>
            @else
                <td>{{ $driver_allowance->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
