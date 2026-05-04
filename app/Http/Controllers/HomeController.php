<?php

namespace App\Http\Controllers;

use App\Models\Specialist;
use App\Models\Service;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $specialists = Specialist::where('is_active', true)->orderBy('order')->take(3)->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $testimonials = Testimonial::where('is_active', true)->latest()->take(3)->get();
        
        $stats = [
            'experience' => 15,
            'satisfaction' => 98,
            'smiles' => 5000,
            'experts' => 17,
        ];
        
        return view('home', compact('specialists', 'services', 'testimonials', 'stats'));
    }
}