<?php

namespace Database\Seeders;

use App\Models\Testimonial;  
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        $testimonials = [
            [
                'patient_name' => 'Marie Lambert',
                'content' => 'Un accompagnement exceptionnel. Mon sourire est complètement transformé !',
                'rating' => 5,
                'treatment' => 'Orthodontie',
                'is_active' => true
            ],
            [
                'patient_name' => 'Thomas Dubois',
                'content' => 'Des professionnels à l\'écoute et des résultats bluffants. Je recommande vivement.',
                'rating' => 5,
                'treatment' => 'Implants dentaires',
                'is_active' => true
            ],
            [
                'patient_name' => 'Sophie Martin',
                'content' => 'La meilleure clinique dentaire que j\'ai visitée. Équipe compétente et matériel moderne.',
                'rating' => 5,
                'treatment' => 'Blanchiment',
                'is_active' => true
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}