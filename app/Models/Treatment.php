<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $table = 'treatments';

    protected $fillable = ['patient_id', 'treatment_name', 'details', 'start_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
