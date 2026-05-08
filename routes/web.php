<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Routes publiques
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('pages.about');})->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/specialists', function () {
    return view('pages.doctors');})->name('specialists');
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors');
Route::get('/team', [DoctorController::class, 'index'])->name('team');
Route::get('/testimonials', function () {
    return view('pages.testimonials');})->name('testimonials');
Route::get('/calculator', [CalculatorController::class, 'index'])->name('calculator');
Route::post('/calculator/calculate', [CalculatorController::class, 'calculate'])->name('calculator.calculate');
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact'); 
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/specialists', [App\Http\Controllers\DoctorController::class, 'index'])->name('specialists');

// Routes d'authentification (Breeze)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Inclure les routes d'authentification de Breeze
require __DIR__.'/auth.php';

// Routes admin 
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('doctors', App\Http\Controllers\Admin\DoctorController::class);
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('appointments', App\Http\Controllers\Admin\AppointmentController::class);
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('patients', App\Http\Controllers\Admin\PatientController::class);
});