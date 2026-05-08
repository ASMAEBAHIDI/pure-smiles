@extends('layouts.admin')

@section('title', 'Gestion des Rendez-vous')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Gestion des Rendez-vous</h1>
        
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Filtres -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="GET" action="{{ route('admin.appointments.index') }}" class="row g-3">
                <div class="col-md-3">
                    <label class="form-label">Statut</label>
                    <select name="status" class="form-select">
                        <option value="">Tous</option>
                        <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>En attente</option>
                        <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Confirmé</option>
                        <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Annulé</option>
                        <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Terminé</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                </div>
                <div class="col-md-3">
                    <label class="form-label">Recherche</label>
                    <input type="text" name="search" class="form-control" placeholder="Nom, email, téléphone..." value="{{ request('search') }}">
                </div>
                <div class="col-md-3 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-search me-1"></i> Filtrer
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Patient</th>
                            <th>Médecin</th>
                            <th>Service</th>
                            <th>Date</th>
                            <th>Horaire</th>
                            <th>Statut</th>
                            <th>Créé le</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($appointments as $appointment)
                        <tr>
                            <td>#{{ $appointment->id }}</td>
                            <td>
                                <strong>{{ $appointment->patient_name }}</strong><br>
                                <small class="text-muted">{{ $appointment->patient_email }}</small><br>
                                <small class="text-muted">{{ $appointment->patient_phone }}</small>
                             </td>
                            <td>{{ $appointment->doctor->name ?? 'N/A' }}</td>
                            <td>{{ $appointment->service->name ?? 'N/A' }}</td>
                            <td>{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('d/m/Y') }}</td>
                            <td>{{ $appointment->appointment_time }}</td>
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
                            <td>{{ $appointment->created_at->format('d/m/Y H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.appointments.show', $appointment) }}" class="btn btn-sm btn-outline-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.appointments.edit', $appointment) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.appointments.destroy', $appointment) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ce rendez-vous ?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                             </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted py-4">Aucun rendez-vous trouvé.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-white">
            <div class="d-flex justify-content-center">
                {{ $appointments->appends(request()->query())->links() }}
            </div>
        </div>
    </div>

    <!-- Résumé rapide -->
    <div class="row mt-4 g-3">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-warning bg-opacity-10">
                <div class="card-body text-center">
                    <h3 class="mb-0">{{ \App\Models\Appointment::where('status', 'pending')->count() }}</h3>
                    <small class="text-muted">En attente</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-success bg-opacity-10">
                <div class="card-body text-center">
                    <h3 class="mb-0">{{ \App\Models\Appointment::where('status', 'confirmed')->count() }}</h3>
                    <small class="text-muted">Confirmés</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-danger bg-opacity-10">
                <div class="card-body text-center">
                    <h3 class="mb-0">{{ \App\Models\Appointment::where('status', 'cancelled')->count() }}</h3>
                    <small class="text-muted">Annulés</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm bg-info bg-opacity-10">
                <div class="card-body text-center">
                    <h3 class="mb-0">{{ \App\Models\Appointment::where('status', 'completed')->count() }}</h3>
                    <small class="text-muted">Terminés</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection