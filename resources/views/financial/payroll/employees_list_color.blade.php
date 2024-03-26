<div class="flex ">
    @if (isset($row->get_last_payroll->financial_month_id) &&
            $row->get_last_payroll->financial_month_id == $payroll_date->id)
        <svg width="40" height="40">
            <circle cx="20" cy="20" r="15" stroke="blue" stroke-width="4" fill="blue" />

        </svg>
    @else
        <svg width="40" height="40">
            <circle cx="20" cy="20" r="15" stroke="green" stroke-width="4" fill="green" />

        </svg>
    @endif
</div>
