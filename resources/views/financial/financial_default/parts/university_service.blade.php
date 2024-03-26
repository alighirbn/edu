<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.university_service') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="university_service">
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

    @foreach ($university_services as $university_service)
        <tr>

            <td>{{ $university_service->university_service }}</td>
            <td>{{ $university_service->get_amount_type->amount_type }}</td>
            @if ($university_service->get_amount_type->amount_type == 'نسبة')
                <td>{{ $university_service->amount * 100 }}%</td>
            @else
                <td>{{ $university_service->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
