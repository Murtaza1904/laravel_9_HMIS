<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize():bool
    {
        return true;
    }

    public function rules():array
    {
        return [
            // 'contact.patient_id'=>'required',
            'contact.address'=>'required',
            'contact.country'=>'required',
            'contact.city'=>'required',
            'contact.state'=>'required',
            'contact.postal_code'=>'required',
            'contact.county'=>'required',
            'contact.mother_name'=>'required',
            'contact.emergency_contact'=>'required',
            'contact.emergency_phone'=>'required',
            'contact.home_phone'=>'required',
            'contact.work_phone'=>'required',
            'contact.mobile_phone'=>'required',
            'contact.contact_email'=>'required',
            'contact.trusted_email'=>'required',
        ];
    }
}
