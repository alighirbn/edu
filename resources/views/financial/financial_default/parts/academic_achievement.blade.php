<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.academic_achievements') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="academic_achievements">
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

    @foreach ($academic_achievements as $academic_achievement)
        <tr>

            <td>{{ $academic_achievement->academic_achievement }}</td>
            <td>{{ $academic_achievement->get_amount_type->amount_type }}</td>
            @if ($academic_achievement->get_amount_type->amount_type == 'نسبة')
                <td>{{ $academic_achievement->amount * 100 }}%</td>
            @else
                <td>{{ $academic_achievement->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
