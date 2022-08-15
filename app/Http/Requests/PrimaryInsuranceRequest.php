<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrimaryInsuranceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'primary_insurance.patient_id' => 'required',
            'primary_insurance.primary_insurance_provider' => 'required',
            'primary_insurance.plan_name' => 'required',
            'primary_insurance.subscriber' => 'required',
            'primary_insurance.effective_date' => 'required',
            'primary_insurance.relationship' => 'required',
            'primary_insurance.policy_number' => 'required',
            'primary_insurance.date_of_birth' => 'required',
            'primary_insurance.group_number' => 'required',
            'primary_insurance.social_security_number' => 'required',
            'primary_insurance.subscriber_employer' => 'required',
            'primary_insurance.subscriber_employer_address' => 'required',
            'primary_insurance.subscriber_employer_city' => 'required',
            'primary_insurance.city' => 'required',
            'primary_insurance.subscriber_employer_state' => 'required',
            'primary_insurance.state' => 'required',
            'primary_insurance.subscriber_employer_zipcode' => 'required',
            'primary_insurance.zipcode' => 'required',
            'primary_insurance.subscriber_employer_country' => 'required',
            'primary_insurance.country' => 'required',
            'primary_insurance.subscriber_phone' => 'required',
            'primary_insurance.co_payment' => 'required',
            'primary_insurance.accept_assignment' => 'required',
        ];
    }
}
