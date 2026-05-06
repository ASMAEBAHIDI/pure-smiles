@extends('layouts.app')

@section('title', 'Our Team - Pure Smiles')
@section('description', 'Meet our expert dental team')

@section('content')
<div class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Meet our <span class="text-pure-600">Experts</span>
            </h1>
            <p class="text-xl text-gray-600">Our team of dedicated professionals brings precision, empathy, and artistry to every treatment</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($doctors as $doctor)
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition">
                <div class="bg-pure-100 h-48 flex items-center justify-center">
                    @if($doctor->photo)
                        <img src="{{ asset('storage/' . $doctor->photo) }}" alt="{{ $doctor->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-6xl">👨‍⚕️</span>
                    @endif
                </div>
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-1">{{ $doctor->name }}</h2>
                    <p class="text-pure-600 font-semibold mb-3">{{ $doctor->specialty }}</p>
                    <p class="text-gray-600 mb-4">{{ Str::limit($doctor->bio, 120) }}</p>
                    <div class="flex justify-between items-center text-sm">
                        <span class="text-gray-500">🎓 {{ $doctor->experience_years }} years experience</span>
                        <span class="text-pure-600">⭐ {{ $doctor->experience_years * 10 }}+ patients</span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center py-12">
                <p class="text-gray-500">No doctors found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection