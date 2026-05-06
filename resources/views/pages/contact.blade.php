@extends('layouts.app')

@section('title', 'Contact - Pure Smiles')
@section('description', 'Contactez Pure Smiles pour vos questions dentaires')

@section('content')
<div class="py-20 bg-gradient-to-br from-blue-50 to-white">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Contactez<span class="text-pure-600">-nous</span>
            </h1>
            <p class="text-xl text-gray-600">Nous sommes là pour répondre à toutes vos questions</p>
        </div>

        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Informations de contact -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold mb-6">Nos coordonnées</h2>
                
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-pure-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">📍</span>
                        </div>
                        <div>
                            <h3 class="font-semibold">Adresse</h3>
                            <p class="text-gray-600">123 Rue des Dents, 75001 Paris</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-pure-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">📞</span>
                        </div>
                        <div>
                            <h3 class="font-semibold">Téléphone</h3>
                            <p class="text-gray-600">+33 (0)1 23 45 67 89</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-pure-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">✉️</span>
                        </div>
                        <div>
                            <h3 class="font-semibold">Email</h3>
                            <p class="text-gray-600">contact@puresmiles.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-pure-100 rounded-full flex items-center justify-center">
                            <span class="text-2xl">🕐</span>
                        </div>
                        <div>
                            <h3 class="font-semibold">Horaires</h3>
                            <p class="text-gray-600">Lun-Ven : 9h - 18h</p>
                            <p class="text-gray-600">Sam : 10h - 16h</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <h2 class="text-2xl font-bold mb-6">Envoyez-nous un message</h2>
                
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Nom complet *</label>
                            <input type="text" name="name" required class="w-full border-gray-300 rounded-lg focus:ring-pure-500 focus:border-pure-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full border-gray-300 rounded-lg focus:ring-pure-500 focus:border-pure-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Téléphone *</label>
                            <input type="tel" name="phone" required class="w-full border-gray-300 rounded-lg focus:ring-pure-500 focus:border-pure-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium mb-2">Message *</label>
                            <textarea name="message" rows="5" required class="w-full border-gray-300 rounded-lg focus:ring-pure-500 focus:border-pure-500"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-pure-600 text-white py-3 rounded-lg hover:bg-pure-700 transition">
                            Envoyer le message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection