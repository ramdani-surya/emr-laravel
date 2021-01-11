<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'patient_id',
        'guarantator',
        'member_number',
        'access_rights',
        'polyclinic_id',
        'registration_number',
    ];

    public function medicalRecord()
    {
        return $this->hasOne(MedicalRecord::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function polyclinic()
    {
        return $this->belongsTo(Polyclinic::class);
    }

    public function queue()
    {
        return $this->hasOne(Queue::class);
    }
}
