@extends('layouts.app')

@section('title', 'Prendre Rendez-vous - Pure Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Planifiez votre <span class="fw-bold" style="color: #002093;">visite</span></h1>
            <p class="lead text-secondary">Réservez votre consultation avec notre équipe d'experts</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-5">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('appointments.store') }}" method="POST">
                            @csrf
                            
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Nom complet *</label>
                                    <input type="text" name="patient_name" class="form-control form-control-lg" required >
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email *</label>
                                    <input type="email" name="patient_email" class="form-control form-control-lg" required >
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Téléphone *</label>
                                    <input type="tel" name="patient_phone" class="form-control form-control-lg" required >
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Médecin préféré *</label>
                                    <select name="doctor_id" class="form-select form-select-lg" required>
                                        <option value="">Choisissez un médecin</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Service *</label>
                                    <select name="service_id" class="form-select form-select-lg" required>
                                        <option value="">Choisissez un service</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Date préférée *</label>
                                    <input type="date" name="appointment_date" class="form-control form-control-lg" required min="{{ date('Y-m-d') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Horaire préféré *</label>
                                    <select name="appointment_time" class="form-select form-select-lg" required>
                                        <option value="">Choisissez un horaire</option>
                                        <option value="09:00">09h00 - Matin</option>
                                        <option value="10:00">10h00 - Matin</option>
                                        <option value="11:00">11h00 - Matin</option>
                                        <option value="12:00">12h00 - Midi</option>
                                        <option value="14:00">14h00 - Après-midi</option>
                                        <option value="15:00">15h00 - Après-midi</option>
                                        <option value="16:00">16h00 - Après-midi</option>
                                        <option value="17:00">17h00 - Après-midi</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Comment avez-vous connu notre clinique ?</label>
                                    <select name="source" class="form-select">
                                        <option value="">Sélectionnez une option</option>
                                        <option value="google">Google / Recherche internet</option>
                                        <option value="instagram">Instagram / Facebook</option>
                                        <option value="friend">Recommandation d'un ami</option>
                                        <option value="other">Autre</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Notes supplémentaires</label>
                                    <textarea name="notes" class="form-control" rows="3" placeholder="Questions ou préoccupations particulières..."></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="terms" required>
                                        <label class="form-check-label" for="terms">
                                            J'accepte la <a href="#" class="text-decoration-none">politique de confidentialité</a> et les conditions générales.
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn w-100 py-3 fw-bold text-white rounded-pill" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                                        Confirmer le rendez-vous
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Informations complémentaires -->
                <div class="text-center mt-4">
                    <p class="text-muted small">
                        <i class="bi bi-shield-check"></i> Vos informations sont confidentielles<br>
                        Un email de confirmation vous sera envoyé après validation
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection