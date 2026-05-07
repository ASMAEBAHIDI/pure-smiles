<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        // Données statiques des spécialistes
        $doctors = [
            (object) [
                'name' => 'Dr. Ahmed',
                'specialty' => 'Endodontiste',
                'description' => 'Spécialiste des traitements de canal, alliant précision et confort.',
                'cost_range' => '2 400 – 4 900 DH',
                'complexity' => 68,
                'treatment_time' => '3 semaines'
            ],
            (object) [
                'name' => 'Dr. Sara',
                'specialty' => 'Dentisterie Esthétique',
                'description' => 'Crée des transformations esthétiques avec facettes et soins cosmétiques.',
                'cost_range' => '2 400 – 4 900 DH',
                'complexity' => 55,
                'treatment_time' => '3 semaines'
            ],
            (object) [
                'name' => 'Dr. Sophia',
                'specialty' => 'Endodontiste',
                'description' => 'Spécialiste des traitements de canal, alliant précision et confort.',
                'cost_range' => '2 400 – 4 900 DH',
                'complexity' => 72,
                'treatment_time' => '3 semaines'
            ],
            (object) [
                'name' => 'Dr. Khalil',
                'specialty' => 'Implantologie',
                'description' => 'Expert en implants dentaires et procédures chirurgicales avancées.',
                'cost_range' => '8 000 – 15 000 DH',
                'complexity' => 85,
                'treatment_time' => '3 mois'
            ],
        ];
        
        // Retourner la vue avec les données
        return view('pages.doctors')->with('doctors', $doctors);
    }
}