<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardianRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'guardian.patient_id' => 'required',
            'guardian.name' => 'required',
            'guardian.relationship' => 'required',
            'guardian.gender' => 'required',
            'guardian.address' => 'required',
            'guardian.city' => 'required',
            'guardian.state' => 'required',
            'guardian.postal_code' => 'required',
            'guardian.country' => 'required',
            'guardian.phone' => 'required',
            'guardian.work_phone' => 'required',
            'guardian.email' => 'required',
        ];
    }
}
