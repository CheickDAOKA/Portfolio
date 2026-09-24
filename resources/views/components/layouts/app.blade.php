<!DOCTYPE html>
<html lang="fr" class="scroll-smooth"
    x-data="{ dark: localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
    x-init="$watch('dark', val => { localStorage.setItem('theme', val ? 'dark' : 'light'); document.documentElement.classList.toggle('dark', val) }); document.documentElement.classList.toggle('dark', dark)"
    @toggle-dark.window="dark = !dark"
    :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>{{ $title ?? 'Cheick Abdoul Kader DAO | Développeur Full-Stack Laravel au Burkina Faso' }}</title>
    <meta name="description" content="Cheick Abdoul Kader DAO — Développeur Full-Stack & Data Scientist au Burkina Faso. Spécialiste Laravel, Livewire, APIs REST et applications web modernes. Disponible pour vos projets.">
    <meta name="keywords" content="Cheick DAO, Cheick Abdoul Kader DAO, développeur full-stack, développeur web Burkina Faso, Laravel, Livewire, PHP, Data Scientist, Ouagadougou, freelance, portfolio">
    <meta name="author" content="Cheick Abdoul Kader DAO">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ config('app.url') }}">

    <!-- Open Graph (Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cheick Abdoul Kader DAO | Développeur Full-Stack Laravel">
    <meta property="og:description" content="Développeur Full-Stack & Data Scientist au Burkina Faso. Spécialiste Laravel, Livewire et applications web modernes.">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:site_name" content="Portfolio Cheick DAO">
    <meta property="og:locale" content="fr_BF">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cheick Abdoul Kader DAO | Développeur Full-Stack Laravel">
    <meta name="twitter:description" content="Développeur Full-Stack & Data Scientist au Burkina Faso. Spécialiste Laravel, Livewire et applications web modernes.">

    <!-- Schema.org JSON-LD (Données structurées pour Google) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Cheick Abdoul Kader DAO",
        "jobTitle": "Développeur Full-Stack & Data Scientist",
        "url": "{{ config('app.url') }}",
        "address": {
            "@type": "PostalAddress",
            "addressCountry": "BF",
            "addressLocality": "Burkina Faso"
        },
        "knowsAbout": ["Laravel", "Livewire", "PHP", "JavaScript", "Python", "Data Science", "API REST"],
        "sameAs": []
    }
    </script>

    <!-- Google Fonts Space Grotesk -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }
        h1, h2, h3, h4, .font-heading {
            font-family: 'Space Grotesk', sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-950 text-gray-900 dark:text-gray-100 antialiased selection:bg-blue-500 selection:text-white min-h-screen flex flex-col relative overflow-x-hidden transition-colors duration-300">

    <!-- Background Decorative Gradients -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div class="absolute -top-40 left-1/2 -translate-x-1/2 w-[900px] h-[500px] bg-gradient-to-tr from-blue-200/50 via-purple-200/50 to-pink-200/40 dark:from-blue-900/30 dark:via-purple-900/30 dark:to-pink-900/20 rounded-full blur-[120px]"></div>
        <div class="absolute top-[40%] -left-40 w-[600px] h-[600px] bg-blue-200/50 dark:bg-blue-900/20 rounded-full blur-[140px]"></div>
        <div class="absolute bottom-10 right-0 w-[500px] h-[500px] bg-green-200/50 dark:bg-green-900/20 rounded-full blur-[130px]"></div>
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#e5e7eb_1px,transparent_1px),linear-gradient(to_bottom,#e5e7eb_1px,transparent_1px)] dark:bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    </div>

    <!-- Floating Island Navbar (Atomic Component - Land-book inspiration) -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-1 relative z-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="relative z-10 border-t border-gray-800 bg-gray-900 text-white pt-16 pb-12 mt-24 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 pb-12 border-b border-gray-800">
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-gray-800 flex items-center justify-center font-bold text-white font-heading text-sm">
                            P
                        </div>
                        <span class="text-lg font-bold text-white font-heading">Cheick DAO <span class="text-gray-400">Portfolio</span></span>
                    </div>
                    <p class="text-gray-400 text-sm max-w-md leading-relaxed">
                        Conception et développement d'applications web modernes et performantes. Expertise Laravel, Livewire, architecture microservices et intégration d'APIs.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-gray-800 text-gray-300 border border-gray-700">
                            <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-ping"></span>
                            Disponible pour de nouveaux projets
                        </span>
                    </div>
                </div>

                <div>
                    <h4 class="text-xs uppercase font-bold tracking-wider text-gray-500 mb-4">Navigation</h4>
                    <ul class="space-y-2.5 text-sm text-gray-400">
                        <li><a href="#accueil" class="hover:text-white transition">Accueil</a></li>
                        <li><a href="#competences" class="hover:text-white transition">Compétences</a></li>
                        <li><a href="#projets" class="hover:text-white transition">Projets</a></li>
                        <li><a href="#parcours" class="hover:text-white transition">Parcours</a></li>
                        <li><a href="#contact" class="hover:text-white transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs uppercase font-bold tracking-wider text-gray-500 mb-4">Stack Utilisée</h4>
                    <div class="flex flex-wrap gap-2 text-xs text-gray-400">
                        <span class="px-2.5 py-1 rounded-md bg-gray-800 border border-gray-700">Laravel 13</span>
                        <span class="px-2.5 py-1 rounded-md bg-gray-800 border border-gray-700">Livewire 4</span>
                        <span class="px-2.5 py-1 rounded-md bg-gray-800 border border-gray-700">Tailwind CSS 4</span>
                        <span class="px-2.5 py-1 rounded-md bg-gray-800 border border-gray-700">Vite</span>
                        <span class="px-2.5 py-1 rounded-md bg-gray-800 border border-gray-700">SQLite</span>
                    </div>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-gray-500">
                <p>&copy; {{ date('Y') }} Cheick Abdoul kader DAO. Tous droits réservés.</p>
                <div class="flex items-center gap-6">
                    <a href="#accueil" class="hover:text-white transition">Retour en haut ↑</a>
                </div>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
