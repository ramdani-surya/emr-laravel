<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Polyclinic extends Model
{
    protected $fillable = ['polyclinic_name', 'location'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    public function doctors()
    {
        return $this->hasMany(User::class)->where('role', 'doctor');
    }
}
