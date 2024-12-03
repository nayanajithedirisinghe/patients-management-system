<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'doctor_name',
        'specialization',
        'appointment_date',
        'appointment_time',
        'phone',
    ];
}
