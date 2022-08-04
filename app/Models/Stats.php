<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $fillable = [
        'language',
        'ethnicity',
        'race',
        'financial_review_date',
        'family_size',
        'monthly_income',
        'homeless',
        'interpreter',
        'migrant',
        'referral_source',
        'vfc',
        'religion',
    ];

    protected $hidden = [
        'patient_id',
    ];
}
