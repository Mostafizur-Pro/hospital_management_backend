<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    use HasFactory;

    protected $table = 'observations';

    protected $fillable = ['patient_id', 'observation_data', 'observation_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
