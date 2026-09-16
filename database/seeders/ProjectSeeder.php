<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::insert([
            [
                'title' => 'Faso Tourisme',
                'description' => 'Application mobile dédiée à la découverte touristique du Burkina Faso.',
                'category' => 'Mobile',
                'is_featured' => true,
                'image_url' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop',
                'project_url' => null,
                'github_url' => 'https://github.com/CheickDAOKA/faso_tourisme',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gestion de Clinique',
                'description' => 'Plateforme de gestion de rendez-vous médicaux pour une clinique (projet académique).',
                'category' => 'Full-Stack',
                'is_featured' => true,
                'image_url' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=1000&auto=format&fit=crop',
                'project_url' => null,
                'github_url' => 'https://github.com/CheickDAOKA/projet-scolaire-de-gestion-de-rendez-vous-d-une-clinique-',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'World Cup Legends',
                'description' => 'Projet FIFA 2026 : Présentation des 48 nations et de leurs 48 meilleurs buteurs historiques.',
                'category' => 'Frontend',
                'is_featured' => true,
                'image_url' => '/images/worldcup.png',
                'project_url' => 'https://worldcupplayer.bolt.host/',
                'github_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cheick Business',
                'description' => 'Site web vitrine professionnel, portfolio et blog personnel.',
                'category' => 'Frontend',
                'is_featured' => false,
                'image_url' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1000&auto=format&fit=crop',
                'project_url' => 'https://cheickdaoka.github.io/Cheick-Blog-Service/',
                'github_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Projet Département',
                'description' => 'Création d\'un site web vitrine pour représenter le département d\'informatique (projet académique).',
                'category' => 'Frontend',
                'is_featured' => false,
                'image_url' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=1000&auto=format&fit=crop',
                'project_url' => null,
                'github_url' => 'https://github.com/CheickDAOKA/Projet-scolaire-de-Departement',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Skillbadge (Miabe Hackaton)',
                'description' => 'Développement collaboratif de l\'application Skillbadge lors de la compétition Miabe Hackaton, alliant interface moderne et blockchain.',
                'category' => 'Web3',
                'is_featured' => true,
                'image_url' => '/images/skillbadge.png',
                'project_url' => 'https://skillbadg.netlify.app',
                'github_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
