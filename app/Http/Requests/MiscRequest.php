<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MiscRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            'misc.patient_id' => 'integer',
            'misc.date_deceased' => 'required',
            'misc.reason_deceased' => 'required',
        ];
    }
}
