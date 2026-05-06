@extends('layouts.app')

@section('title', 'Our Services - Celestia Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Expert care <span class="fw-bold">for every smile</span></h1>
            <p class="lead text-secondary">We offer a full spectrum of treatments – each tailored to elevate your health, confidence, and natural beauty.</p>
        </div>
        
        <div class="row g-4">
            <!-- Orthodontics -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">🦷</span>
                        </div>
                        <h3 class="h4">Orthodontics</h3>
                        <p class="text-secondary">Straighten your teeth with modern braces and clear aligners. Custom treatment plans for all ages.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $2,500</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Cosmetic Dentistry -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">✨</span>
                        </div>
                        <h3 class="h4">Cosmetic Dentistry</h3>
                        <p class="text-secondary">Transform your smile with veneers, whitening, and bonding. Natural-looking results.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $800</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Implantology -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">💎</span>
                        </div>
                        <h3 class="h4">Implantology</h3>
                        <p class="text-secondary">Permanent solution for missing teeth. Using 3D-guided technology for precision fit.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $3,000</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Whitening -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">⭐</span>
                        </div>
                        <h3 class="h4">Whitening</h3>
                        <p class="text-secondary">Professional teeth whitening for a brighter, more confident smile. In-office or take-home kits.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $300</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Surgical Dentistry -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">🔪</span>
                        </div>
                        <h3 class="h4">Surgical Dentistry</h3>
                        <p class="text-secondary">Advanced surgical procedures including extractions and bone grafting with minimal discomfort.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">Consultation</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pediatric Dentistry -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">👶</span>
                        </div>
                        <h3 class="h4">Pediatric Dentistry</h3>
                        <p class="text-secondary">Gentle, child-friendly dental care for your little ones. Building healthy habits early.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $150</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Emergency Care -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">🚨</span>
                        </div>
                        <h3 class="h4">Emergency Care</h3>
                        <p class="text-secondary">Same-day appointments for dental emergencies. Quick relief when you need it most.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">24/7 Available</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Preventive Care -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                            <span class="fs-1">🛡️</span>
                        </div>
                        <h3 class="h4">Preventive Care</h3>
                        <p class="text-secondary">Regular check-ups, cleanings, and oral hygiene education to maintain your smile.</p>
                        <div class="mt-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger p-2">From $150</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn btn-primary-celestia">Schedule a consultation →</a>
        </div>
    </div>
</section>
@endsection