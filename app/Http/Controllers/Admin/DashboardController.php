<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Specialist;
use App\Models\Service;
use App\Models\Testimonial;

class DashboardController extends Controller
{
    public function index()
    {
        $totalAppointments = Appointment::count();
        $pendingAppointments = Appointment::where('status', 'pending')->count();
        $totalSpecialists = Specialist::count();
        $totalServices = Service::count();
        $totalTestimonials = Testimonial::count();
        
        $recentAppointments = Appointment::latest()->take(5)->get();
        
        return view('admin.dashboard', compact(
            'totalAppointments', 'pendingAppointments', 'totalSpecialists',
            'totalServices', 'totalTestimonials', 'recentAppointments'
        ));
    }
}