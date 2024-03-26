<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.danager_provision') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="danager_provision">
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

    @foreach ($danager_provisions as $danager_provision)
        <tr>

            <td>{{ $danager_provision->danager_provision }}</td>
            <td>{{ $danager_provision->get_amount_type->amount_type }}</td>
            @if ($danager_provision->get_amount_type->amount_type == 'نسبة')
                <td>{{ $danager_provision->amount * 100 }}%</td>
            @else
                <td>{{ $danager_provision->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
