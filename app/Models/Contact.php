<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'state',
        'postal_code',
        'country',
        'county',
        'mother_name',
        'emergency_contact',
        'emergency_phone',
        'home_phone',
        'work_phone',
        'contact_email',
        'trusted_email',
    ];

    protected $hidden = [
        'patient_id'
    ];
}
