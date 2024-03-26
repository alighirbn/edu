<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.scientific_title_stage') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="scientific_title_stage">
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

    @foreach ($scientific_title_stages as $scientific_title_stage)
        <tr>

            <td>{{ $scientific_title_stage->scientific_title_stage }}</td>
            <td>{{ $scientific_title_stage->get_amount_type->amount_type }}</td>
            @if ($scientific_title_stage->get_amount_type->amount_type == 'نسبة')
                <td>{{ $scientific_title_stage->amount * 100 }}%</td>
            @else
                <td>{{ $scientific_title_stage->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
