{{-- 
    Composant Navbar - Style Classique (Material / Portfolio)
    Thème : Clair & Épuré
    Architecture : Navbar pleine largeur fixée en haut
--}}

@props([
    'brandName' => 'Portfolio.',
])

<div
    x-data="{ mobileOpen: false, scrolled: false }"
    x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 20 })"
    class="fixed top-0 inset-x-0 z-50 transition-all duration-300"
    :class="scrolled ? 'bg-white shadow-md py-3' : 'bg-transparent py-5'"
>
    <header class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex items-center justify-between">
            
            <!-- LOGO & MARQUE -->
            <a href="#accueil" class="flex items-center gap-2 group focus:outline-none">
                <span class="text-xl font-bold tracking-tight transition-colors duration-300"
                      :class="scrolled ? 'text-gray-900' : 'text-gray-800'">
                    {{ $brandName }}
                </span>
            </a>

            <!-- LIENS DE NAVIGATION (DESKTOP) -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                <a href="#accueil" class="transition-colors hover:text-blue-600" :class="scrolled ? 'text-gray-600' : 'text-gray-700'">Accueil</a>
                <a href="#a-propos" class="transition-colors hover:text-blue-600" :class="scrolled ? 'text-gray-600' : 'text-gray-700'">À Propos</a>
                <a href="#competences" class="transition-colors hover:text-blue-600" :class="scrolled ? 'text-gray-600' : 'text-gray-700'">Compétences</a>
                <a href="#projets" class="transition-colors hover:text-blue-600" :class="scrolled ? 'text-gray-600' : 'text-gray-700'">Projets</a>
                <a href="#parcours" class="transition-colors hover:text-blue-600" :class="scrolled ? 'text-gray-600' : 'text-gray-700'">Parcours</a>
            </nav>

            <!-- BOUTON CTA ET MOBILE -->
            <div class="flex items-center gap-4">
                <!-- Bouton Contact (Material Style) -->
                <a
                    href="#contact"
                    class="hidden md:inline-flex items-center justify-center px-6 py-2.5 text-sm font-medium text-white transition-all duration-200 bg-blue-600 rounded-md shadow hover:bg-blue-700 hover:shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                >
                    Contact
                </a>

                <!-- DÉCLENCHEUR MENU MOBILE -->
                <button
                    type="button"
                    @click="mobileOpen = !mobileOpen"
                    class="md:hidden p-2 rounded focus:outline-none transition-colors"
                    :class="scrolled ? 'text-gray-600 hover:bg-gray-100' : 'text-gray-800 hover:bg-gray-200/50'"
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
            class="md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-gray-100 py-4 px-4 flex flex-col space-y-2"
        >
            <a href="#accueil" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">Accueil</a>
            <a href="#a-propos" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">À Propos</a>
            <a href="#competences" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">Compétences</a>
            <a href="#projets" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">Projets</a>
            <a href="#parcours" @click="mobileOpen = false" class="px-4 py-3 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors">Parcours</a>
            
            <div class="pt-4 mt-2 border-t border-gray-100 px-4">
                <a href="#contact" @click="mobileOpen = false" class="flex w-full justify-center items-center px-4 py-3 text-sm font-medium text-white bg-blue-600 rounded-md shadow hover:bg-blue-700 hover:shadow-md transition-all">
                    Me contacter
                </a>
            </div>
        </div>
    </header>
</div>
