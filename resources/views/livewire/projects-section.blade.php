<?php

use Livewire\Component;

new class extends Component
{
    public string $filter = 'Tous';

    public function getProjectsProperty()
    {
        $allProjects = [
            [
                'title' => 'Faso Tourisme',
                'description' => 'Application mobile dédiée à la découverte touristique du Burkina Faso.',
                'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Mobile',
                'tags' => ['Flutter', 'Dart', 'Application Mobile'],
                'link' => 'https://github.com/CheickDAOKA/faso_tourisme'
            ],
            [
                'title' => 'Gestion de Clinique',
                'description' => 'Plateforme de gestion de rendez-vous médicaux pour une clinique (projet académique).',
                'image' => 'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Full-Stack',
                'tags' => ['Laravel', 'Blade', 'PHP', 'MySQL'],
                'link' => 'https://github.com/CheickDAOKA/projet-scolaire-de-gestion-de-rendez-vous-d-une-clinique-'
            ],
            [
                'title' => 'World Cup Legends',
                'description' => 'Projet FIFA 2026 : Présentation des 48 nations et de leurs 48 meilleurs buteurs historiques.',
                'image' => 'https://images.unsplash.com/photo-1518605368461-1ee7c5320c46?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Frontend',
                'tags' => ['React', 'TypeScript', 'Web'],
                'link' => 'https://worldcupplayer.bolt.host/'
            ],
            [
                'title' => 'Cheick Business',
                'description' => 'Site web vitrine professionnel, portfolio et blog personnel.',
                'image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Frontend',
                'tags' => ['HTML', 'CSS', 'Portfolio'],
                'link' => 'https://cheickdaoka.github.io/Cheick-Blog-Service/'
            ],
            [
                'title' => 'Projet Département',
                'description' => 'Création d\'un site web vitrine pour représenter le département d\'informatique (projet académique).',
                'image' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Frontend',
                'tags' => ['HTML', 'CSS', 'Web'],
                'link' => 'https://github.com/CheickDAOKA/Projet-scolaire-de-Departement'
            ],
            [
                'title' => 'Skillbadge (Miabe Hackaton)',
                'description' => 'Développement collaboratif de l\'application Skillbadge lors de la compétition Miabe Hackaton, alliant interface moderne et blockchain.',
                'image' => 'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=1000&auto=format&fit=crop',
                'category' => 'Web3',
                'tags' => ['React', 'Polygon', 'Blockchain', 'Hackathon'],
                'link' => 'https://skillbadg.netlify.app'
            ]
        ];

        if ($this->filter === 'Tous') {
            return $allProjects;
        }

        return array_filter($allProjects, function ($project) {
            return $project['category'] === $this->filter;
        });
    }

    public function setFilter($category)
    {
        $this->filter = $category;
    }
};
?>

<section id="projets" class="relative py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- En-tête de section --}}
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-100 border border-blue-200 text-blue-700 text-xs font-semibold uppercase tracking-widest mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                Portfolio
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-gray-900 tracking-tight">
                Mes Réalisations
            </h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto text-base leading-relaxed">
                Voici une sélection de mes projets récents, démontrant mes compétences en développement Web, applications Mobiles et Data Science.
            </p>
        </div>

        {{-- Filtres Material Design --}}
        <div class="flex flex-wrap items-center justify-center gap-3 mb-12">
            @foreach(['Tous', 'Mobile', 'Frontend', 'Full-Stack', 'Web3'] as $category)
                <button 
                    wire:click="setFilter('{{ $category }}')"
                    class="px-6 py-2.5 rounded-full text-sm font-medium transition-all duration-300 border 
                    @if($filter === $category) 
                        bg-blue-600 text-white border-blue-600 shadow-[0_4px_14px_0_rgba(37,99,235,0.39)] hover:shadow-[0_6px_20px_rgba(37,99,235,0.23)]
                    @else 
                        bg-white text-gray-700 border-gray-200 shadow-sm hover:border-gray-300 hover:bg-gray-50
                    @endif"
                >
                    {{ $category }}
                </button>
            @endforeach
        </div>

        {{-- Grille de projets (Elevated Cards) --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8" wire:loading.class="opacity-50" wire:target="setFilter">
            @forelse($this->projects as $project)
                <div class="group relative flex flex-col bg-white rounded-2xl overflow-hidden border border-gray-100 shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:-translate-y-1 transition-all duration-300">
                    
                    {{-- Image du projet --}}
                    <div class="relative h-64 overflow-hidden bg-gray-100">
                        <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        
                        {{-- Badge flottant --}}
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-white/95 backdrop-blur-sm shadow-sm text-xs font-bold rounded-full text-blue-700">
                                {{ $project['category'] }}
                            </span>
                        </div>
                    </div>

                    {{-- Contenu --}}
                    <div class="flex flex-col flex-1 p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">
                            {{ $project['title'] }}
                        </h3>
                        
                        <p class="text-gray-600 text-sm leading-relaxed mb-8 flex-1">
                            {{ $project['description'] }}
                        </p>
                        
                        {{-- Tags techniques (Chips Material) --}}
                        <div class="flex flex-wrap gap-2 mb-8">
                            @foreach($project['tags'] as $tag)
                                <span class="px-3 py-1.5 text-xs font-semibold bg-gray-50 text-gray-600 border border-gray-200 rounded-md">
                                    {{ $tag }}
                                </span>
                            @endforeach
                        </div>
                        
                        {{-- Lien d'action --}}
                        <div class="mt-auto pt-4 border-t border-gray-100">
                            <a href="{{ $project['link'] }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800 transition-colors group/link">
                                Explorer le projet
                                <svg class="w-4 h-4 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-16 bg-white rounded-2xl border border-gray-100 shadow-sm">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                    <p class="text-gray-500 font-medium">Aucun projet trouvé dans cette catégorie pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>