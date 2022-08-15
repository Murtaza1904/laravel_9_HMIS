<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SecondaryInsuranceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'secondary_insurance.patient_id' => 'required',
            'secondary_insurance.secondary_insurance_provider' => 'required',
            'secondary_insurance.plan_name' => 'required',
            'secondary_insurance.subscriber' => 'required',
            'secondary_insurance.effective_date' => 'required',
            'secondary_insurance.relationship' => 'required',
            'secondary_insurance.policy_number' => 'required',
            'secondary_insurance.date_of_birth' => 'required',
            'secondary_insurance.group_number' => 'required',
            'secondary_insurance.social_security_number' => 'required',
            'secondary_insurance.subscriber_employer' => 'required',
            'secondary_insurance.gender' => 'required',
            'secondary_insurance.subscriber_employer_address' => 'required',
            'secondary_insurance.subscriber_address' => 'required',
            'secondary_insurance.subscriber_employer_city' => 'required',
            'secondary_insurance.city' => 'required',
            'secondary_insurance.subscriber_employer_state' => 'required',
            'secondary_insurance.state' => 'required',
            'secondary_insurance.subscriber_employer_zipcode' => 'required',
            'secondary_insurance.zipcode' => 'required',
            'secondary_insurance.subscriber_employer_country' => 'required',
            'secondary_insurance.country' => 'required',
            'secondary_insurance.subscriber_phone' => 'required',
            'secondary_insurance.co_payment' => 'required',
            'secondary_insurance.accept_assignment' => 'required',
        ];
    }
}
