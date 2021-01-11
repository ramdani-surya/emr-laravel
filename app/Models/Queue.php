<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $fillable = ['visit_id', 'polyclinic_id', 'queue_number', 'checked'];

    public function visit()
    {
        return $this->belongsTo(Visit::class);
    }
}
