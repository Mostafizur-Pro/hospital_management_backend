<?php

namespace Database\Seeders;

use App\Models\Insurance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insurances = [
            [
                'patient_id' => 1,
                'provider' => 'HealthPlus',
                'policy_number' => 'HP1234567890',
                'expiration_date' => '2025-12-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => 2,
                'provider' => 'LifeCare',
                'policy_number' => 'LC0987654321',
                'expiration_date' => '2026-01-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($insurances as $insurance) {
            Insurance::create($insurance);
        }
    }
}
