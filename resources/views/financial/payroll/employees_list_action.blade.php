<div class="flex ">
    @if (isset($row->get_last_payroll->financial_month_id))
        @if ($payroll_date->id == $row->get_last_payroll->financial_month_id)
            @can('payroll-update')
                <a href="{{ route('payroll.edit', $row->get_last_payroll->url_address) }}"
                    class="my-1 mx-1 view btn btn-warning">
                    {{ __('word.edit') }}
                </a>
            @endcan
        @else
            @can('payroll-create')
                <a href="{{ route('payroll.create', $row->url_address) }}" class="my-1 mx-1 view btn btn-success edit">
                    {{ __('word.recaclc') }}
                </a>
            @endcan
            @can('payroll-create')
                <a href="{{ route('payroll.auto_fill', $row->get_last_payroll->url_address) }}"
                    class="my-1 mx-1 view btn btn-danger">
                    {{ __('word.auto_fill') }}
                </a>
            @endcan
        @endif
    @else
        @can('payroll-create')
            <a href="{{ route('payroll.create', $row->url_address) }}" class="my-1 mx-1 view btn btn-success edit">
                {{ __('word.recaclc') }}
            </a>
        @endcan
    @endif
</div>
