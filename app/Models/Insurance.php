<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $table = 'insurance';

    protected $fillable = ['patient_id', 'provider', 'policy_number', 'expiration_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
