<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Orthodontie',
                'slug' => 'orthodontie',
                'description' => 'Redressez vos dents avec des bagues modernes et des aligneurs transparents. Plans de traitement personnalisés pour tous les âges.',
                'long_description' => 'L\'orthodontie permet de corriger l\'alignement des dents et la position des mâchoires. Nous utilisons les dernières technologies pour des résultats optimaux et confortables.',
                'icon' => '🦷',
                'price_min' => 25000,
                'price_max' => 45000,
                'duration_minutes' => 60,
                'order' => 1,
                'is_active' => true
            ],
            [
                'name' => 'Dentisterie Esthétique',
                'slug' => 'dentisterie-esthetique',
                'description' => 'Transformez votre sourire avec des facettes, du blanchiment et du collage. Des résultats naturels.',
                'long_description' => 'La dentisterie esthétique améliore l\'apparence de vos dents. Facettes, blanchiment, collage... des solutions personnalisées pour un sourire éclatant.',
                'icon' => '✨',
                'price_min' => 8000,
                'price_max' => 20000,
                'duration_minutes' => 45,
                'order' => 2,
                'is_active' => true
            ],
            [
                'name' => 'Implantologie',
                'slug' => 'implantologie',
                'description' => 'Solution permanente pour les dents manquantes. Utilisation de la technologie 3D pour un ajustement de précision.',
                'long_description' => 'Les implants dentaires remplacent les racines des dents manquantes. Solution durable et esthétique pour retrouver un sourire complet.',
                'icon' => '💎',
                'price_min' => 30000,
                'price_max' => 60000,
                'duration_minutes' => 90,
                'order' => 3,
                'is_active' => true
            ],
            [
                'name' => 'Blanchiment',
                'slug' => 'blanchiment',
                'description' => 'Blanchiment dentaire professionnel pour un sourire plus éclatant. En cabinet ou à domicile.',
                'long_description' => 'Le blanchiment dentaire élimine les taches et redonne de l\'éclat à votre sourire. Résultats immédiats et durables.',
                'icon' => '⭐',
                'price_min' => 3000,
                'price_max' => 8000,
                'duration_minutes' => 60,
                'order' => 4,
                'is_active' => true
            ],
            [
                'name' => 'Chirurgie Dentaire',
                'slug' => 'chirurgie-dentaire',
                'description' => 'Procédures chirurgicales avancées incluant extractions et greffes osseuses avec un minimum d\'inconfort.',
                'long_description' => 'Notre équipe réalise des interventions chirurgicales complexes dans des conditions optimales de sécurité et de confort.',
                'icon' => '🔪',
                'price_min' => 0,
                'price_max' => 5000,
                'duration_minutes' => 60,
                'order' => 5,
                'is_active' => true
            ],
            [
                'name' => 'Dentisterie Pédiatrique',
                'slug' => 'dentisterie-pediatrique',
                'description' => 'Soins dentaires doux et adaptés aux enfants. Développer de bonnes habitudes dès le plus jeune âge.',
                'long_description' => 'Nous accueillons les enfants dans un environnement ludique et rassurant pour des soins sans stress.',
                'icon' => '👶',
                'price_min' => 1500,
                'price_max' => 5000,
                'duration_minutes' => 30,
                'order' => 6,
                'is_active' => true
            ],
            [
                'name' => 'Urgences',
                'slug' => 'urgences',
                'description' => 'Rendez-vous le jour même pour les urgences dentaires. Soulagement rapide quand vous en avez le plus besoin.',
                'long_description' => 'Service d\'urgence disponible 7j/7 pour traiter rapidement douleurs, traumatismes et infections dentaires.',
                'icon' => '🚨',
                'price_min' => 500,
                'price_max' => 2000,
                'duration_minutes' => 30,
                'order' => 7,
                'is_active' => true
            ],
            [
                'name' => 'Soins Préventifs',
                'slug' => 'soins-preventifs',
                'description' => 'Contrôles réguliers, nettoyages et éducation à l\'hygiène bucco-dentaire pour maintenir votre sourire.',
                'long_description' => 'La prévention est la clé d\'une bonne santé bucco-dentaire. Consultations régulières et détartrage pour éviter les problèmes.',
                'icon' => '🛡️',
                'price_min' => 800,
                'price_max' => 2500,
                'duration_minutes' => 30,
                'order' => 8,
                'is_active' => true
            ]
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}