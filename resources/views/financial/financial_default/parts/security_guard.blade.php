<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.security_guard') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="security_guard">
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

    @foreach ($security_guards as $security_guard)
        <tr>

            <td>{{ $security_guard->security_guard }}</td>
            <td>{{ $security_guard->get_amount_type->amount_type }}</td>
            @if ($security_guard->get_amount_type->amount_type == 'نسبة')
                <td>{{ $security_guard->amount * 100 }}%</td>
            @else
                <td>{{ $security_guard->amount }}</td>
            @endif

        </tr>
    @endforeach
</table>
