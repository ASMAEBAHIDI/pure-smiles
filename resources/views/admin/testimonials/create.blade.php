@extends('layouts.admin')

@section('title', 'Ajouter un Témoignage')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Ajouter un témoignage</h1>
        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary">
             Retour
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom du patient *</label>
                        <input type="text" name="patient_name" class="form-control @error('patient_name') is-invalid @enderror" required>
                        @error('patient_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Traitement reçu</label>
                        <input type="text" name="treatment" class="form-control @error('treatment') is-invalid @enderror" placeholder="Ex: Orthodontie, Implants...">
                        @error('treatment') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Note *</label>
                        <select name="rating" class="form-select @error('rating') is-invalid @enderror" required>
                            <option value="5">★★★★★ (5 étoiles)</option>
                            <option value="4">★★★★☆ (4 étoiles)</option>
                            <option value="3">★★★☆☆ (3 étoiles)</option>
                            <option value="2">★★☆☆☆ (2 étoiles)</option>
                            <option value="1">★☆☆☆☆ (1 étoile)</option>
                        </select>
                        @error('rating') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Photo du patient</label>
                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" accept="image/*">
                        @error('photo') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-12">
                        <label class="form-label">Témoignage *</label>
                        <textarea name="content" rows="5" class="form-control @error('content') is-invalid @enderror" required placeholder="Partagez votre expérience..."></textarea>
                        @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Statut</label>
                        <select name="is_active" class="form-control">
                            <option value="1">Publié (visible sur le site)</option>
                            <option value="0">Masqué (non visible)</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-4">Enregistrer</button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-secondary px-4">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection