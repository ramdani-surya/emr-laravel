<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polyclinic extends Model
{
    protected $fillable = ['polyclinic_name', 'location'];

    public function visits()
    {
        return $this->hasMany(Visit::class);
    }
}
