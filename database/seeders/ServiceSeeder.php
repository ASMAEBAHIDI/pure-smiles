<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Orthodontics',
                'slug' => 'orthodontics',
                'description' => 'Straighten your teeth with modern braces and aligners.',
                'icon' => '🦷',
                'price_min' => 2500,
                'price_max' => 7000,
                'duration_minutes' => 60,
                'order' => 1
            ],
            [
                'name' => 'Cosmetic Dentistry',
                'slug' => 'cosmetic-dentistry',
                'description' => 'Transform your smile with veneers, whitening, and bonding.',
                'icon' => '✨',
                'price_min' => 800,
                'price_max' => 5000,
                'duration_minutes' => 45,
                'order' => 2
            ],
            [
                'name' => 'Dental Implants',
                'slug' => 'dental-implants',
                'description' => 'Permanent solution for missing teeth.',
                'icon' => '💎',
                'price_min' => 3000,
                'price_max' => 6000,
                'duration_minutes' => 90,
                'order' => 3
            ],
            [
                'name' => 'Teeth Whitening',
                'slug' => 'teeth-whitening',
                'description' => 'Professional whitening for a brighter smile.',
                'icon' => '⭐',
                'price_min' => 300,
                'price_max' => 800,
                'duration_minutes' => 60,
                'order' => 4
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}