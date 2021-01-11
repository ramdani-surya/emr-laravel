<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'nurse_id',
        'visit_id',
        'diagnosis',
        'anamnesis',
        'height',
        'weight',
        'blood_pressure',
        'action',
        'action_date',
    ];

    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
