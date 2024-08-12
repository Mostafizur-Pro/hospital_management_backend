<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations';

    protected $fillable = ['appointment_id', 'details'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
