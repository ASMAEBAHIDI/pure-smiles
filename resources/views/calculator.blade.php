@extends('layouts.app')

@section('title', 'Calculateur de Traitement - Pure Smiles')

@section('content')
<section style="background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); padding: 120px 0 80px 0;">
    <div class="container">
        <!-- En-tête -->
        <div class="text-center mb-5">
            <small class="text-uppercase fw-bold" style="color: #3181d1; letter-spacing: 3px;">Dentisterie • Santé</small>
            <h1 class="display-3 fw-light mb-2 mt-3" style="color: #002093;">CALCULATEUR DE TRAITEMENT</h1>
            <h2 class="display-5 fw-bold mb-3">Planifiez votre parcours sourire</h2>
            <p class="lead text-secondary">Estimez les coûts et la durée du traitement en fonction de vos objectifs.<br>Interactif. Gratuit. Personnalisé.</p>
        </div>
        
        <div class="row g-5">
            <!-- Colonne de gauche - Formulaire -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg rounded-4" style="background: white;">
                    <div class="card-body p-4 p-lg-5">
                        
                        <!-- 01. Select goals -->
                        <div class="mb-4">
                            <h3 class="fw-bold mb-3" style="color: #002093;">01. Sélectionnez vos objectifs</h3>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="goal_straight" data-goal="straight" style="border-color: #667eea;">
                                <label class="form-check-label" for="goal_straight">
                                    Dents plus alignées
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="goal_missing" data-goal="missing" style="border-color: #667eea;">
                                <label class="form-check-label" for="goal_missing">
                                    Remplacer une dent manquante
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="goal_whitening" data-goal="whitening" style="border-color: #667eea;">
                                <label class="form-check-label" for="goal_whitening">
                                    Blanchiment
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="goal_makeover" data-goal="makeover" style="border-color: #667eea;">
                                <label class="form-check-label" for="goal_makeover">
                                    Makeover complet
                                </label>
                            </div>
                        </div>
                        
                        <!-- 02. Preferred method -->
                        <div class="mb-4">
                            <h3 class="fw-bold mb-3" style="color: #002093;">02. Méthode préférée</h3>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="method" id="method_aligners" value="aligners" style="border-color: #667eea;">
                                <label class="form-check-label" for="method_aligners">
                                    Aligneurs
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="method" id="method_veneers" value="veneers" style="border-color: #667eea;">
                                <label class="form-check-label" for="method_veneers">
                                    Facettes
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="method" id="method_implants" value="implants" style="border-color: #667eea;">
                                <label class="form-check-label" for="method_implants">
                                    Implants
                                </label>
                            </div>
                        </div>
                        
                        <!-- 03. Loyalty program -->
                        <div class="mb-4">
                            <h3 class="fw-bold mb-3" style="color: #002093;">03. Programme de fidélité</h3>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="loyalty" id="loyalty_member" value="member">
                                <label class="form-check-label" for="loyalty_member">
                                    Membre Pure (10% de réduction)
                                </label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="loyalty" id="loyalty_not" value="not" checked>
                                <label class="form-check-label" for="loyalty_not">
                                    Non inscrit
                                </label>
                            </div>
                        </div>
                        
                    
                        <div class="mb-4">
                            <h3 class="fw-bold mb-3" style="color: #002093;">04. Sélectionnez la dent</h3>
                            <div class="text-center p-4 bg-light rounded-4" style="background: linear-gradient(135deg, #f8f9ff 0%, #e8eeff 100%);">
                                <div class="position-relative d-inline-block">
                                    <img src="{{ asset('images/t3.png') }}" alt="Dent 360°" class="img-fluid" style="max-width: 200px; cursor: pointer;" onerror="this.src='https://cdn-icons-png.flaticon.com/512/189/189162.png'">
                                    <div class="position-absolute top-0 start-50 translate-middle-x mt-2">
                                        <span class="badge rounded-pill px-3 py-2" style="background: #3181d1;">360°</span>
                                    </div>
                                </div>
                                
                                <!-- Numéros des dents -->
                                <div class="d-flex justify-content-center gap-2 mt-3 flex-wrap">
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="1" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">1</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="2" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">2</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="3" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">3</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="4" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">4</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="5" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">5</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="6" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">6</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="7" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">7</button>
                                    <button class="btn btn-sm rounded-circle tooth-btn" data-tooth="8" style="width: 40px; height: 40px; background: #667eea20; color: #3181d1;">8</button>
                                </div>
                                <small class="text-muted mt-3 d-block" id="selected-tooth-text">Aucune dent sélectionnée</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Colonne de droite - Résultats DYNAMIQUES -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 text-white" style="background: linear-gradient(135deg, #002093 0%, #002093 100%);">
                    <div class="card-body p-4 p-lg-5">
                        <h2 class="display-5 fw-bold mb-4">Résultat</h2>
                        
                        <!-- Treatment complexity -->
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-3">Complexité du traitement</h4>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Niveau :</span>
                                <span class="fw-bold" id="complexity-value">60%</span>
                            </div>
                            <div class="progress" style="height: 10px; background: rgba(255,255,255,0.3);">
                                <div id="complexity-bar" class="progress-bar bg-white" style="width: 60%;"></div>
                            </div>
                        </div>
                        
                        <!-- Treatment time -->
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-3">Durée estimée</h4>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Durée :</span>
                                <span class="fw-bold" id="duration-value">3 semaines</span>
                            </div>
                        </div>
                        
                        <!-- Estimated cost -->
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-3">Coût estimé</h4>
                            <div class="d-flex justify-content-between">
                                <span>Prix :</span>
                                <span class="fw-bold fs-4" id="cost-value">2 400 - 4 900 DH</span>
                            </div>
                        </div>
                        
                        <!-- Recommended specialists -->
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-3">Spécialistes recommandés</h4>
                            <ul class="list-unstyled" id="specialists-list">
                                <li class="mb-2">• Dr. Ahmed</li>
                                <li class="mb-2">• Dr. Sara</li>
                                <li>• Dr. Khalil</li>
                            </ul>
                        </div>
                        
                        <!-- Recommended plan -->
                        <div class="mb-4">
                            <h4 class="fw-semibold mb-3">Plan recommandé</h4>
                            <ul class="list-unstyled" id="plan-list">
                                <li class="mb-2">• 3 implants</li>
                                <li class="mb-2">• Chirurgie implantaire 30-grade</li>
                                <li class="mb-2">• Couronnes personnalisées</li>
                                <li>• Guérison & suivi logiciel</li>
                            </ul>
                        </div>
                        
                        <!-- Boutons -->
                        <div class="d-flex gap-3 mt-4">
                            <a href="{{ route('appointments.create') }}" class="btn btn-light rounded-pill px-4 py-2 fw-bold" style="color: #002093;">
                                Prendre rendez-vous
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold">
                                Consultation à distance
                            </a>
                        </div>
                        <p class="small text-white-50 mt-3 text-center">*Estimation uniquement. Coût final en clinique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Éléments du formulaire
    const goalStraight = document.getElementById('goal_straight');
    const goalMissing = document.getElementById('goal_missing');
    const goalWhitening = document.getElementById('goal_whitening');
    const goalMakeover = document.getElementById('goal_makeover');
    const methodAligners = document.getElementById('method_aligners');
    const methodVeneers = document.getElementById('method_veneers');
    const methodImplants = document.getElementById('method_implants');
    const loyaltyMember = document.getElementById('loyalty_member');
    const loyaltyNot = document.getElementById('loyalty_not');
    
    // Éléments d'affichage
    const complexityValue = document.getElementById('complexity-value');
    const complexityBar = document.getElementById('complexity-bar');
    const durationValue = document.getElementById('duration-value');
    const costValue = document.getElementById('cost-value');
    const specialistsList = document.getElementById('specialists-list');
    const planList = document.getElementById('plan-list');
    const selectedToothText = document.getElementById('selected-tooth-text');
    
    // Sélection de dent
    let selectedTooth = null;
    const toothBtns = document.querySelectorAll('.tooth-btn');
    toothBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            toothBtns.forEach(b => {
                b.style.background = '#667eea20';
                b.style.color = '#667eea';
            });
            this.style.background = '#667eea';
            this.style.color = 'white';
            selectedTooth = this.dataset.tooth;
            selectedToothText.textContent = `Dent ${selectedTooth} sélectionnée`;
            updateCalculator();
        });
    });
    
    // Mise à jour du calculateur
    function updateCalculator() {
        // Récupérer la méthode sélectionnée
        let method = 'aligners';
        if (methodVeneers.checked) method = 'veneers';
        if (methodImplants.checked) method = 'implants';
        
        // Récupérer les objectifs
        let goalsCount = 0;
        if (goalStraight.checked) goalsCount++;
        if (goalMissing.checked) goalsCount++;
        if (goalWhitening.checked) goalsCount++;
        if (goalMakeover.checked) goalsCount++;
        
        // Récupérer le programme de fidélité
        let isMember = loyaltyMember.checked;
        
        // Calculer la complexité
        let complexity = 40;
        if (method === 'veneers') complexity = 65;
        if (method === 'implants') complexity = 85;
        complexity += goalsCount * 5;
        if (complexity > 100) complexity = 100;
        
        // Calculer la durée
        let duration = '2 semaines';
        let durationMinutes = 60;
        if (method === 'veneers') {
            duration = '3 semaines';
            durationMinutes = 90;
        }
        if (method === 'implants') {
            duration = '3 mois';
            durationMinutes = 120;
        }
        
        // Calculer le coût
        let minPrice = 2400;
        let maxPrice = 4900;
        if (method === 'veneers') {
            minPrice = 8000;
            maxPrice = 15000;
        }
        if (method === 'implants') {
            minPrice = 25000;
            maxPrice = 45000;
        }
        
        // Appliquer la réduction membre
        if (isMember) {
            minPrice = Math.floor(minPrice * 0.9);
            maxPrice = Math.floor(maxPrice * 0.9);
        }
        
        // Ajuster le coût selon les objectifs
        if (goalMakeover.checked) {
            minPrice = Math.floor(minPrice * 1.3);
            maxPrice = Math.floor(maxPrice * 1.3);
        }
        
        // Ajuster selon la dent sélectionnée
        if (selectedTooth && selectedTooth >= 6) {
            minPrice = Math.floor(minPrice * 1.2);
            maxPrice = Math.floor(maxPrice * 1.2);
        }
        
        // Mettre à jour l'affichage
        complexityValue.textContent = complexity + '%';
        complexityBar.style.width = complexity + '%';
        durationValue.textContent = duration;
        costValue.textContent = minPrice.toLocaleString() + ' - ' + maxPrice.toLocaleString() + ' DH';
        
        // Mettre à jour les spécialistes recommandés
        let specialists = '';
        let plan = '';
        
        if (method === 'aligners') {
            specialists = `
                <li class="mb-2">• Dr. Sara - Orthodontiste</li>
                <li class="mb-2">• Dr. Ahmed - Orthodontiste</li>
                <li>• Dr. Khalil - Spécialiste aligneurs</li>
            `;
            plan = `
                <li class="mb-2">• Aligneurs invisibles</li>
                <li class="mb-2">• Scan 3D gratuit</li>
                <li class="mb-2">• Suivi mensuel</li>
                <li>• Gouttières de contention</li>
            `;
        } else if (method === 'veneers') {
            specialists = `
                <li class="mb-2">• Dr. Ahmed - Dentiste esthétique</li>
                <li class="mb-2">• Dr. Sophia - Cosmétique dentaire</li>
                <li>• Dr. Rihab - Facettes</li>
            `;
            plan = `
                <li class="mb-2">• 6-8 facettes céramique</li>
                <li class="mb-2">• Maquillage sourire</li>
                <li class="mb-2">• Design personnalisé</li>
                <li>• Garantie 5 ans</li>
            `;
        } else {
            specialists = `
                <li class="mb-2">• Dr. Karim - Implantologue</li>
                <li class="mb-2">• Dr. Fatima - Chirurgienne</li>
                <li>• Dr. Youssef - Prothésiste</li>
            `;
            plan = `
                <li class="mb-2">• ${selectedTooth ? selectedTooth : '1-3'} implants</li>
                <li class="mb-2">• Chirurgie guidée 3D</li>
                <li class="mb-2">• Couronnes céramique</li>
                <li>• Période de guérison 3 mois</li>
            `;
        }
        
        specialistsList.innerHTML = specialists;
        planList.innerHTML = plan;
    }
    
    // Ajouter les écouteurs d'événements
    const inputs = [goalStraight, goalMissing, goalWhitening, goalMakeover, methodAligners, methodVeneers, methodImplants, loyaltyMember, loyaltyNot];
    inputs.forEach(input => {
        if (input) input.addEventListener('change', updateCalculator);
    });
    
    // Initialiser
    updateCalculator();
});
</script>
@endpush
@endsection