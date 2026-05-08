@extends('layouts.app')

@section('title', 'Témoignages - Pure Smiles')

@section('content')

<section class="py-5 position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)), url('{{ asset('images/t2.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container py-5 position-relative z-1">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3 text-white">Histoires vraies. <span class="fw-bold" style="color: #002093;">Sourires réels.</span></h1>
            <p class="lead text-white-50">Rien n'est plus éloquent que la voix de ceux qui ont vécu nos services par eux-mêmes.</p>
        </div>
        
        <div class="row g-4">
            <!-- Témoignage 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "Une expérience incroyable ! L'équipe de Pure Smiles a complètement transformé mon sourire. Je ne peux plus m'arrêter de sourire !"
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Farah</strong>
                            <div class="text-dark small">Orthodontie</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Témoignage 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "Professionnel, attentionné et artistique. Les facettes qu'ils ont créées ont changé ma vie. Je recommande vivement !"
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Youssef</strong>
                            <div class="text-dark small">Dentisterie Esthétique</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Témoignage 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "La meilleure clinique dentaire que j'ai jamais visitée. Un établissement très moderne et propre. Le personnel est incroyable !"
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Sara</strong>
                            <div class="text-dark small">Implants Dentaires</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="row g-4 mt-2">
            <!-- Témoignage 4 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "Je recommande Pure Smiles à 100% ! Des experts passionnés qui transforment les sourires avec talent et bienveillance."
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Yassine</strong>
                            <div class="text-dark small">Orthodontie</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Témoignage 5 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "Un grand merci à toute l'équipe pour leur professionnalisme et leur gentillesse. Le résultat est impeccable, je suis ravie !"
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Fatima Zahra</strong>
                            <div class="text-dark small">Blanchiment</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Témoignage 6 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-lg h-100" style="background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px);">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3">
                            <span class="fs-4">★★★★★</span>
                        </div>
                        <p class="fst-italic text-secondary">
                            "Le Dr. Ahmed est un véritable artiste. Mes implants sont parfaits et naturels. Service exceptionnel du début à la fin."
                        </p>
                        <div class="mt-3">
                            <strong class="fs-5">Houda</strong>
                            <div class="text-dark small">Implantologie</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn rounded-pill px-5 py-3 fw-bold text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                Partagez votre histoire 
            </a>
        </div>
    </div>
</section>
@endsection