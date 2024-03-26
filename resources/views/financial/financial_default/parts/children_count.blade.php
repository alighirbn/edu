<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.children_count') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="children_count">
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

    @foreach ($children_counts as $children_count)
        <tr>

            <td>{{ $children_count->children_count }}</td>
            <td>{{ $children_count->get_amount_type->amount_type }}</td>
            @if ($children_count->get_amount_type->amount_type == 'نسبة')
                <td>{{ $children_count->amount * 100 }}%</td>
            @else
                <td>{{ $children_count->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
