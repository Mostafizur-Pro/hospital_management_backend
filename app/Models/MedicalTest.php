<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{
    use HasFactory;

    protected $table = 'medical_tests';

    protected $fillable = ['patient_id', 'test_name', 'results', 'test_date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
