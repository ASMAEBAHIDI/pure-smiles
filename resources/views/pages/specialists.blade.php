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
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold mb-2" style="color: #333;">Dr. Ahmed </h3>
                        <p class="text-muted mb-3">Spécialiste des traitements de canal, alliant précision et confort.</p>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Estimation des coûts</p>
                            <p class="h5 fw-bold" style="color: #002093;">2 400 – 4 900 DH*</p>
                            <small class="text-muted">*Estimation uniquement. Coût final en clinique.</small>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Complexité du traitement</p>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small" style="font-size: 11px;">0%</span>
                                <span class="small fw-bold" style="color: #002093; font-size: 13px;">68%</span>
                                <span class="small" style="font-size: 11px;">100%</span>
                            </div>
                            <div class="progress" style="height: 8px; background: #e0e0e0;">
                                <div class="progress-bar" style="width: 68%; background: linear-gradient(90deg, #002093, #002093); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093">Durée estimée</p>
                            <p class="fw-bold mb-0" style="font-size: 1.1rem;">3 semaines</p>
                            <small class="text-muted">Sous réserve de consultation.</small>
                        </div>
                    </div>
                </div>
            </div>
            
          
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold mb-2" style="color: #333;">Dr. Sara</h3>
                        <p class="text-muted mb-3">Crée des transformations esthétiques avec facettes et soins cosmétiques.</p>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Estimation des coûts</p>
                            <p class="h5 fw-bold" style="color: #002093;">2 400 – 4 900 DH*</p>
                            <small class="text-muted">*Estimation uniquement. Coût final en clinique.</small>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Complexité du traitement</p>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small" style="font-size: 11px;">0%</span>
                                <span class="small fw-bold" style="color: #002093; font-size: 13px;">55%</span>
                                <span class="small" style="font-size: 11px;">100%</span>
                            </div>
                            <div class="progress" style="height: 8px; background: #e0e0e0;">
                                <div class="progress-bar" style="width: 55%; background: linear-gradient(90deg, #002093, #002093); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Durée estimée</p>
                            <p class="fw-bold mb-0" style="font-size: 1.1rem;">3 semaines</p>
                            <small class="text-muted">Sous réserve de consultation.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Deuxième ligne pour plus de spécialistes -->
        <div class="row g-4 mt-2">
          
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold mb-2" style="color: #333;">Dr. Sophia</h3>
                        <p class="text-muted mb-3">Spécialiste des traitements de canal, alliant précision et confort.</p>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Estimation des coûts</p>
                            <p class="h5 fw-bold" style="color: #002093;">2 400 – 4 900 DH*</p>
                            <small class="text-muted">*Estimation uniquement. Coût final en clinique.</small>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Complexité du traitement</p>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small" style="font-size: 11px;">0%</span>
                                <span class="small fw-bold" style="color: #002093; font-size: 13px;">72%</span>
                                <span class="small" style="font-size: 11px;">100%</span>
                            </div>
                            <div class="progress" style="height: 8px; background: #e0e0e0;">
                                <div class="progress-bar" style="width: 72%; background: linear-gradient(90deg, #002093, #002093); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Durée estimée</p>
                            <p class="fw-bold mb-0" style="font-size: 1.1rem;">3 semaines</p>
                            <small class="text-muted">Sous réserve de consultation.</small>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 rounded-4">
                    <div class="card-body p-4">
                        <h3 class="h4 fw-bold mb-2" style="color: #333;">Dr. Khalil</h3>
                        <p class="text-muted mb-3">Expert en implants dentaires et procédures chirurgicales avancées.</p>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Estimation des coûts</p>
                            <p class="h5 fw-bold" style="color: #002093;">8 000 – 15 000 DH*</p>
                            <small class="text-muted">*Estimation uniquement. Coût final en clinique.</small>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Complexité du traitement</p>
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small" style="font-size: 11px;">0%</span>
                                <span class="small fw-bold" style="color: #002093; font-size: 13px;">85%</span>
                                <span class="small" style="font-size: 11px;">100%</span>
                            </div>
                            <div class="progress" style="height: 8px; background: #e0e0e0;">
                                <div class="progress-bar" style="width: 85%; background: linear-gradient(90deg, #002093, #002093); border-radius: 4px;"></div>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <p class="small fw-semibold mb-1 text-uppercase" style="color: #002093;">Durée estimée</p>
                            <p class="fw-bold mb-0" style="font-size: 1.1rem;">3 mois</p>
                            <small class="text-muted">Sous réserve de consultation.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn rounded-pill px-5 py-3 fw-bold text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                Planifier une consultation
            </a>
        </div>
    </div>
</section>
@endsection