<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        $doctors = [
            [
                'name' => 'Dr. Sarah Johnson',
                'specialty' => 'Orthodontics',
                'bio' => 'Specialist in orthodontic treatments with over 10 years of experience.',
                'email' => 'sarah.johnson@puresmiles.com',
                'phone' => '+1 (555) 123-4567',
                'experience_years' => 10,
                'order' => 1
            ],
            [
                'name' => 'Dr. Michael Chen',
                'specialty' => 'Cosmetic Dentistry',
                'bio' => 'Expert in aesthetic transformations and smile makeovers.',
                'email' => 'michael.chen@puresmiles.com',
                'phone' => '+1 (555) 234-5678',
                'experience_years' => 12,
                'order' => 2
            ],
            [
                'name' => 'Dr. Emily Rodriguez',
                'specialty' => 'Implantology',
                'bio' => 'Specialized in dental implants and surgical procedures.',
                'email' => 'emily.rodriguez@puresmiles.com',
                'phone' => '+1 (555) 345-6789',
                'experience_years' => 8,
                'order' => 3
            ],
        ];

        foreach ($doctors as $doctor) {
            Doctor::create($doctor);
        }
    }
}