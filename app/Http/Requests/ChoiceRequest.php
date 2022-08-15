<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChoiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // 'choice.patient_id' => 'integer',
            'choice.provider' => 'required',
            'choice.referring_provider' => 'required',
            'choice.pharmacy' => 'required',
            'choice.hipaa_notice_received' => 'required',
            'choice.allow_voice_message' => 'required',
            'choice.leave_message_with' => 'required',
            'choice.allow_mail_message' => 'required',
            'choice.allow_sms' => 'required',
            'choice.allow_email' => 'required',
            'choice.allow_immunization_registry_use' => 'required',
            'choice.allow_immunization_info_sharing' => 'required',
            'choice.allow_health_information_exchange' => 'required',
            'choice.allow_patient_portal' => 'required',
            'choice.cms_portal_login' => 'required',
            'choice.immunization_registry_status' => 'required',
            'choice.immunization_registry_status_effective_date' => 'required',
            'choice.publicity_code' => 'required',
            'choice.publicity_code_effective_date' => 'required',
            'choice.protection_indicator' => 'required',
            'choice.protection_indicator_effective_date' => 'required',
            'choice.care_team_provider' => 'required',
            'choice.care_team_facility' => 'required',
        ];
    }
}
