@extends('layout.app')

@section('title', 'Treatment Calculator - Celestia Smiles')

@section('content')
<section class="pt-32 pb-20 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-light mb-4">Treatment <span class="font-bold">Calculator</span></h1>
            <p class="text-gray-600 text-lg">Plan your smile journey. Estimate costs and treatment time based on your smile goals.</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Formulaire -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Plan your treatment</h2>
                
                <div class="space-y-6">
                    <div>
                        <label class="block font-semibold mb-3">01. Select goals</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" name="goals" value="Straighter teeth" class="rounded text-celestia-600">
                                <span class="ml-2">Straighter teeth</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="goals" value="Replace missing tooth" class="rounded text-celestia-600">
                                <span class="ml-2">Replace missing tooth</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="goals" value="Whitening" class="rounded text-celestia-600">
                                <span class="ml-2">Whitening</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" name="goals" value="Complete makeover" class="rounded text-celestia-600">
                                <span class="ml-2">Complete makeover</span>
                            </label>
                        </div>
                    </div>
                    
                    <div>
                        <label class="block font-semibold mb-3">02. Preferred method</label>
                        <select id="preferred-method" class="w-full border-gray-300 rounded-lg focus:ring-celestia-500 focus:border-celestia-500">
                            <option value="Aligners">Aligners</option>
                            <option value="Veneers">Veneers</option>
                            <option value="Implants">Implants</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block font-semibold mb-3">03. Loyalty program</label>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="loyalty" value="Celestia member" class="text-celestia-600">
                                <span class="ml-2">Celestia member (10% off)</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="loyalty" value="Not enrolled" class="text-celestia-600">
                                <span class="ml-2">Not enrolled</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Résultats -->
            <div class="bg-celestia-900 text-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold mb-6">Your estimate</h2>
                
                <div class="space-y-6">
                    <div>
                        <div class="flex justify-between mb-2">
                            <span>Treatment complexity</span>
                            <span id="complexity-value-display">60%</span>
                        </div>
                        <div class="w-full bg-white/20 rounded-full h-2">
                            <div id="complexity-value" class="bg-white h-2 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    
                    <div class="border-t border-white/20 pt-4">
                        <div class="flex justify-between">
                            <span>Treatment time (est.)</span>
                            <span id="time-value" class="font-semibold">3 weeks</span>
                        </div>
                    </div>
                    
                    <div class="border-t border-white/20 pt-4">
                        <div class="flex justify-between">
                            <span>Estimated cost</span>
                            <span id="cost-value" class="font-semibold text-xl">$2,400 – $4,900</span>
                        </div>
                        <p class="text-sm opacity-75 mt-1">*Estimate only. Final cost in clinic.</p>
                    </div>
                    
                    <div class="border-t border-white/20 pt-6">
                        <h3 class="font-semibold mb-3">Recommended specialists</h3>
                        <div class="space-y-2">
                            @foreach($specialists->take(2) as $specialist)
                            <div class="flex justify-between items-center">
                                <span>{{ $specialist->name }}</span>
                                <span class="text-sm opacity-75">{{ $specialist->specialty }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <div class="pt-4">
                        <a href="{{ route('contact') }}" class="block w-full text-center bg-white text-celestia-900 py-3 rounded-lg hover:bg-gray-100 transition font-semibold">
                            Schedule a consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection