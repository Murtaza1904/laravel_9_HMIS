<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'stats.patient_id' => 'required',
            'stats.language' => 'required',
            'stats.ethnicity' => 'required',
            'stats.race' => 'required',
            'stats.financial_review_date' => 'required',
            'stats.family_size' => 'required',
            'stats.monthly_income' => 'required',
            'stats.homeless' => 'required',
            'stats.interpreter' => 'required',
            'stats.migrant' => 'required',
            'stats.referral_source' => 'required',
            'stats.vfc' => 'required',
            'stats.religion' => 'required',
        ];
    }
}
