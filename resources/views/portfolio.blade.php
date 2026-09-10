<x-layouts.app>
    <!-- Section Accueil / Hero (Première étape de présentation avec Navbar flottante) -->
    <section id="accueil" class="relative pt-32 sm:pt-40 pb-20 overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center space-y-6">
                <!-- Badge double compétence -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white border border-gray-200 text-xs font-semibold shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    <span class="text-blue-700 font-bold">Full-Stack Developer</span>
                    <span class="text-gray-400">•</span>
                    <span class="text-green-600 font-bold">Aspirant Data Scientist</span>
                </div>

                <!-- Titre d'impact Land-book -->
                <h1 class="text-4xl sm:text-6xl lg:text-7xl font-black text-gray-900 tracking-tight font-heading leading-[1.1]">
                    L'art du code robuste, <br>
                    la puissance des <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-indigo-600 to-green-500">données</span>.
                </h1>

                <!-- Paragraphe de présentation -->
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Développeur passionné par l'architecture logicielle, les applications web haute performance avec <strong class="text-gray-900">Laravel &amp; Livewire</strong> et l'exploration analytique et prédictive en <strong class="text-gray-900">Data Science</strong>.
                </p>

                <!-- Boutons d'action -->
                <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                    <a
                        href="#projets"
                        class="px-6 py-3 rounded-full bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold shadow-lg shadow-blue-600/30 hover:scale-[1.02] active:scale-[0.98] transition-all"
                    >
                        Découvrir mes projets
                    </a>
                    <a
                        href="#contact"
                        class="px-6 py-3 rounded-full bg-white hover:bg-gray-50 text-gray-900 text-sm font-semibold border border-gray-200 shadow-sm transition"
                    >
                        Prendre contact
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
