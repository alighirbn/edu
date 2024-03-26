<?php

namespace App\Http\Requests\Financial;

use App\Models\Basic\Employee\Employee;
use Illuminate\Foundation\Http\FormRequest;

class FinancialEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        return [

            'id',
            'job_number' => ['required', \Illuminate\Validation\Rule::unique(Employee::class, 'job_number')->ignore($this->id), 'digits:9'],
            'user_id_update' => ['max:100'],
            'card_id' => ['max:100'],
            'bank_name_id' => ['max:100'],
            'bank_account' => ['max:100'],
            'iban_code' => ['max:100'],

            'employee_status_id' => ['required'],
            'contract_type_id' => ['required'],
            'employment_type_id' => ['required'],
            'assignment_type_id' => ['required'],
            'scientific_title_stage_id' => ['required'],
            'job_title_id' => ['required'],
            'job_grade_id' => ['required'],
            'career_stage_id' => ['required'],
            'danager_provision_id' => ['required'],
            'university_service_id' => ['required'],
            'marital_status_id' => ['required'],
            'children_count_id' => ['required'],
            'academic_achievement_id' => ['required'],
            'electric_shock_id' => ['required'],
            'security_guard_id' => ['required'],
            'night_watchman_id' => ['required'],
            'driver_allowance_id' => ['required'],
            'agricultural_risk_id' => ['required'],

            //normal fields

        ];
    }

    protected function prepareForValidation()
    {

        $this->mergeIfMissing(['user_id_update' => auth()->user()->id]);
    }

}
