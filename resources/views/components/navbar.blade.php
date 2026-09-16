{{-- 
    Composant Navbar - Style Classique (Material / Portfolio)
    Thème : Clair & Épuré
    Architecture : Navbar pleine largeur fixée en haut
--}}

@props([
    'brandName' => 'Cheick DAO',
])

<div
    x-data="{ mobileOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
    :class="scrolled ? 'bg-white dark:bg-gray-900 shadow-md py-3' : 'bg-transparent py-5'"
>
    <header class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex items-center justify-between">
            
            <!-- LOGO & MARQUE -->
            <a href="#accueil" class="flex items-center gap-2 group focus:outline-none">
                <span class="text-2xl font-black tracking-tight text-blue-600 dark:text-blue-500 transition-colors duration-300">
                    {{ $brandName }}
                </span>
            </a>

            <!-- LIENS DE NAVIGATION (DESKTOP) -->
            <nav class="hidden md:flex items-center gap-8 text-base font-medium">
                <a href="#accueil" class="uppercase tracking-widest transition-colors hover:text-blue-600 dark:hover:text-blue-400" :class="scrolled ? 'text-gray-600 dark:text-gray-300' : 'text-gray-700 dark:text-gray-200'">Accueil</a>
                <a href="#competences" class="uppercase tracking-widest transition-colors hover:text-blue-600 dark:hover:text-blue-400" :class="scrolled ? 'text-gray-600 dark:text-gray-300' : 'text-gray-700 dark:text-gray-200'">Compétences</a>
                <a href="#parcours" class="uppercase tracking-widest transition-colors hover:text-blue-600 dark:hover:text-blue-400" :class="scrolled ? 'text-gray-600 dark:text-gray-300' : 'text-gray-700 dark:text-gray-200'">Parcours</a>
                <a href="#projets" class="uppercase tracking-widest transition-colors hover:text-blue-600 dark:hover:text-blue-400" :class="scrolled ? 'text-gray-600 dark:text-gray-300' : 'text-gray-700 dark:text-gray-200'">Projets</a>
                <a href="#contact" class="uppercase tracking-widest transition-colors hover:text-blue-600 dark:hover:text-blue-400" :class="scrolled ? 'text-gray-600 dark:text-gray-300' : 'text-gray-700 dark:text-gray-200'">Contact</a>
            </nav>

            <!-- BOUTON CTA ET MOBILE -->
            <div class="flex items-center gap-3">
                <!-- Toggle Dark Mode -->
                <button
                    type="button"
                    @click="dark = !dark"
                    class="p-2 rounded-full transition-colors"
                    :class="scrolled ? 'text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' : 'text-gray-700 dark:text-gray-300 hover:bg-gray-200/50 dark:hover:bg-gray-700/50'"
                    aria-label="Basculer le mode sombre"
                >
                    <!-- Icône Soleil (mode clair) -->
                    <svg x-show="dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M18.364 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                    </svg>
                    <!-- Icône Lune (mode sombre) -->
                    <svg x-show="!dark" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- Bouton Contact -->
                <a
                    href="#contact"
                    class="hidden md:inline-flex items-center justify-center px-5 py-2.5 text-sm font-medium text-white transition-all duration-200 bg-blue-600 hover:bg-blue-700 rounded-md shadow hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Contact
                </a>

                <!-- DÉCLENCHEUR MENU MOBILE -->
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    class="md:hidden p-2 rounded focus:outline-none transition-colors"
                    :class="scrolled ? 'text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800' : 'text-gray-800 dark:text-gray-200 hover:bg-gray-200/50'"
                    aria-label="Menu de navigation"
                >
                    <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- MENU MOBILE DÉROULANT -->
        <div
            x-show="mobileOpen"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden absolute top-full left-0 w-full bg-white dark:bg-gray-900 shadow-xl border-t border-gray-100 dark:border-gray-800 py-4 px-4 flex flex-col space-y-2"
        >
            <a href="#accueil" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 font-medium uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Accueil</a>
            <a href="#competences" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 font-medium uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Compétences</a>
            <a href="#parcours" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 font-medium uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Parcours</a>
            <a href="#projets" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 dark:text-gray-300 font-medium uppercase tracking-widest hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">Projets</a>

            <div class="pt-4 mt-2 border-t border-gray-100 dark:border-gray-800 px-4">
                <a href="#contact" @click="mobileOpen = false" class="flex w-full justify-center items-center px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 hover:shadow-md transition-all uppercase tracking-widest">
                    Contact
                </a>
            </div>
        </div>
    </header>
</div>
