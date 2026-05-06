@extends('layouts.app')

@section('title', 'Our Specialists - Pure Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Meet the <span class="fw-bold">Minds</span> 🧠👩‍⚕️</h1>
            <p class="lead text-secondary">behind your smile</p>
            <p class="text-secondary">Our team of dedicated professionals brings precision, empathy, and artistry to every treatment.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" class="card-img-top" alt="Dr. Sarah Wilson">
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 m-3 rounded-pill small">
                            ★ 4.9
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h4">Dr. Sarah Wilson</h3>
                        <p class="text-danger">Orthodontics Specialist</p>
                        <p class="text-secondary">Specialist in orthodontic treatments, combining precision and comfort.</p>
                        <div class="border-top pt-3 mt-3">
                            <div class="row text-center">
                                <div class="col-6">
                                    <small class="text-secondary">Complexity</small>
                                    <div class="fw-bold">68%</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-secondary">Time</small>
                                    <div class="fw-bold">3 weeks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top" alt="Dr. Michael Chen">
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 m-3 rounded-pill small">
                            ★ 5.0
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h4">Dr. Michael Chen</h3>
                        <p class="text-danger">Cosmetic Dentistry</p>
                        <p class="text-secondary">Crafts aesthetic transformations with veneers and cosmetic care.</p>
                        <div class="border-top pt-3 mt-3">
                            <div class="row text-center">
                                <div class="col-6">
                                    <small class="text-secondary">Complexity</small>
                                    <div class="fw-bold">75%</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-secondary">Time</small>
                                    <div class="fw-bold">2 weeks</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://randomuser.me/api/portraits/women/42.jpg" class="card-img-top" alt="Dr. Emma Robinson">
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 m-3 rounded-pill small">
                            ★ 4.8
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h4">Dr. Emma Robinson</h3>
                        <p class="text-danger">Implantology</p>
                        <p class="text-secondary">Specialized in dental implants and surgical procedures.</p>
                        <div class="border-top pt-3 mt-3">
                            <div class="row text-center">
                                <div class="col-6">
                                    <small class="text-secondary">Complexity</small>
                                    <div class="fw-bold">85%</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-secondary">Time</small>
                                    <div class="fw-bold">3 months</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn btn-primary-celestia">Book a consultation →</a>
        </div>
    </div>
</section>
@endsection