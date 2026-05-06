@extends('layouts.app')

@section('title', 'Book an Appointment - Celestia Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Schedule a <span class="fw-bold">Visit</span></h1>
            <p class="lead text-secondary">Book your consultation with our expert team</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('appointments.store') }}" method="POST">
                            @csrf
                            
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label class="form-label">Full Name *</label>
                                    <input type="text" name="patient_name" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Email *</label>
                                    <input type="email" name="patient_email" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Phone *</label>
                                    <input type="tel" name="patient_phone" class="form-control" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Doctor *</label>
                                    <select name="doctor_id" class="form-select" required>
                                        <option value="">Select a doctor</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }} - {{ $doctor->specialty }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Service *</label>
                                    <select name="service_id" class="form-select" required>
                                        <option value="">Select a service</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Date *</label>
                                    <input type="date" name="appointment_date" class="form-control" required min="{{ date('Y-m-d') }}">
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label">Preferred Time *</label>
                                    <select name="appointment_time" class="form-select" required>
                                        <option value="">Select time</option>
                                        <option value="09:00">09:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label">Additional Notes</label>
                                    <textarea name="notes" class="form-control" rows="3" placeholder="Any specific concerns or questions..."></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary-celestia w-100 py-3">
                                        Book Appointment →
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection