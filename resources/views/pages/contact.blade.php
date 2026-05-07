@extends('layouts.app')

@section('title', 'Contact - Pure Smiles')
@section('description', 'Contactez Pure Smiles pour vos questions dentaires')

@section('content')
<div class="bg-light py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">
                Contactez<span class="fw-bold" style="color: #002093;">-nous</span>
            </h1>
            <p class="lead text-secondary">Nous sommes là pour répondre à toutes vos questions</p>
        </div>

        <div class="row g-4">
            <!-- Informations de contact -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg h-100">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold mb-4">Nos coordonnées</h2>
                        
                        <div class="d-flex align-items-center mb-4">
                           
                            <div class="ms-3">
                                <h3 class="h6 fw-bold mb-1 "> • Adresse</h3>
                                <p class="text-secondary mb-0">772 Avenue Dentaire, Kénitra</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-4">
                           
                            <div class="ms-3">
                                <h3 class="h6 fw-bold mb-1"> • Téléphone</h3>
                                <p class="text-secondary mb-0">+212534348080</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center mb-4">
                            
                            <div class="ms-3">
                                <h3 class="h6 fw-bold mb-1">• Email</h3>
                                <p class="text-secondary mb-0">contact@puresmiles.com</p>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-center">
                           
                            <div class="ms-3">
                                <h3 class="h6 fw-bold mb-1"> • Horaires</h3>
                                <p class="text-secondary mb-0">Lun-Ven : 9h - 18h</p>
                                <p class="text-secondary mb-0">Sam : 9h - 13h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <h2 class="h3 fw-bold mb-4">Envoyez-nous un message</h2>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nom complet *</label>
                                <input type="text" name="name" required class="form-control form-control-lg">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email *</label>
                                <input type="email" name="email" required class="form-control form-control-lg">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Téléphone *</label>
                                <input type="tel" name="phone" required class="form-control form-control-lg">
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Message *</label>
                                <textarea name="message" rows="5" required class="form-control"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-lg w-100 py-3 text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                                Envoyer le message 
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection