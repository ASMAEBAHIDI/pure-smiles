<?php

namespace App\Http\Controllers;

use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        // Récupérer tous les médecins actifs
        $doctors = Doctor::where('is_active', true)->orderBy('order')->get();
        
        // Si la table est vide, on utilise des données par défaut
        if ($doctors->isEmpty()) {
            $doctors = collect([
                (object) [
                    'name' => 'Dr. Sarah Wilson',
                    'specialty' => 'Orthodontics Specialist',
                    'bio' => 'Specialist in orthodontic treatments with over 10 years of experience.',
                    'photo' => null,
                    'experience_years' => 10,
                ],
                (object) [
                    'name' => 'Dr. Michael Chen',
                    'specialty' => 'Cosmetic Dentistry',
                    'bio' => 'Expert in aesthetic transformations and smile makeovers.',
                    'photo' => null,
                    'experience_years' => 12,
                ],
                (object) [
                    'name' => 'Dr. Emma Robinson',
                    'specialty' => 'Implantology',
                    'bio' => 'Specialized in dental implants and surgical procedures.',
                    'photo' => null,
                    'experience_years' => 8,
                ],
            ]);
        }
        
        return view('pages.doctors', compact('doctors'));
    }
}