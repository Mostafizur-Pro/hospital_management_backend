<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';

    protected $fillable = ['medical_test_id', 'doctor_id', 'report_data'];

    public function medicalTest()
    {
        return $this->belongsTo(MedicalTest::class);
    }
}
