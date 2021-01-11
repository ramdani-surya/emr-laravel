<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        "nik",
        "name",
        "gender",
        "birthplace",
        "birthdate",
        "blood_group",
        "complete_address",
        "phone",
        "religion",
        "profession",
        "marital_status"
    ];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
