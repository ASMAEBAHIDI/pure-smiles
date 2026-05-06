<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pure Smiles - @yield('title', 'Soins Dentaires de Luxe')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm">
    <div class="container">
        <!-- Logo + Marque -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="fw-bold fs-3">
                <span style="color: #3181d1;">Pure</span><span style="color: #4a5568;">Smiles</span>
            </span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('specialists') }}">Spécialistes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('calculator') }}">Calculateur</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('testimonials') }}">Témoignages</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <a href="{{ route('appointments.create') }}" class="btn rounded-pill px-4 py-2 text-white" style="background: linear-gradient(135deg, #3181d1 0%, #3181d1 100%);">
                Prendre rendez-vous
            </a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main style="margin-top: 76px;">
    @yield('content')
</main>

<!-- Footer -->
<footer class="text-white py-5 mt-5" style="background: #1a1a2e;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('images/logo-white.png') }}" alt="Celestia Smiles Logo" class="me-2" style="height: 35px; width: auto;" onerror="this.style.display='none'">
                    <h4 class="font-serif mb-0">
                        <span style="color: #3181d1;">Pure</span><span class="text-white">Smiles</span>
                    </h4>
                </div>
                <p class="text-white-50">Clinique orthodontique et esthétique premium créant des sourires confiants.</p>
            </div>
            <div class="col-md-2 mb-4">
                <h5 class="text-white mb-3">Liens rapides</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none">Accueil</a></li>
                    <li><a href="{{ route('services') }}" class="text-white-50 text-decoration-none">Services</a></li>
                    <li><a href="{{ route('specialists') }}" class="text-white-50 text-decoration-none">Spécialistes</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white-50 text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="text-white mb-3">Contact</h5>
                <ul class="list-unstyled text-white-50">
                    <li>📍 123 Avenue Dentaire, Paris</li>
                    <li>📞 +33 (0)1 23 45 67 89</li>
                    <li>✉️ contact@puresmiles.com</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5 class="text-white mb-3">Horaires</h5>
                <ul class="list-unstyled text-white-50">
                    <li>Lun-Ven: 9h - 19h</li>
                    <li>Sam: 10h - 17h</li>
                    <li>Dim: Fermé</li>
                </ul>
            </div>
        </div>
        <hr class="bg-secondary">
        <div class="text-center text-white-50 pt-3">
            &copy; {{ date('Y') }} Pure Smiles. Tous droits réservés.
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>