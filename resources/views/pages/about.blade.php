@extends('layouts.app')

@section('title', 'À propos - Pure Smiles')
@section('description', 'Découvrez Pure Smiles, notre mission, notre équipe d'experts et nos soins dentaires premium.')

@section('content')

<section class="py-5 position-relative" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5)), url('{{ asset('images/clinic.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed; min-height: 500px;">
    <div class="container py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="display-3 fw-light mb-3 text-white">Révélez l'excellence.<br><span class="fw-bold">Découvrez la différence Pure Smiles.</span></h1>
                <p class="lead text-white-50 mt-3">Une clinique où l'art dentaire rencontre la précision médicale</p>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="display-4 fw-light mb-3">Notre <span style="color: #002093;" class="fw-bold">Mission</span></h2>
                <div class="border-bottom mb-4 mx-auto" style="width: 80px; height: 3px; background: #002093;"></div>
                <p class="lead text-secondary">
                    Chez Pure Smiles, nous croyons que votre sourire mérite plus qu'un simple sourire parfait. 
                    Notre équipe d'experts certifiés offre une large gamme de services pour vous aider à obtenir le sourire dont vous avez toujours rêvé.
                </p>
                <p class="text-secondary">
                    De la dentisterie esthétique à l'orthodontie, nous combinons l'artistique avec la technologie avancée 
                    pour offrir des résultats exceptionnels, naturels et durables.
                </p>
                
                <div class="row mt-5 g-3 justify-content-center">
                    <div class="col-md-5 col-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background: #00209320;">
                                <span class="fs-4" style="color: #002093;">✓</span>
                            </div>
                            <div class="text-start">
                                <span class="fw-bold d-block">15+ ans</span>
                                <small class="text-muted">d'expérience</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background: #00209320;">
                                <span class="fs-4" style="color: #002093;">✓</span>
                            </div>
                            <div class="text-start">
                                <span class="fw-bold d-block">98%</span>
                                <small class="text-muted">satisfaction patient</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background: #00209320;">
                                <span class="fs-4" style="color: #002093;">✓</span>
                            </div>
                            <div class="text-start">
                                <span class="fw-bold d-block">5000+</span>
                                <small class="text-muted">sourires transformés</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-6">
                        <div class="d-flex align-items-center gap-3 p-3 bg-light rounded-3">
                            <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 50px; height: 50px; background: #00209320;">
                                <span class="fs-4" style="color: #002093;">✓</span>
                            </div>
                            <div class="text-start">
                                <span class="fw-bold d-block">17</span>
                                <small class="text-muted">experts certifiés</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-light mb-2">Notre <span style="color: #002093;" class="fw-bold">Expertise</span></h2>
            <p class="lead text-secondary">La technologie au service de votre sourire</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                  
                    <h4 class="fw-bold">Précision numérique</h4>
                    <p class="text-muted">Planification série avec impressions numériques pour des résultats parfaits</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                   
                    <h4 class="fw-bold">Technologie moderne</h4>
                    <p class="text-muted">Équipement de pointe pour des traitements précis et efficaces</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center p-4 bg-white rounded-4 shadow-sm h-100">
                  
                    <h4 class="fw-bold">Art dentaire</h4>
                    <p class="text-muted">Placement de facettes en porcelaine pour un sourire harmonieux</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Quote Section avec image de fond -->
<section class="py-5 position-relative" style="background: linear-gradient(rgba(0, 32, 147, 0.85), rgba(0, 32, 147, 0.75)), url('{{ asset('images/clinic1.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container text-center text-white py-5">
        <div class="max-w-3xl mx-auto">
           
            <h2 class="display-4 fw-light mb-4">Tous les sourires n'ont pas besoin d'être corrigés,<br>certains ont besoin de <span class="fw-bold">vision</span></h2>
            <h3 class="display-5 fw-light mt-4">Soins de luxe <span class="fw-bold">personnalisés</span></h3>
            <p class="lead mt-3">Nous sommes une clinique orthodontique et esthétique premium<br>créant des sourires confiants pour ceux qui ne se contentent de rien d'ordinaire.</p>
            <a href="{{ route('appointments.create') }}" class="btn btn-light rounded-pill px-5 py-3 mt-4 fw-bold" style="color: #002093;">
                Prendre rendez-vous
            </a>
        </div>
    </div>
</section>


<style>
.hover-shadow {
    transition: transform 0.3s, box-shadow 0.3s;
}
.hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.1) !important;
}
</style>