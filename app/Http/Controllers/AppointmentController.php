<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::where('is_active', true)->get();
        $services = Service::where('is_active', true)->get();
        return view('pages.appointment', compact('doctors', 'services'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'patient_name' => 'required|string|max:255',
            'patient_email' => 'required|email|max:255',
            'patient_phone' => 'required|string|max:20',
            'doctor_id' => 'required|exists:doctors,id',
            'service_id' => 'required|exists:services,id',
            'appointment_date' => 'required|date|after:today',
            'appointment_time' => 'required',
            'notes' => 'nullable|string'
        ]);

        // Ajouter le statut par défaut
        $validated['status'] = 'pending';

        Appointment::create($validated);

        return redirect()->route('home')->with('success', 'Rendez-vous pris avec succès ! Nous vous contacterons bientôt.');
    }
}