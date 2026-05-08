<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'doctors' => Doctor::count(),
            'services' => Service::count(),
            'appointments' => Appointment::count(),
            'testimonials' => Testimonial::count(),
            'users' => User::count(),
        ];

        $recentAppointments = Appointment::with(['doctor', 'service'])->latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentAppointments'));
    }
}