<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TertiaryInsuranceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tertiary_insurance.patient_id' => 'required',
            'tertiary_insurance.tertiary_insurance_provider' => 'required',
            'tertiary_insurance.plan_name' => 'required',
            'tertiary_insurance.subscriber' => 'required',
            'tertiary_insurance.effective_date' => 'required',
            'tertiary_insurance.relationship' => 'required',
            'tertiary_insurance.policy_number' => 'required',
            'tertiary_insurance.date_of_birth' => 'required',
            'tertiary_insurance.group_number' => 'required',
            'tertiary_insurance.social_security_number' => 'required',
            'tertiary_insurance.subscriber_employer' => 'required',
            'tertiary_insurance.gender' => 'required',
            'tertiary_insurance.subscriber_employer_address' => 'required',
            'tertiary_insurance.subscriber_address' => 'required',
            'tertiary_insurance.subscriber_employer_city' => 'required',
            'tertiary_insurance.city' => 'required',
            'tertiary_insurance.subscriber_employer_state' => 'required',
            'tertiary_insurance.state' => 'required',
            'tertiary_insurance.subscriber_employer_zipcode' => 'required',
            'tertiary_insurance.zipcode' => 'required',
            'tertiary_insurance.subscriber_employer_country' => 'required',
            'tertiary_insurance.country' => 'required',
            'tertiary_insurance.subscriber_phone' => 'required',
            'tertiary_insurance.co_payment' => 'required',
            'tertiary_insurance.accept_assignment' => 'required',
        ];
    }
}
