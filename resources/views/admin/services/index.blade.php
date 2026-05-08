@extends('layouts.admin')

@section('title', 'Gestion des Services')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Gestion des Services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
            Ajouter un service
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>-</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Durée</th>
                            <th>Ordre</th>
                            <th>Statut</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>-</td>
                            <td><strong>{{ $service->name }}</strong></td>
                            <td>{{ Str::limit($service->description, 50) }}</td>
                            <td>
                                @if($service->price_min && $service->price_max)
                                    {{ number_format($service->price_min) }} - {{ number_format($service->price_max) }} DH
                                @else
                                    <span class="text-muted">Sur devis</span>
                                @endif
                            </td>
                            <td>
                                @if($service->duration_minutes)
                                    {{ $service->duration_minutes }} min
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $service->order ?? '-' }}</td>
                            <td>
                                @if($service->is_active)
                                    <span class="badge bg-success">Actif</span>
                                @else
                                    <span class="badge bg-secondary">Inactif</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Supprimer ce service ?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-4">Aucun service trouvé.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection