@extends('layouts.app')

@section('title', 'Nos Services - Pure Smiles')

@section('content')
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-3 fw-light mb-3">Soins experts <span class="fw-bold" style="color: #002093;">pour chaque sourire</span></h1>
            <p class="lead text-secondary">Nous offrons un éventail complet de traitements – chacun adapté pour élever votre santé, votre confiance et votre beauté naturelle.</p>
        </div>
        
        <div class="row g-4">
            <!-- Orthodontie -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        
                        <h3 class="h4" style="color: #002093;">Orthodontie</h3>
                        <p class="text-secondary">Redressez vos dents avec des bagues modernes et des aligneurs transparents. Plans de traitement personnalisés pour tous les âges.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 25 000 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dentisterie Esthétique -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                      
                        <h3 class="h4" style="color: #002093;">Dentisterie Esthétique</h3>
                        <p class="text-secondary">Transformez votre sourire avec des facettes, du blanchiment et du collage. Des résultats naturels.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 8 000 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Implantologie -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                    
                        <h3 class="h4" style="color: #002093;">Implantologie</h3>
                        <p class="text-secondary">Solution permanente pour les dents manquantes. Utilisation de la technologie 3D pour un ajustement de précision.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 30 000 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Blanchiment -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                        
                        <h3 class="h4" style="color: #002093;">Blanchiment</h3>
                        <p class="text-secondary">Blanchiment dentaire professionnel pour un sourire plus éclatant. En cabinet ou à domicile.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 3 000 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Chirurgie Dentaire -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                       
                        <h3 class="h4" style="color: #002093;">Chirurgie Dentaire</h3>
                        <p class="text-secondary">Procédures chirurgicales avancées incluant extractions et greffes osseuses avec un minimum d'inconfort.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">Consultation gratuite</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Dentisterie Pédiatrique -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                       
                        <h3 class="h4" style="color: #002093;">Dentisterie Pédiatrique</h3>
                        <p class="text-secondary">Soins dentaires doux et adaptés aux enfants. Développer de bonnes habitudes dès le plus jeune âge.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 1 500 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Urgences -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                       
                        <h3 class="h4" style="color: #002093;">Urgences</h3>
                        <p class="text-secondary">Rendez-vous le jour même pour les urgences dentaires. Soulagement rapide quand vous en avez le plus besoin.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">Dès 500 DH</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Soins Préventifs -->
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100 text-center">
                    <div class="card-body p-4">
                       
                        <h3 class="h4" style="color: #002093;">Soins Préventifs</h3>
                        <p class="text-secondary">Contrôles réguliers, nettoyages et éducation à l'hygiène bucco-dentaire pour maintenir votre sourire.</p>
                        <div class="mt-3">
                            <span class="badge p-2" style="background: rgba(102, 126, 234, 0.1); color: #002093;">À partir de 800 DH</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('appointments.create') }}" class="btn rounded-pill px-5 py-3 fw-bold text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                Planifier une consultation gratuite
            </a>
        </div>
    </div>
</section>
@endsection