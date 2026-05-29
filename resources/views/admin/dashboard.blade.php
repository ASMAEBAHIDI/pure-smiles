@extends('layouts.admin')

@section('title', 'Dashboard Admin - Pure Smiles')

@section('content')
<div class="container-fluid px-0">
    <!-- En-tête de bienvenue -->
    <div class="mb-4">
        <h1 class="display-5 fw-bold mb-2">Bonjour, <span style="color: #002093;">{{ auth()->user()->name }}</span></h1>
        <p class="text-muted">Bienvenue dans votre espace d'administration</p>
    </div>

    <!-- Cartes statistiques -->
    <div class="row g-4 mb-5">
        <div class="col-md-3 col-6">
            <div class="card stat-card rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Médecins</p>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Doctor::count() }}</h2>
                    </div>
                    <div class="rounded-circle p-3" style="background: #00209320;">
                        <i class="fas fa-user-md fs-3" style="color: #002093;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card stat-card rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Total Services</p>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Service::count() }}</h2>
                    </div>
                    <div class="rounded-circle p-3" style="background: #00209320;">
                        <i class="fas fa-tooth fs-3" style="color: #002093;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card stat-card rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Rendez-vous</p>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Appointment::count() }}</h2>
                    </div>
                    <div class="rounded-circle p-3" style="background: #00209320;">
                        <i class="fas fa-calendar-check fs-3" style="color: #002093;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card stat-card rounded-4 p-3 h-100">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <p class="text-muted small mb-1">Témoignages</p>
                        <h2 class="fw-bold mb-0">{{ \App\Models\Testimonial::count() }}</h2>
                    </div>
                    <div class="rounded-circle p-3" style="background: #00209320;">
                        <i class="fas fa-star fs-3" style="color: #002093;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gestion rapide -->
    <div class="mb-5">
        <h5 class="fw-bold mb-3">Gestion rapide</h5>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <a href="{{ route('admin.doctors.index') }}" class="text-decoration-none">
                    <div class="card quick-card rounded-4 text-center p-3 h-100">
                        <i class="fas fa-user-md fs-1 mb-2" style="color: #002093;"></i>
                        <h6 class="fw-bold mb-0">Médecins</h6>
                        <small class="text-muted">Gérer les médecins</small>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="{{ route('admin.services.index') }}" class="text-decoration-none">
                    <div class="card quick-card rounded-4 text-center p-3 h-100">
                        <i class="fas fa-tooth fs-1 mb-2" style="color: #002093;"></i>
                        <h6 class="fw-bold mb-0">Services</h6>
                        <small class="text-muted">Gérer les services</small>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="{{ route('admin.appointments.index') }}" class="text-decoration-none">
                    <div class="card quick-card rounded-4 text-center p-3 h-100">
                        <i class="fas fa-calendar-check fs-1 mb-2" style="color: #002093;"></i>
                        <h6 class="fw-bold mb-0">Rendez-vous</h6>
                        <small class="text-muted">Gérer les RDV</small>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6">
                <a href="{{ route('admin.testimonials.index') }}" class="text-decoration-none">
                    <div class="card quick-card rounded-4 text-center p-3 h-100">
                        <i class="fas fa-star fs-1 mb-2" style="color: #002093;"></i>
                        <h6 class="fw-bold mb-0">Témoignages</h6>
                        <small class="text-muted">Gérer les avis</small>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Derniers rendez-vous -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-white border-0 py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Derniers rendez-vous</h5>
            <a href="{{ route('admin.appointments.index') }}" class="btn btn-sm btn-link text-decoration-none">Voir tout</a>
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
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(\App\Models\Appointment::with(['doctor', 'service'])->latest()->take(5)->get() as $appointment)
                        <tr>
                            <td>{{ $appointment->patient_name }}</td>
                            <td>{{ $appointment->doctor->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->service->name ?? 'N/A' }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y') }}</td>
                            <td>
                                @php
                                    $statusClass = [
                                        'pending' => 'warning',
                                        'confirmed' => 'success',
                                        'cancelled' => 'danger',
                                        'completed' => 'info'
                                    ][$appointment->status] ?? 'secondary';
                                    $statusText = [
                                        'pending' => 'En attente',
                                        'confirmed' => 'Confirmé',
                                        'cancelled' => 'Annulé',
                                        'completed' => 'Terminé'
                                    ][$appointment->status] ?? $appointment->status;
                                @endphp
                                <span class="badge bg-{{ $statusClass }}">{{ $statusText }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.appointments.edit', $appointment) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Aucun rendez-vous pour le moment</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection