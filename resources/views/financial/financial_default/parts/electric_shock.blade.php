<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.electric_shock') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="electric_shock">
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

    @foreach ($electric_shocks as $electric_shock)
        <tr>

            <td>{{ $electric_shock->electric_shock }}</td>
            <td>{{ $electric_shock->get_amount_type->amount_type }}</td>
            @if ($electric_shock->get_amount_type->amount_type == 'نسبة')
                <td>{{ $electric_shock->amount * 100 }}%</td>
            @else
                <td>{{ $electric_shock->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
