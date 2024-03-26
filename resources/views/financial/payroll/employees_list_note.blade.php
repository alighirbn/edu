@if (isset($row->get_last_payroll) && isset($row->get_payroll_last_values))
    @if ($row->get_payroll_last_values->children_count_id != $row->children_count_id)
        <div>
            {{ __('word.children_count_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->main_section_id != $row->get_payroll_facility->main_section_id)
        <div>
            {{ __('word.note_main_section_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->marital_status_id != $row->marital_status_id)
        <div>
            {{ __('word.marital_status_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->driver_allowance_id != $row->driver_allowance_id)
        <div>
            {{ __('word.driver_allowance_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->agricultural_risk_id != $row->agricultural_risk_id)
        <div>
            {{ __('word.agricultural_risk_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->electric_shock_id != $row->electric_shock_id)
        <div>
            {{ __('word.electric_shock_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->University_service_id != $row->University_service_id)
        <div>
            {{ __('word.University_service_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->danager_provision_id != $row->danager_provision_id)
        <div>
            {{ __('word.danager_provision_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->night_watchman_id != $row->night_watchman_id)
        <div>
            {{ __('word.night_watchman_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->security_guard_id != $row->security_guard_id)
        <div>
            {{ __('word.security_guard_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->contract_type_id != $row->contract_type_id)
        <div>
            {{ __('word.note_contract_type_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->assignment_type_id != $row->assignment_type_id)
        <div>
            {{ __('word.assignment_type_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->job_grade_id != $row->job_grade_id)
        <div>
            {{ __('word.note_job_grade_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->career_stage_id != $row->career_stage_id)
        <div>
            {{ __('word.note_career_stage_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->academic_achievement_id != $row->academic_achievement_id)
        <div>
            {{ __('word.academic_achievement_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->scientific_title_stage_id != $row->scientific_title_stage_id)
        <div>
            {{ __('word.scientific_title_stage_id') }}
        </div>
    @endif
    @if ($row->get_payroll_last_values->payroll_missing_days != 0)
        <div>
            {{ __('word.payroll_missing_days') }}
        </div>
    @endif

    @if (
        $row->get_last_payroll->currency_difference_allowance_amount +
            $row->get_last_payroll->Debit_increases_1_allowance_amount +
            $row->get_last_payroll->Debit_increases_2_allowance_amount +
            $row->get_last_payroll->Previous_salary_allowance_amount +
            $row->get_last_payroll->Tuition_expenses_allowance_amount +
            $row->get_last_payroll->Trustees_amount !=
            0)
        <div>
            {{ __('word.note_allowance') }}
        </div>
    @endif

    @if (
        $row->get_last_payroll->implementation_mail_1_amount +
            $row->get_last_payroll->implementation_mail_2_amount +
            $row->get_last_payroll->implementation_mail_3_amount +
            $row->get_last_payroll->implementation_mail_4_amount +
            $row->get_last_payroll->implementation_mail_5_amount +
            $row->get_last_payroll->implementation_mail_6_amount +
            $row->get_last_payroll->implementation_mail_7_amount +
            $row->get_last_payroll->implementation_mail_8_amount +
            $row->get_last_payroll->implementation_mail_9_amount +
            $row->get_last_payroll->implementation_mail_10_amount +
            $row->get_last_payroll->implementation_mail_11_amount +
            $row->get_last_payroll->implementation_mail_12_amount +
            $row->get_last_payroll->implementation_mail_13_amount +
            $row->get_last_payroll->implementation_mail_14_amount +
            $row->get_last_payroll->implementation_mail_15_amount +
            $row->get_last_payroll->implementation_mail_16_amount +
            $row->get_last_payroll->implementation_mail_17_amount +
            $row->get_last_payroll->implementation_mail_18_amount +
            $row->get_last_payroll->implementation_mail_19_amount +
            $row->get_last_payroll->implementation_mail_20_amount +
            $row->get_last_payroll->implementation_mail_21_amount !=
            0)
        <div>
            {{ __('word.implementation') }}
        </div>
    @endif

@endif
