@extends('layout.app')

@section('title', 'Admin Dashboard - Celestia Smiles')

@section('content')
<div class="pt-24 pb-20 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold">Admin Dashboard</h1>
            <div class="flex gap-4">
                <a href="{{ route('home') }}" class="text-celestia-600 hover:text-celestia-700">← Back to site</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-700">Logout</button>
                </form>
            </div>
        </div>
        
        <!-- Stats Cards -->
        <div class="grid md:grid-cols-5 gap-6 mb-8">
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="text-2xl font-bold text-celestia-600">{{ $totalAppointments }}</div>
                <div class="text-gray-600">Total Appointments</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="text-2xl font-bold text-orange-600">{{ $pendingAppointments }}</div>
                <div class="text-gray-600">Pending</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="text-2xl font-bold text-celestia-600">{{ $totalSpecialists }}</div>
                <div class="text-gray-600">Specialists</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="text-2xl font-bold text-celestia-600">{{ $totalServices }}</div>
                <div class="text-gray-600">Services</div>
            </div>
            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="text-2xl font-bold text-celestia-600">{{ $totalTestimonials }}</div>
                <div class="text-gray-600">Testimonials</div>
            </div>
        </div>
        
        <!-- Navigation Cards -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <a href="{{ route('admin.specialists.index') }}" class="bg-gradient-to-r from-celestia-500 to-celestia-700 text-white rounded-xl p-6 hover:shadow-lg transition">
                <div class="text-2xl mb-2">👨‍⚕️</div>
                <div class="font-semibold">Manage Specialists</div>
                <div class="text-sm opacity-90">Add, edit, or remove team members</div>
            </a>
            <a href="{{ route('admin.services.index') }}" class="bg-gradient-to-r from-green-500 to-green-700 text-white rounded-xl p-6 hover:shadow-lg transition">
                <div class="text-2xl mb-2">🦷</div>
                <div class="font-semibold">Manage Services</div>
                <div class="text-sm opacity-90">Edit treatment offerings</div>
            </a>
            <a href="{{ route('admin.testimonials.index') }}" class="bg-gradient-to-r from-yellow-500 to-yellow-700 text-white rounded-xl p-6 hover:shadow-lg transition">
                <div class="text-2xl mb-2">⭐</div>
                <div class="font-semibold">Manage Testimonials</div>
                <div class="text-sm opacity-90">Edit patient reviews</div>
            </a>
            <a href="{{ route('admin.appointments.index') }}" class="bg-gradient-to-r from-purple-500 to-purple-700 text-white rounded-xl p-6 hover:shadow-lg transition">
                <div class="text-2xl mb-2">📅</div>
                <div class="font-semibold">Manage Appointments</div>
                <div class="text-sm opacity-90">View and update status</div>
            </a>
        </div>
        
        <!-- Recent Appointments -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h2 class="text-xl font-semibold">Recent Appointments</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach($recentAppointments as $appointment)
                        <tr>
                            <td class="px-6 py-4">{{ $appointment->name }}</td>
                            <td class="px-6 py-4">{{ $appointment->email }}</td>
                            <td class="px-6 py-4">{{ $appointment->preferred_date }}</td>
                            <td class="px-6 py-4">
                                <span class="px-2 py-1 text-xs rounded-full 
                                    @if($appointment->status == 'pending') bg-yellow-100 text-yellow-800
                                    @elseif($appointment->status == 'confirmed') bg-green-100 text-green-800
                                    @elseif($appointment->status == 'cancelled') bg-red-100 text-red-800
                                    @else bg-gray-100 text-gray-800 @endif">
                                    {{ ucfirst($appointment->status) }}
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('admin.appointments.edit', $appointment) }}" class="text-celestia-600 hover:text-celestia-800">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection