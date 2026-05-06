<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pure Smiles - @yield('title', 'Luxury Dental Care')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <span>Celestia</span><span>Smiles</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('specialists') }}">Specialists</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('calculator') }}">Calculator</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <a href="{{ route('appointments.create') }}" class="btn btn-primary-celestia">Schedule a visit</a>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-dark text-white py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h4 class="font-serif mb-3">Celestia Smiles</h4>
                <p class="text-secondary">Premium orthodontic and aesthetic clinic crafting confident smiles.</p>
            </div>
            <div class="col-md-2 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-secondary text-decoration-none">Home</a></li>
                    <li><a href="{{ route('services') }}" class="text-secondary text-decoration-none">Services</a></li>
                    <li><a href="{{ route('specialists') }}" class="text-secondary text-decoration-none">Specialists</a></li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Contact</h5>
                <ul class="list-unstyled text-secondary">
                    <li>📍 123 Dental Avenue</li>
                    <li>📞 +1 (555) 123-4567</li>
                    <li>✉️ hello@celestiasmiles.com</li>
                </ul>
            </div>
            <div class="col-md-3 mb-4">
                <h5>Hours</h5>
                <ul class="list-unstyled text-secondary">
                    <li>Mon-Fri: 9am - 7pm</li>
                    <li>Sat: 10am - 5pm</li>
                    <li>Sun: Closed</li>
                </ul>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>