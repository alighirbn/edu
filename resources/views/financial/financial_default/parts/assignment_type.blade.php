<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.assignment_type') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="assignment_type">
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

    @foreach ($assignment_types as $assignment_type)
        <tr>

            <td>{{ $assignment_type->assignment_type }}</td>
            <td>{{ $assignment_type->get_amount_type->amount_type }}</td>
            @if ($assignment_type->get_amount_type->amount_type == 'نسبة')
                <td>{{ $assignment_type->amount * 100 }}%</td>
            @else
                <td>{{ $assignment_type->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
