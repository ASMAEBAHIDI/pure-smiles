<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'preferred_date' => 'required|date',
            'service' => 'nullable|string',
            'message' => 'nullable|string',
        ]);
        
        Appointment::create($validated);
        
        return redirect()->back()->with('success', 'Appointment request sent successfully! We will contact you soon.');
    }
}