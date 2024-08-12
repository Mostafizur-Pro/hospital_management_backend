<?php

namespace Database\Seeders;

use App\Models\MedicalTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tests = [
            [
                'patient_id' => 1,
                'test_name' => 'Blood Test',
                'results' => 'Normal',
                'test_date' => '2024-08-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'patient_id' => 2,
                'test_name' => 'MRI',
                'results' => 'Minor issues detected',
                'test_date' => '2024-08-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($tests as $test) {
            MedicalTest::create($test);
        }
    }
}
