<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;


class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'Dr. Alice Smith',
                'specialization' => 'Cardiology',
                'phone' => '0123456789',
                'email' => 'alice.smith@example.com',
             
            ],
            [
                'name' => 'Dr. John Doe',
                'specialization' => 'Neurology',
                'phone' => '0987654321',
                'email' => 'john.doe@example.com',
             
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }

       
    }
}
