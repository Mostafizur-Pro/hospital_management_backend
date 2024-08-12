<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = ['name', 'email', 'phone', 'dob', 'address'];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function insurance()
    {
        return $this->hasOne(Insurance::class);
    }

    public function medicalTests()
    {
        return $this->hasMany(MedicalTest::class);
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class);
    }

    public function observations()
    {
        return $this->hasMany(Observation::class);
    }
}
