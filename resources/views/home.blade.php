@extends('layouts.app')

@section('content')
<section class="hero-section position-relative" style="min-height: 100vh; display: flex; align-items: center; background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.3)), url('{{ asset("images/PURE1.png") }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container text-center text-white position-relative z-1">
        <p class="text-uppercase small fw-light tracking-wide mb-3" style="letter-spacing: 3px;">
            Nous sommes une clinique orthodontique et esthétique premium
        </p>
        <h1 class="display-1 fw-light mb-4">
            Soins de luxe <span class="fw-bold">personnalisés</span>
        </h1>
        <p class="lead mb-5">Pour ceux qui ne se contentent de rien d'ordinaire.</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            <a href="{{ route('appointments.create') }}" class="btn btn-light rounded-pill px-5 py-3 fw-bold" style="background: white; color: #002093; transition: all 0.3s;">
                Prendre rendez-vous
            </a>
            <a href="{{ route('services') }}" class="btn btn-outline-light rounded-pill px-5 py-3 fw-bold" style="border: 2px solid white; transition: all 0.3s;">
                Nos services
            </a>
        </div>
    </div>
</section>

<!-- Soft. Defined Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-3 fw-light text-dark">
                    Doux.<br>
                    <span class="fw-bold" style="color: #002093;">Défini.</span>
                </h2>
                <div class="border-bottom my-4" style="width: 80px; height: 3px; background: #002093;"></div>
                <p class="lead text-secondary">
                    Nous combinons l'ingénierie de précision avec la vision artistique pour créer des sourires à la fois 
                    naturellement beaux et structurellement parfaits.
                </p>
                <p class="text-secondary">
                    Notre approche va au-delà de la dentisterie traditionnelle — nous sommes architectes de confiance, 
                    sculpteurs d'assurance et partenaires dans votre cheminement vers un sourire radieux.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                 
                    <img src="{{ asset('images/clinic2.jpg') }}" 
                         alt="Patiente souriante" 
                         class="img-fluid rounded-4 shadow"
                         style="width: 100%; height: auto; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 text-white p-3 rounded-4 shadow-lg m-3" style="background: #002093;">
                        <div class="h2 fw-bold mb-0">5000+</div>
                        <small>Sourires transformés</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <h2 class="text-center display-4 fw-light mb-3">Soins experts <span style="color: #002093;" class="fw-bold">pour chaque sourire</span></h2>
        <p class="text-center text-secondary mb-5" style="max-width: 700px; margin: 0 auto 3rem auto;">
            Nous offrons un éventail complet de traitements – chacun adapté pour élever votre santé, votre confiance et votre beauté naturelle.
        </p>
        
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center p-4 rounded-4 shadow-sm" style="transition: all 0.3s; background: #f8f9ff;">
                
                    <h4 class="h5 fw-bold">Dentisterie esthétique</h4>
                    <p class="text-secondary small">Facettes, collage et makeovers du sourire</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center p-4 rounded-4 shadow-sm" style="transition: all 0.3s; background: #f8f9ff;">
                  
                    <h4 class="h5 fw-bold">Orthodontie</h4>
                    <p class="text-secondary small">Bagues et aligneurs transparents</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center p-4 rounded-4 shadow-sm" style="transition: all 0.3s; background: #f8f9ff;">
                    
                    <h4 class="h5 fw-bold">Implantologie</h4>
                    <p class="text-secondary small">Remplacement permanent des dents</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="service-card text-center p-4 rounded-4 shadow-sm" style="transition: all 0.3s; background: #f8f9ff;">
                 
                    <h4 class="h5 fw-bold">Blanchiment</h4>
                    <p class="text-secondary small">Blanchiment dentaire professionnel</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Banner -->
<section class="py-5" style="background: linear-gradient(135deg, #002093, #002093);">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6">
                <div class="stat-number display-4 fw-bold text-white">15+</div>
                <div class="text-white-50">Années d'expérience</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number display-4 fw-bold text-white">98%</div>
                <div class="text-white-50">Satisfaction patient</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number display-4 fw-bold text-white">5000+</div>
                <div class="text-white-50">Sourires transformés</div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-number display-4 fw-bold text-white">17</div>
                <div class="text-white-50">Experts certifiés</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5" style="background: #f0f4ff;">
    <div class="container">
        <h2 class="text-center display-4 fw-light mb-3">Histoires vraies. <span style="color: #002093;" class="fw-bold">Sourires réels.</span></h2>
        <p class="text-center text-secondary mb-5" style="max-width: 700px; margin: 0 auto 3rem auto;">
            Rien n'est plus éloquent que la voix de ceux qui ont vécu nos services par eux-mêmes.
        </p>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 shadow-sm" style="background: white;">
                    <div class="d-flex align-items-center mb-3">
                       
                        <div>
                            <div class="fw-bold">Rihab</div>
                            <div style="color: #ffc107;">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "Mon sourire est complètement transformé. L'équipe de Pure Smiles est vraiment exceptionnelle."
                    </p>
                    <div class="small mt-2" style="color: #3181d1;">Orthodontie</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 shadow-sm" style="background: white;">
                    <div class="d-flex align-items-center mb-3">
                        
                        <div>
                            <div class="fw-bold">Yassine</div>
                            <div style="color: #ffc107;">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "Professionnel, attentionné et artistique. Les facettes qu'ils ont créées ont changé ma vie."
                    </p>
                    <div class="small mt-2" style="color: #3181d1;">Dentisterie esthétique</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card p-4 rounded-4 shadow-sm" style="background: white;">
                    <div class="d-flex align-items-center mb-3">
                       
                        <div>
                            <div class="fw-bold">Sophia</div>
                            <div style="color: #ffc107;">★★★★★</div>
                        </div>
                    </div>
                    <p class="text-secondary fst-italic">
                        "La meilleure expérience dentaire que j'aie jamais eue. Une technologie de pointe."
                    </p>
                    <div class="small mt-2" style="color: #3181d1;">Implants</div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection