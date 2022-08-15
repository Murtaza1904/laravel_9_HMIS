<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'employer.patient_id' => 'integer',
            'employer.industry' => 'required',
            'employer.occupation' => 'required',
            'employer.employer_name' => 'required',
            'employer.employer_address' => 'required',
            'employer.city' => 'required',
            'employer.state' => 'required',
            'employer.postal_code' => 'required',
            'employer.country' => 'required',
        ];
    }
}
