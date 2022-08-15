<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'firstname',
        'lastname',
        'date_of_birth',
        'gender',
        'marital_status',
        'national_id',
        'social_security_number',
        'external_id',
        'user_defined',
        'billing_note',
    ];

    public function contacts()
    {
        return $this->belongsTo(Contact::class,'patient_id');
    }

    public function choices(): HasOne
    {
        return $this->hasOne(Choice::class,'patient_id');
    }

    public function employers(): HasOne
    {
        return $this->hasOne(Employer::class,'patient_id');
    }

    public function stats(): HasOne
    {
        return $this->hasOne(Stats::class,'patient_id');
    }

    public function misc(): HasOne
    {
        return $this->hasOne(Misc::class,'patient_id');
    }

    public function guardians(): HasOne
    {
        return $this->hasOne(Guardian::class,'patient_id');
    }

    public function primary_insurances(): HasOne
    {
        return $this->hasOne(PrimaryInsurance::class,'patient_id');
    }

    public function secondary_insurances(): HasOne
    {
        return $this->hasOne(SecondaryInsurance::class,'patient_id');
    }

    public function tertiary_insurances(): HasOne
    {
        return $this->hasOne(TertiaryInsurance::class,'patient_id');
    }
}

