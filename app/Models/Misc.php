<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misc extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_deceased',
        'reason_deceased',
    ];

    protected $hidden = [
        'patient_id',
    ];
}
