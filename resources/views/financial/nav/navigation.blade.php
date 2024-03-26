@can('financial_accountant-list')
    <a href="{{ route('financial_accountant.index') }}" class="mx-2">
        {{ __('word.financial_accountant_search') }}
    </a>
@endcan

@can('payroll-employees_list')
    <a href="{{ route('payroll.employees_list') }}" class="mx-2">
        {{ __('word.employees_list') }}
    </a>
@endcan
@can('payroll-show')
    <a href="{{ route('payroll.facility_sum') }}" class="mx-2">
        {{ __('word.payroll_facility_sum') }}
    </a>
@endcan
@can('payroll_date-list')
    <a href="{{ route('payroll_date.index') }}" class="mx-2">
        {{ __('word.payroll_date') }}
    </a>
@endcan
@can('payroll-list')
    <a href="{{ route('payroll.index') }}" class="mx-2">
        {{ __('word.payroll_list') }}
    </a>
@endcan
@can('financial_default-list')
    <a href="{{ route('financial_default.index') }}" class="mx-2">
        {{ __('word.financial_default') }}
    </a>
@endcan
