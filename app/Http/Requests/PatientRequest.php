<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return[
            'patient.patient_id' => 'required',
            'patient.firstname' => 'required|string',
            'patient.lastname' => 'required|string',
            'patient.date_of_birth' => 'required|date',
            'patient.gender' => 'required|string',
            'patient.marital_status' => 'required|string',
            'patient.national_id' => 'required',
            'patient.social_security_number' => 'required',
            'patient.external_id' => 'required',
            'patient.user_defined' => 'required',
            'patient.billing_note' => 'required',
        ];
    }
}
