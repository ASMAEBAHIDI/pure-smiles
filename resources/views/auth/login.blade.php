@extends('layouts.app')

@section('title', 'Connexion - Pure Smiles')

@section('content')
<section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%); min-height: 80vh;">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                   
                    <h1 class="display-4 fw-light mb-2">Bienvenue<span class="fw-bold" style="color: #002093;"> Pure Smiles</span></h1>
                    <p class="lead text-secondary">Connectez-vous à votre espace administration</p>
                </div>

                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-5">
                        <!-- Session Status -->
                        @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i> {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-triangle me-2"></i>
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-4">
                                <label for="email" class="form-label fw-semibold">Adresse email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 rounded-start-3">
                                        <i class="fas fa-envelope" style="color: #002093;"></i>
                                    </span>
                                    <input id="email" 
                                           type="email" 
                                           class="form-control form-control-lg border-start-0 rounded-end-3 @error('email') is-invalid @enderror" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required 
                                           autofocus 
                                           >
                                </div>
                                @error('email')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <label for="password" class="form-label fw-semibold">Mot de passe</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 rounded-start-3">
                                        <i class="fas fa-lock" style="color: #002093;"></i>
                                    </span>
                                    <input id="password" 
                                           type="password" 
                                           class="form-control form-control-lg border-start-0 rounded-end-3 @error('password') is-invalid @enderror" 
                                           name="password" 
                                           required>
                                </div>
                                @error('password')
                                    <small class="text-danger mt-1">{{ $message }}</small>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                                <label class="form-check-label" for="remember_me">
                                    Se souvenir de moi
                                </label>
                            </div>

                            <!-- Buttons -->
                            <div class="d-grid gap-3">
                                <button type="submit" class="btn btn-lg py-3 fw-bold text-white rounded-pill" style="background: linear-gradient(135deg, #002093 0%, #001a6e 100%);">
                                    <i class="fas fa-sign-in-alt me-2"></i> Se connecter
                                </button>
                            </div>

                            <!-- Forgot Password -->
                            <div class="text-center mt-4">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-decoration-none small" style="color: #002093;">
                                        <i class="fas fa-key me-1"></i> Mot de passe oublié ?
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</section>
@endsection