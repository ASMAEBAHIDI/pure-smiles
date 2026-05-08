<nav class="fixed w-full z-50 bg-white/95 backdrop-blur-md shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center space-x-3">
    
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logoP.svg.png') }}" alt="Pure Smiles Logo" class="h-10 w-auto">
                </a>
            
                <a href="/" class="text-2xl font-serif font-bold text-celestia-800">
                    Pure<span class="text-celestia-500">Smiles</span>
                </a>
            </div>
            
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition">Home</a>
                <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 transition">Services</a>
                <a href="{{ route('specialists') }}" class="text-gray-700 hover:text-blue-600 transition">Specialists</a>
                <a href="{{ route('calculator') }}" class="text-gray-700 hover:text-blue-600 transition">Calculator</a>
                <a href="{{ route('testimonials') }}" class="text-gray-700 hover:text-blue-600 transition">Testimonials</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 transition">Contact</a>
                @auth
                    @if(auth()->user()->isAdmin())
                        <a href="{{ route('admin.dashboard') }}" class="text-celestia-600 font-semibold">Admin</a>
                    @endif
                @endauth
            </div>
            
            <div class="flex items-center space-x-4">
                <a href="{{ route('appointments.create') }}" class="bg-celestia-600 text-white px-6 py-2 rounded-full hover:bg-celestia-700 transition">
                    Schedule a visit
                </a>
                @auth
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-celestia-600">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-celestia-600">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>