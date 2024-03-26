<?php

namespace App\Http\Requests\Financial;

use Illuminate\Foundation\Http\FormRequest;

class PayrollRequest extends FormRequest
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
            'employee_id' => ['required'],
            'financial_month_id' => ['required'],
            'financial_accountent_id' => ['required'],
            'facility_id' => ['required'],
            'user_id_create' => ['Numeric'],
            'user_id_update' => ['Numeric'],
            'url_address' => ['required'],
            'payroll_year' => ['required'],
            'payroll_month' => ['required'],
            'payroll_days' => ['required'],
            'payroll_missing_days' => ['required'],
            'nominal_salary_amount' => ['required'],
            // allowances
            'Fixed_allowances_amount' => ['required'],
            'transportation_allowances_amount' => ['required'],
            'Certificate_allowance_amount' => ['required'],
            'Position_allowance_amount' => ['required'],
            'danager_allowance_amount' => ['required'],
            'electric_shock_allowance_amount' => ['required'],
            'University_service_allowance_amount' => ['required'],
            'Scientific_title_allowance_amount' => ['required'],
            'Marital_Status_allowance_amount' => ['required'],
            'number_of_children_allowance_amount' => ['required'],
            'Night_watchman_allowance_amount' => ['required'],
            'Security_guard_allowance_amount' => ['required'],
            'currency_difference_allowance_amount' => ['required'],

            'Debit_increases_1_allowance_amount' => ['required'],

            'Debit_increases_2_allowance_amount' => ['required'],

            'Previous_salary_allowance_amount' => ['required'],
            'Tuition_expenses_allowance_amount' => ['required'],
            'Trustees_amount' => ['required'],
            'driver_allowance_amount' => ['required'],
            'agricultural_risk_allowance_amount' => ['required'],
            'total_salary_amount' => ['required'],

            //deduction
            'retirement_contributions_amount' => ['required'],
            'retirement_amount' => ['required'],
            'tax_deduction_amount' => ['required'],
            'Social_Welfare_Fund_amount' => ['required'],
            'Medical_Insurance_amount' => ['required'],
            'life_insurance_amount' => ['required'],
            'stamp_fee_amount' => ['required'],
            'support_fund_amount' => ['required'],
            'central_Statistical_Organization_amount' => ['required'],

            //mail
            'implementation_mail_1_amount' => ['required'],

            'implementation_mail_2_amount' => ['required'],

            'implementation_mail_3_amount' => ['required'],

            'implementation_mail_4_amount' => ['required'],

            'implementation_mail_5_amount' => ['required'],

            'implementation_mail_6_amount' => ['required'],

            'implementation_mail_7_amount' => ['required'],

            'implementation_mail_8_amount' => ['required'],

            'implementation_mail_9_amount' => ['required'],

            'implementation_mail_10_amount' => ['required'],

            'implementation_mail_11_amount' => ['required'],

            'implementation_mail_12_amount' => ['required'],

            'implementation_mail_13_amount' => ['required'],

            'implementation_mail_14_amount' => ['required'],

            'implementation_mail_15_amount' => ['required'],

            'implementation_mail_16_amount' => ['required'],

            'implementation_mail_17_amount' => ['required'],

            'implementation_mail_18_amount' => ['required'],

            'implementation_mail_19_amount' => ['required'],

            'implementation_mail_20_amount' => ['required'],

            'implementation_mail_21_amount' => ['required'],

        ];
    }

    protected function prepareForValidation()
    {
        $this->mergeIfMissing(['url_address' => $this->get_random_string(60)]);

        //add user_id base on route
        if (request()->routeIs('payroll.store')) {
            $this->mergeIfMissing(['user_id_create' => auth()->user()->id]);

        } elseif (request()->routeIs('payroll.update')) {
            $this->mergeIfMissing(['user_id_update' => auth()->user()->id]);

        }

    }
    public function get_random_string($length)
    {
        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";
        $length = rand(22, $length);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }

}
