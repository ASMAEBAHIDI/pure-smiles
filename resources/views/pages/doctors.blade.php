@extends('layouts.app')

@section('title', 'Nos Spécialistes - Pure Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Rencontrez les <span class="fw-bold" style="color: #002093;">esprits</span></h1>
            <p class="lead text-secondary" style="font-size: 1.25rem;">derrière votre sourire</p>
            <p class="text-secondary mx-auto" style="max-width: 700px;">Notre équipe de professionnels dévoués apporte précision, empathie et artistique à chaque traitement – combinant des années d'expérience avec une passion commune pour des soins véritablement personnalisés.</p>

        </div>
        
        <div class="row g-4">
            @foreach($doctors as $doctor)
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold mb-2" style="color: #333;">{{ $doctor->name }}</h3>
                        <p class="text-muted mb-3">{{ $doctor->description }}</p>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Estimation des coûts</p>
                            <p class="h5 fw-bold" style="color: #002093;">{{ $doctor->cost_range }}*</p>
                            <small class="text-muted">*Estimation uniquement. Coût final en clinique.</small>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Complexité du traitement</p>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small" style="font-size: 11px;">0%</span>
                                <span class="small fw-bold" style="color: #002093; font-size: 13px;">{{ $doctor->complexity }}%</span>
                                <span class="small" style="font-size: 11px;">100%</span>
                            </div>
                            <div class="progress" style="height: 8px; background: #e0e0e0;">
                                <div class="progress-bar" style="width: {{ $doctor->complexity }}%; background: linear-gradient(90deg, #667eea, #764ba2); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Durée estimée</p>
                            <p class="fw-bold mb-0" style="font-size: 1.1rem;">{{ $doctor->treatment_time }}</p>
                            <small class="text-muted">Sous réserve de consultation.</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn rounded-pill px-5 py-3 fw-bold text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                Planifier une consultation
            </a>
        </div>
    </div>
</section>
@endsection