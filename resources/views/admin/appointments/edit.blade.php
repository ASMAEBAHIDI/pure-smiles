@extends('layouts.admin')

@section('title', 'Modifier le Rendez-vous')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h2">Modifier le rendez-vous</h1>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Retour
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('admin.appointments.update', $appointment) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nom du patient *</label>
                        <input type="text" name="patient_name" class="form-control" value="{{ old('patient_name', $appointment->patient_name) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email *</label>
                        <input type="email" name="patient_email" class="form-control" value="{{ old('patient_email', $appointment->patient_email) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Téléphone *</label>
                        <input type="text" name="patient_phone" class="form-control" value="{{ old('patient_phone', $appointment->patient_phone) }}" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Médecin *</label>
                        <select name="doctor_id" class="form-select" required>
                            <option value="">Choisissez un médecin</option>
                            @foreach($doctors as $doctor)
                                <option value="{{ $doctor->id }}" {{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>
                                    {{ $doctor->name }} - {{ $doctor->specialty }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Service *</label>
                        <select name="service_id" class="form-select" required>
                            <option value="">Choisissez un service</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" {{ $appointment->service_id == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Date *</label>
                        <input type="date" name="appointment_date" class="form-control" value="{{ old('appointment_date', $appointment->appointment_date) }}" required>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Horaire *</label>
                        <select name="appointment_time" class="form-select" required>
                            <option value="">Choisissez un horaire</option>
                            <option value="09:00" {{ $appointment->appointment_time == '09:00' ? 'selected' : '' }}>09h00</option>
                            <option value="10:00" {{ $appointment->appointment_time == '10:00' ? 'selected' : '' }}>10h00</option>
                            <option value="11:00" {{ $appointment->appointment_time == '11:00' ? 'selected' : '' }}>11h00</option>
                            <option value="12:00" {{ $appointment->appointment_time == '12:00' ? 'selected' : '' }}>12h00</option>
                            <option value="14:00" {{ $appointment->appointment_time == '14:00' ? 'selected' : '' }}>14h00</option>
                            <option value="15:00" {{ $appointment->appointment_time == '15:00' ? 'selected' : '' }}>15h00</option>
                            <option value="16:00" {{ $appointment->appointment_time == '16:00' ? 'selected' : '' }}>16h00</option>
                            <option value="17:00" {{ $appointment->appointment_time == '17:00' ? 'selected' : '' }}>17h00</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Statut *</label>
                        <select name="status" class="form-select" required>
                            <option value="pending" {{ $appointment->status == 'pending' ? 'selected' : '' }}>En attente</option>
                            <option value="confirmed" {{ $appointment->status == 'confirmed' ? 'selected' : '' }}>Confirmé</option>
                            <option value="cancelled" {{ $appointment->status == 'cancelled' ? 'selected' : '' }}>Annulé</option>
                            <option value="completed" {{ $appointment->status == 'completed' ? 'selected' : '' }}>Terminé</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Notes</label>
                        <textarea name="notes" class="form-control" rows="3">{{ old('notes', $appointment->notes) }}</textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-4">Mettre à jour</button>
                        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary px-4">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection