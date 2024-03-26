<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.marital_status') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="marital_status">
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

    @foreach ($marital_statuss as $marital_status)
        <tr>

            <td>{{ $marital_status->marital_status }}</td>
            <td>{{ $marital_status->get_amount_type->amount_type }}</td>
            @if ($marital_status->get_amount_type->amount_type == 'نسبة')
                <td>{{ $marital_status->amount * 100 }}%</td>
            @else
                <td>{{ $marital_status->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
