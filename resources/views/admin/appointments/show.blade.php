@extends('layouts.admin')

@section('title', 'Détail du Rendez-vous')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Détail du rendez-vous</h1>
        <div>
            <a href="{{ route('admin.appointments.edit', $appointment) }}" class="btn btn-primary">
                <i class="fas fa-edit me-1"></i> Modifier
            </a>
            <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Retour
            </a>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">Informations patient</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="fw-bold">Nom complet :</label>
                        <p class="mb-0">{{ $appointment->patient_name }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Email :</label>
                        <p class="mb-0">{{ $appointment->patient_email }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Téléphone :</label>
                        <p class="mb-0">{{ $appointment->patient_phone }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <h5 class="mb-0">Informations rendez-vous</h5>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="fw-bold">Médecin :</label>
                        <p class="mb-0">{{ $appointment->doctor->name ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Service :</label>
                        <p class="mb-0">{{ $appointment->service->name ?? 'N/A' }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Date :</label>
                        <p class="mb-0">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y') . ' à ' . $appointment->appointment_time }}</p>
                    </div>
                    <div class="mb-3">
                        <label class="fw-bold">Statut :</label>
                        <p class="mb-0">
                            @php
                                $statusClass = [
                                    'pending' => 'warning',
                                    'confirmed' => 'success',
                                    'cancelled' => 'danger',
                                    'completed' => 'info'
                                ][$appointment->status] ?? 'secondary';
                            @endphp
                            <span class="badge bg-{{ $statusClass }}">
                                {{ ucfirst($appointment->status) }}
                            </span>
                        </p>
                    </div>
                    @if($appointment->notes)
                        <div class="mb-3">
                            <label class="fw-bold">Notes :</label>
                            <p class="mb-0">{{ $appointment->notes }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection