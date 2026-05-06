@extends('layouts.app')

@section('title', 'About Us - Pure Smiles')
@section('description', 'Learn about Pure Smiles, our mission, and our team of experts.')

@section('content')
<!-- Hero Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-light mb-3">About <span class="fw-bold">Pure Smiles</span></h1>
                <p class="lead text-secondary">Unveil excellence. Discover the Pure Smiles difference.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-4 fw-light mb-3">Our <span class="fw-bold">Mission</span></h2>
                <div class="border-bottom border-danger w-25 my-4" style="height: 2px;"></div>
                <p class="lead text-secondary">
                    At Celestia Smiles, we believe that your smile deserves more than just perfect teeth. 
                    Our team of certified experts offer a wide range of services to help you achieve the smile you've always dreamed of.
                </p>
                <p class="text-secondary">
                    From cosmetic dentistry to orthodontics, we're here to help you achieve the smile you've always wanted. 
                    We combine artistry with advanced technology to deliver exceptional results.
                </p>
            </div>
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b1a?q=80&w=2068" 
                     alt="Dental clinic" class="img-fluid rounded-4 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-danger bg-opacity-10">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <div class="h1 fw-bold text-danger">15+</div>
                <div class="text-secondary">Years of experience</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="h1 fw-bold text-danger">98%</div>
                <div class="text-secondary">Patient satisfaction</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="h1 fw-bold text-danger">5000+</div>
                <div class="text-secondary">Smiles transformed</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="h1 fw-bold text-danger">17</div>
                <div class="text-secondary">Certified experts</div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center display-4 fw-light mb-5">Our <span class="fw-bold">Values</span></h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                        <span class="fs-1">🎯</span>
                    </div>
                    <h4>Precision</h4>
                    <p class="text-secondary">Every treatment is meticulously planned and executed with the highest standards.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                        <span class="fs-1">❤️</span>
                    </div>
                    <h4>Empathy</h4>
                    <p class="text-secondary">We listen, understand, and care for each patient as an individual.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4">
                    <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-3 mb-3">
                        <span class="fs-1">🎨</span>
                    </div>
                    <h4>Artistry</h4>
                    <p class="text-secondary">We create smiles that are both beautiful and naturally harmonious.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Preview -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center display-4 fw-light mb-5">Meet the <span class="fw-bold">Minds</span> 🧠👩‍⚕️</h2>
        <p class="text-center text-secondary mb-5">behind your smile</p>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" class="card-img-top" alt="Dr. Sarah Wilson">
                    <div class="card-body text-center">
                        <h4>Dr. Sarah Wilson</h4>
                        <p class="text-danger">Orthodontics Specialist</p>
                        <p class="text-secondary">Specialist in orthodontic treatments with over 10 years of experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top" alt="Dr. Michael Chen">
                    <div class="card-body text-center">
                        <h4>Dr. Michael Chen</h4>
                        <p class="text-danger">Cosmetic Dentistry</p>
                        <p class="text-secondary">Expert in aesthetic transformations and smile makeovers.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm">
                    <img src="https://randomuser.me/api/portraits/women/42.jpg" class="card-img-top" alt="Dr. Emma Robinson">
                    <div class="card-body text-center">
                        <h4>Dr. Emma Robinson</h4>
                        <p class="text-danger">Implantology</p>
                        <p class="text-secondary">Specialized in dental implants and surgical procedures.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('specialists') }}" class="btn btn-outline-celestia">View all specialists →</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 bg-danger text-white">
    <div class="container text-center">
        <h2 class="display-5 fw-light mb-3">Ready to transform <span class="fw-bold">your smile?</span></h2>
        <p class="lead mb-4">Schedule a consultation with our experts today</p>
        <a href="{{ route('appointments.create') }}" class="btn btn-light text-danger px-5 py-3 rounded-pill fw-bold">
            Schedule a visit
        </a>
    </div>
</section>
@endsection