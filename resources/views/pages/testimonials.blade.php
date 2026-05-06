@extends('layouts.app')

@section('title', 'Testimonials - Pure Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Real stories. <span class="fw-bold">Real smiles.</span></h1>
            <p class="lead text-secondary">Nothing speaks louder than the voice of those who have experienced our services firsthand.</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">★★★★★</div>
                        <p class="fst-italic text-secondary">"Amazing experience! The team at Celestia Smiles transformed my smile completely. I can't stop smiling!"</p>
                        <div class="mt-3">
                            <strong>Christina Martinez</strong>
                            <div class="text-danger small">Orthodontics</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">★★★★★</div>
                        <p class="fst-italic text-secondary">"Professional, caring, and artistic. The veneers they created changed my life. Highly recommend!"</p>
                        <div class="mt-3">
                            <strong>David Rodriguez</strong>
                            <div class="text-danger small">Cosmetic Dentistry</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">★★★★★</div>
                        <p class="fst-italic text-secondary">"The best dental clinic I have ever visited. Very modern and clean facility. The staff is amazing!"</p>
                        <div class="mt-3">
                            <strong>Sophia Laurent</strong>
                            <div class="text-danger small">Implants</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection