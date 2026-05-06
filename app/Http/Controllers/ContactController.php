<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

       
        Appointment::create([
            'patient_name' => $validated['name'],
            'patient_email' => $validated['email'],
            'patient_phone' => $validated['phone'],
            'notes' => $validated['message'],
            'appointment_date' => now()->addDays(7), // Date par défaut
            'appointment_time' => '10:00:00', // Heure par défaut
            'doctor_id' => 1, // Docteur par défaut
            'service_id' => 1, // Service par défaut
            'status' => 'pending'
        ]);

        return redirect()->back()->with('success', 'Message envoyé avec succès ! Nous vous contacterons bientôt.');
    }
}