<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Pure Smiles - @yield('title', 'Dental Clinic')</title>
    <meta name="description" content="@yield('description', 'Premium dental care for your perfect smile')">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        .btn-primary {
            @apply bg-pure-600 text-white px-6 py-2 rounded-lg hover:bg-pure-700 transition duration-300;
        }
    </style>
</head>
<body class="font-sans antialiased">
    
    <!-- Navigation -->
    <nav class="bg-white shadow-md fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('home') }}" class="text-xl font-bold text-pure-600">Pure Smiles</a>
                
                <div class="hidden md:flex space-x-6">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-pure-600">Accueil</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-pure-600">Services</a>
                    <a href="{{ route('doctors') }}" class="text-gray-700 hover:text-pure-600">Docteurs</a>
                    <a href="{{ route('team') }}" class="text-gray-700 hover:text-pure-600">Équipe</a>
                    <a href="{{ route('calculator') }}" class="text-gray-700 hover:text-pure-600">Calculateur</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-pure-600">Contact</a>
                </div>
                
                <div>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-pure-600 mr-4">Dashboard</a>
                        @if(auth()->user()->is_admin)
                            <a href="{{ route('admin.dashboard') }}" class="text-pure-600 font-semibold">Admin</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-pure-600 mr-4">Connexion</a>
                        <a href="{{ route('register') }}" class="btn-primary">Inscription</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Pure Smiles</h3>
                    <p class="text-gray-400">Premium dental care for your perfect smile.</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Liens rapides</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Accueil</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white">Services</a></li>
                        <li><a href="{{ route('doctors') }}" class="hover:text-white">Docteurs</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>📞 +33 (0)1 23 45 67 89</li>
                        <li>✉️ contact@puresmiles.com</li>
                        <li>📍 123 Rue des Dents, Paris</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Horaires</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li>Lun-Ven: 9h - 18h</li>
                        <li>Sam: 10h - 16h</li>
                        <li>Dim: Fermé</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>