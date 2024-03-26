<table class="table table-striped">
    <thead>
        <th scope="col" width="70%">
            {{ __('word.contract_type') }}
        </th>
        <th scope="col" width="30%">

            <div style="text-align: left">
                <form action="{{ route('tables.view') }}" method="post">
                    @csrf
                    <input type="hidden" name="table_name" value="contract_type">
                    <button type="submit" class="btn btn-info w-25 text-dark ">{{ __('word.edit') }}</button>
                </form>
            </div>
        </th>
    </thead>
</table>
<table class="table table-striped">
    <thead>

        <th scope="col" width="5%"></th>
        <th scope="col" width="20%" class="text-center">{{ __('word.Fixed_allowances_amount') }}</th>

        <th scope="col" width="20%" class="text-center">{{ __('word.retirement_amount') }}</th>

        <th scope="col" width="20%" class="text-center">{{ __('word.Social_Welfare_Fund_amount') }}</th>

        <th scope="col" width="20%" class="text-center">{{ __('word.support_fund_amount') }}</th>

    </thead>
</table>
<table class="table table-striped">
    <thead>

        <th scope="col" width="10%">{{ __('word.name') }}</th>
        <th scope="col" width="10%">{{ __('word.amount_type') }}</th>
        <th scope="col" width="10%">{{ __('word.amount') }}</th>
        <th scope="col" width="10%">{{ __('word.amount_type') }}</th>
        <th scope="col" width="10%">{{ __('word.amount') }}</th>
        <th scope="col" width="10%">{{ __('word.amount_type') }}</th>
        <th scope="col" width="10%">{{ __('word.amount') }}</th>
        <th scope="col" width="10%">{{ __('word.amount_type') }}</th>
        <th scope="col" width="10%">{{ __('word.amount') }}</th>
    </thead>

    @foreach ($contract_types as $contract_type)
        <tr>

            <td>{{ $contract_type->contract_type }}</td>
            <td>{{ $contract_type->get_amount_type->amount_type }}</td>
            @if ($contract_type->get_amount_type->amount_type == 'نسبة')
                <td>{{ $contract_type->amount * 100 }}%</td>
            @else
                <td>{{ $contract_type->amount }}</td>
            @endif

            <td>{{ $contract_type->get_amount_type_retirement->amount_type }}</td>
            @if ($contract_type->get_amount_type_retirement->amount_type == 'نسبة')
                <td>{{ $contract_type->amount_retirement * 100 }}%</td>
            @else
                <td>{{ $contract_type->amount_retirement }}</td>
            @endif

            <td>{{ $contract_type->get_amount_type_Social_Welfare_Fund->amount_type }}</td>
            @if ($contract_type->get_amount_type_Social_Welfare_Fund->amount_type == 'نسبة')
                <td>{{ $contract_type->amount_Social_Welfare_Fund * 100 }}%</td>
            @else
                <td>{{ $contract_type->amount_Social_Welfare_Fund }}</td>
            @endif

            <td>{{ $contract_type->get_amount_type_support_fund->amount_type }}</td>
            @if ($contract_type->get_amount_type_support_fund->amount_type == 'نسبة')
                <td>{{ $contract_type->amount_support_fund * 100 }}%</td>
            @else
                <td>{{ $contract_type->amount_support_fund }}</td>
            @endif

        </tr>
    @endforeach
</table>
