<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $table = 'admissions';

    protected $fillable = ['patient_id', 'room_number', 'seat_number', 'admission_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
