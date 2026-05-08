@extends('layouts.admin')

@section('title', 'Dashboard Admin - Pure Smiles')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
        
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="display-5 fw-bold mb-2">
                        <span class="fw-light">Bonjour,</span> 
                        <span style="color: #002093;">{{ auth()->user()->name }}</span>
                    </h1>
                    <p class="text-muted">Bienvenue dans votre espace d'administration</p>
                </div>
                
            </div>

    
            <div class="row g-4 mb-5">
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Total Médecins</p>
                                    <h2 class="fw-bold mb-0" style="color: #002093;">{{ \App\Models\Doctor::count() }}</h2>
                                </div>
                                <div class="rounded-circle p-3" style="background: #00209320;">
                                    <i class="fas fa-user-md fs-2" style="color: #002093;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Total Services</p>
                                    <h2 class="fw-bold mb-0" style="color: #002093;">{{ \App\Models\Service::count() }}</h2>
                                </div>
                                <div class="rounded-circle p-3" style="background: #00209320;">
                                    <i class="fas fa-tooth fs-2" style="color: #002093;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Rendez-vous</p>
                                    <h2 class="fw-bold mb-0" style="color: #002093;">{{ \App\Models\Appointment::count() }}</h2>
                                </div>
                                <div class="rounded-circle p-3" style="background: #00209320;">
                                    <i class="fas fa-calendar-alt fs-2" style="color: #002093;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <p class="text-muted mb-1">Témoignages</p>
                                    <h2 class="fw-bold mb-0" style="color: #002093;">{{ \App\Models\Testimonial::count() }}</h2>
                                </div>
                                <div class="rounded-circle p-3" style="background: #00209320;">
                                    <i class="fas fa-star fs-2" style="color: #002093;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <h3 class="h4 mb-4">Gestion rapide</h3>
                </div>
                <div class="col-md-3 col-6">
                    <a href="{{ route('admin.doctors.index') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card">
                            <i class="fas fa-user-md fs-1 mb-2" style="color: #002093;"></i>
                            <span class="fw-bold">Médecins</span>
                            <small class="text-muted">Gérer les médecins</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="{{ route('admin.services.index') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card">
                            <i class="fas fa-tooth fs-1 mb-2" style="color: #002093;"></i>
                            <span class="fw-bold">Services</span>
                            <small class="text-muted">Gérer les services</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="{{ route('admin.appointments.index') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card">
                            <i class="fas fa-calendar-alt fs-1 mb-2" style="color: #002093;"></i>
                            <span class="fw-bold">Rendez-vous</span>
                            <small class="text-muted">Gérer les RDV</small>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-6">
                    <a href="{{ route('admin.testimonials.index') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm rounded-4 text-center p-3 hover-card">
                            <i class="fas fa-star fs-1 mb-2" style="color: #002093;"></i>
                            <span class="fw-bold">Témoignages</span>
                            <small class="text-muted">Gérer les avis</small>
                        </div>
                    </a>
                </div>
            </div>

    
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-header bg-white py-3 rounded-top-4">
                    <h3 class="h5 mb-0">Derniers rendez-vous</h3>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Patient</th>
                                    <th>Médecin</th>
                                    <th>Service</th>
                                    <th>Date</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(\App\Models\Appointment::latest()->take(5)->get() as $appointment)
                                <tr>
                                    <td>{{ $appointment->patient_name }}</td>
                                    <td>{{ $appointment->doctor->name ?? 'N/A' }}</td>
                                    <td>{{ $appointment->service->name ?? 'N/A' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y') }}</td>
                                    <td>
                                        <span class="badge bg-{{ $appointment->status == 'pending' ? 'warning' : ($appointment->status == 'confirmed' ? 'success' : 'secondary') }}">
                                            {{ $appointment->status == 'pending' ? 'En attente' : ($appointment->status == 'confirmed' ? 'Confirmé' : 'Terminé') }}
                                        </span>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">Aucun rendez-vous</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-card {
    transition: transform 0.3s, box-shadow 0.3s;
}
.hover-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
}
</style>
@endsection