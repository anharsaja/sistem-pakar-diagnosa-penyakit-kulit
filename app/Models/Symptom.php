<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function disease()
    {
        return $this->belongsToMany(Disease::class, 'certainties', 'symptom_id', 'disease_id');
    }
}

