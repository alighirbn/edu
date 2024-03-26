<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.agricultural_risk') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="agricultural_risk">
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

    @foreach ($agricultural_risks as $agricultural_risk)
        <tr>

            <td>{{ $agricultural_risk->agricultural_risk }}</td>
            <td>{{ $agricultural_risk->get_amount_type->amount_type }}</td>
            @if ($agricultural_risk->get_amount_type->amount_type == 'نسبة')
                <td>{{ $agricultural_risk->amount * 100 }}%</td>
            @else
                <td>{{ $agricultural_risk->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
