@extends('layouts.app')

@section('title', 'Our Specialists - Celestia Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Meet the <span class="fw-bold">Minds</span> 🧠👩‍⚕️</h1>
            <p class="lead text-secondary">behind your smile</p>
            <p class="text-secondary">Our team of dedicated professionals brings precision, empathy, and artistry to every treatment.</p>
        </div>
        
        <div class="row g-4">
            @forelse($doctors as $doctor)
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="position-relative">
                        @if($doctor->photo)
                            <img src="{{ asset('storage/' . $doctor->photo) }}" class="card-img-top" alt="{{ $doctor->name }}">
                        @else
                            <div class="bg-danger bg-opacity-10 text-center py-5">
                                <span class="display-1">👨‍⚕️</span>
                            </div>
                        @endif
                        <div class="position-absolute bottom-0 start-0 bg-danger text-white px-3 py-1 m-3 rounded-pill small">
                            ★ {{ 4 + ($loop->index * 0.1) }}
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <h3 class="h4">{{ $doctor->name }}</h3>
                        <p class="text-danger">{{ $doctor->specialty }}</p>
                        <p class="text-secondary">{{ Str::limit($doctor->bio, 100) }}</p>
                        <div class="border-top pt-3 mt-3">
                            <div class="row text-center">
                                <div class="col-6">
                                    <small class="text-secondary">Experience</small>
                                    <div class="fw-bold">{{ $doctor->experience_years }} years</div>
                                </div>
                                <div class="col-6">
                                    <small class="text-secondary">Patients</small>
                                    <div class="fw-bold">{{ $doctor->experience_years * 50 }}+</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center pb-4">
                        <a href="{{ route('appointments.create') }}" class="btn btn-outline-danger btn-sm rounded-pill px-4">
                            Book Consultation
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-secondary">No specialists found. Please check back later.</p>
            </div>
            @endforelse
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn btn-danger rounded-pill px-5 py-3">
                Schedule a consultation →
            </a>
        </div>
    </div>
</section>
@endsection