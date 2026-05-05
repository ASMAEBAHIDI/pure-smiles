@extends('layout.app')

@section('title', 'Celestia Smiles - Luxury Dental Care')
@section('description', 'Premium orthodontic and aesthetic clinic crafting confident smiles with personalized care.')

@section('content')
<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center bg-cover bg-center" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.2)), url('/images/hero-bg.jpg');">
    <div class="text-center text-white px-4">
        <h1 class="text-5xl md:text-7xl font-light mb-4">Luxury care <span class="font-bold">made personal</span></h1>
        <p class="text-xl md:text-2xl mb-8 font-light">We're a premium orthodontic and aesthetic clinic</p>
        <div class="flex gap-4 justify-center">
            <a href="{{ route('services') }}" class="bg-white text-celestia-800 px-8 py-3 rounded-full hover:bg-gray-100 transition font-semibold">Discover</a>
            <a href="{{ route('contact') }}" class="border-2 border-white text-white px-8 py-3 rounded-full hover:bg-white hover:text-celestia-800 transition font-semibold">Schedule a visit</a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <div class="text-4xl md:text-5xl font-bold text-celestia-600">{{ $stats['experience'] }}+</div>
                <div class="text-gray-600 mt-2">Years of experience</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-celestia-600">{{ $stats['satisfaction'] }}%</div>
                <div class="text-gray-600 mt-2">Patient satisfaction</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-celestia-600">{{ $stats['smiles'] }}+</div>
                <div class="text-gray-600 mt-2">Smiles transformed</div>
            </div>
            <div>
                <div class="text-4xl md:text-5xl font-bold text-celestia-600">{{ $stats['experts'] }}</div>
                <div class="text-gray-600 mt-2">Certified experts</div>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-light mb-2">Expert care <span class="font-bold">for every smile</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">We offer a full spectrum of treatments – each tailored to elevate your health, confidence, and natural beauty.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($services as $service)
            <div class="card p-6 text-center hover:shadow-xl transition">
                <div class="w-16 h-16 bg-celestia-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">{{ $service->icon ?? '🦷' }}</span>
                </div>
                <h3 class="text-xl font-semibold mb-2">{{ $service->name }}</h3>
                <p class="text-gray-600 text-sm">{{ Str::limit($service->description, 80) }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Preview -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-light mb-2">Meet the minds <span class="font-bold">behind your smile</span> 🧠👩‍⚕️</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Our team of dedicated professionals brings precision, empathy, and artistry to every treatment.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($specialists as $specialist)
            <div class="card">
                <img src="{{ asset('storage/' . $specialist->image) }}" alt="{{ $specialist->name }}" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold">{{ $specialist->name }}</h3>
                    <p class="text-celestia-600 mb-3">{{ $specialist->title }}</p>
                    <p class="text-gray-600 text-sm">{{ Str::limit($specialist->description, 100) }}</p>
                    <div class="mt-4 pt-4 border-t">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Complexity</span>
                            <span class="font-semibold">{{ $specialist->complexity_percent }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                            <div class="bg-celestia-600 h-2 rounded-full" style="width: {{ $specialist->complexity_percent }}%"></div>
                        </div>
                        <div class="mt-2 text-sm text-gray-500">Est. time: {{ $specialist->treatment_time_weeks }} weeks</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('team') }}" class="btn-secondary">View all specialists →</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-light mb-2">Real stories. <span class="font-bold">Real smiles.</span></h2>
            <p class="text-gray-600">Nothing speaks louder than the voice of those who have experienced our services firsthand.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($testimonials as $testimonial)
            <div class="card p-6">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-celestia-100 rounded-full flex items-center justify-center">
                        <span class="text-xl">⭐</span>
                    </div>
                    <div class="ml-3">
                        <div class="font-semibold">{{ $testimonial->patient_name }}</div>
                        <div class="text-yellow-500">{{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', 5 - $testimonial->rating) }}</div>
                    </div>
                </div>
                <p class="text-gray-600 italic">"{{ $testimonial->content }}"</p>
                <div class="mt-4 text-sm text-celestia-600">{{ $testimonial->treatment }}</div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-celestia-800 text-white">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to transform your smile?</h2>
        <p class="text-xl mb-8 opacity-90">Schedule a consultation with our experts today</p>
        <a href="{{ route('contact') }}" class="inline-block bg-white text-celestia-800 px-8 py-3 rounded-full hover:bg-gray-100 transition font-semibold">
            Schedule a visit
        </a>
    </div>
</section>
@endsection