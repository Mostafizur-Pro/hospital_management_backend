<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $consultations = [
            [
                'appointment_id' => 1,
                'details' => 'Patient shows signs of improvement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'appointment_id' => 2,
                'details' => 'Patient requires additional testing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($consultations as $consultation) {
            Consultation::create($consultation);
        }
    }
}
