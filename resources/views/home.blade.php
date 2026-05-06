@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <p class="text-uppercase small fw-light tracking-wide">We're a premium orthodontic and aesthetic clinic</p>
        <h1 class="display-1 fw-light mb-4">
            Luxury care <span class="fw-bold">made personal</span>
        </h1>
        <p class="lead mb-5">For those who settle for nothing ordinary.</p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="{{ route('appointments.create') }}" class="btn btn-primary-celestia">Schedule a visit</a>
            <a href="{{ route('services') }}" class="btn btn-outline-celestia">Our Services</a>
        </div>
    </div>
</section>

<!-- Soft. Defined Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-3 fw-light">
                    Soft.<br>
                    <span class="fw-bold">Defined.</span>
                </h2>
                <div class="border-bottom border-danger w-25 my-4" style="height: 2px;"></div>
                <p class="lead text-secondary">
                    We combine precision engineering with artistic vision to create smiles that are both 
                    naturally beautiful and structurally perfect.
                </p>
                <p class="text-secondary">
                    Our approach goes beyond traditional dentistry — we're architects of confidence, 
                    sculptors of self-assurance, and partners in your journey to a radiant smile.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1606811971618-4486d14f3f99?q=80&w=2070" 
                         alt="Smiling patient" class="img-fluid rounded-4 shadow">
                    <div class="position-absolute bottom-0 start-0 bg-danger text-white p-3 rounded-4 shadow-lg m-3">
                        <div class="h2 fw-bold mb-0">5000+</div>
                        <small>Smiles Transformed</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Expert care <span>for every smile</span></h2>
        <p class="section-subtitle">
            We offer a full spectrum of treatments – each tailored to elevate your health, confidence, and natural beauty.
        </p>
        
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon">🦷</div>
                    <h4>Aesthetic dentistry</h4>
                    <p class="text-secondary">Veneers, bonding, and smile makeovers</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon">📐</div>
                    <h4>Orthodontics</h4>
                    <p class="text-secondary">Braces and clear aligners</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon">💎</div>
                    <h4>Implantology</h4>
                    <p class="text-secondary">Permanent tooth replacement</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card">
                    <div class="service-icon">✨</div>
                    <h4>Whitening</h4>
                    <p class="text-secondary">Professional teeth whitening</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section class="py-5 bg-danger bg-opacity-10">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <div class="stat-number">15+</div>
                <div class="text-secondary">Years of experience</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number">98%</div>
                <div class="text-secondary">Patient satisfaction</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number">5000+</div>
                <div class="text-secondary">Smiles transformed</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number">17</div>
                <div class="text-secondary">Certified experts</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Real stories. <span>Real smiles.</span></h2>
        <p class="section-subtitle">
            Nothing speaks louder than the voice of those who have experienced our services firsthand.
        </p>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                            <span class="fs-4">⭐</span>
                        </div>
                        <div>
                            <div class="fw-bold">Christina M.</div>
                            <div class="text-warning">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "My smile transformed completely. The team at Celestia Smiles is truly exceptional."
                    </p>
                    <div class="text-danger small mt-2">Orthodontics</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                            <span class="fs-4">⭐</span>
                        </div>
                        <div>
                            <div class="fw-bold">David R.</div>
                            <div class="text-warning">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "Professional, caring, and artistic. The veneers they created changed my life."
                    </p>
                    <div class="text-danger small mt-2">Cosmetic Dentistry</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-danger bg-opacity-10 rounded-circle p-2 me-3">
                            <span class="fs-4">⭐</span>
                        </div>
                        <div>
                            <div class="fw-bold">Sophia L.</div>
                            <div class="text-warning">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "The best dental experience I've ever had. State-of-the-art technology."
                    </p>
                    <div class="text-danger small mt-2">Implants</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="py-5 bg-danger text-white">
    <div class="container text-center">
        <h2 class="display-4 fw-light mb-3">Celestia Smiles, <span class="fw-bold">made personal</span></h2>
        <p class="lead mb-4">Ready for your smile transformation? Schedule a consultation with our experts.</p>
        <a href="{{ route('appointments.create') }}" class="btn btn-light text-danger px-5 py-3 rounded-pill fw-bold">
            Schedule a visit
        </a>
    </div>
</section>
@endsection