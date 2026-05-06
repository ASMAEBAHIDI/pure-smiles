@extends('layouts.app')

@section('title', 'Pure Smiles - Clinique Dentaire de Luxe')
@section('description', 'Soins dentaires premium pour votre sourire parfait')

@section('content')
<!-- Hero Section -->
<section class="h-screen bg-gradient-to-r from-blue-500 to-pure-500 flex items-center">
    <div class="max-w-7xl mx-auto px-4 text-center text-white">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">
            Votre Sourire <span class="text-yellow-300">Parfait</span> Commence Ici
        </h1>
        <p class="text-xl mb-8">Des soins dentaires premium avec notre équipe d'experts</p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('appointments.create') }}" class="bg-white text-pure-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition">
                Prendre RDV
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-pure-600 transition">
                Nos Services
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl font-bold text-pure-600">15+</div>
                <div class="text-gray-600">Années d'expérience</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-pure-600">98%</div>
                <div class="text-gray-600">Satisfaction patient</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-pure-600">5000+</div>
                <div class="text-gray-600">Sourires transformés</div>
            </div>
            <div>
                <div class="text-4xl font-bold text-pure-600">17</div>
                <div class="text-gray-600">Experts certifiés</div>
            </div>
        </div>
    </div>
</section>
@endsection