@extends('layouts.admin')

@section('title', 'Modifier le Service')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Modifier le service</h1>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">
            Retour
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.services.update', $service) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom du service *</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                   

                    <div class="col-12">
                        <label class="form-label">Description courte *</label>
                        <textarea name="description" rows="3" class="form-control @error('description') is-invalid @enderror" required>{{ old('description', $service->description) }}</textarea>
                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Description longue</label>
                        <textarea name="long_description" rows="5" class="form-control @error('long_description') is-invalid @enderror">{{ old('long_description', $service->long_description) }}</textarea>
                        @error('long_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Prix min (DH)</label>
                        <input type="number" name="price_min" class="form-control @error('price_min') is-invalid @enderror" value="{{ old('price_min', $service->price_min) }}" step="1">
                        @error('price_min') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Prix max (DH)</label>
                        <input type="number" name="price_max" class="form-control @error('price_max') is-invalid @enderror" value="{{ old('price_max', $service->price_max) }}" step="1">
                        @error('price_max') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-4">
                        <label class="form-label">Durée (minutes)</label>
                        <input type="number" name="duration_minutes" class="form-control @error('duration_minutes') is-invalid @enderror" value="{{ old('duration_minutes', $service->duration_minutes) }}">
                        @error('duration_minutes') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ordre d'affichage</label>
                        <input type="number" name="order" class="form-control" value="{{ old('order', $service->order) }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Photo du service</label>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @if($service->image)
                            <small class="text-muted">Photo actuelle : {{ $service->image }}</small>
                        @endif
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Statut</label>
                        <select name="is_active" class="form-control">
                            <option value="1" {{ $service->is_active ? 'selected' : '' }}>Actif</option>
                            <option value="0" {{ !$service->is_active ? 'selected' : '' }}>Inactif</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-4">Mettre à jour</button>
                        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary px-4">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection