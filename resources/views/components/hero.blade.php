<section id="accueil" class="relative pt-32 sm:pt-40 pb-20 bg-gray-50 dark:bg-gray-900 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Contenu Textuel (Gauche) -->
            <div class="space-y-8 text-center lg:text-left">
                <!-- Chip/Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 text-xs font-medium text-gray-700 dark:text-gray-300 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    Développeur Full-Stack <span class="text-gray-400 dark:text-gray-500">|</span> Data Scientist
                </div>

                <!-- Titre Principal -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 dark:text-white tracking-tight leading-[1.15]">
                    Je suis <span class="text-blue-600">Cheick Abdoul Kader DAO</span>,
                    <br class="hidden sm:block"> 
                    passionné par le code et la donnée.
                </h1>

                <!-- Paragraphe -->
                <p class="text-base sm:text-lg text-gray-600 dark:text-gray-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Développeur full-stack spécialisé dans la création d'applications web et mobiles performantes, avec une forte appétence pour la Data Science, l'analytique et la conception logicielle.
                </p>

                <!-- Boutons d'action (Material Design Buttons) -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                    <!-- Raised Button (Primary) -->
                    <a
                        href="#projets"
                        class="w-full sm:w-auto px-8 py-3.5 rounded bg-blue-600 text-white text-sm font-medium shadow-[0_4px_14px_0_rgba(37,99,235,0.39)] hover:shadow-[0_6px_20px_rgba(37,99,235,0.23)] hover:bg-blue-700 transition-all text-center"
                    >
                        Découvrir mes projets
                    </a>
                    <!-- Outlined Button (Secondary) -->
                    <a
                        href="#contact"
                        class="w-full sm:w-auto px-8 py-3.5 rounded bg-white dark:bg-gray-800 text-blue-600 dark:text-blue-400 text-sm font-medium shadow-[0_4px_14px_0_rgba(0,0,0,0.05)] border border-gray-200 dark:border-gray-700 hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] transition-all text-center"
                    >
                        Me contacter
                    </a>
                </div>

            </div>

            <!-- Image/Illustration (Droite) - Matérialisation de l'espace -->
            <div class="relative hidden lg:block">
                <!-- Motif d'arrière-plan -->
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-100 to-indigo-50 rounded-full blur-3xl opacity-60 transform scale-110"></div>
                
                <!-- Carte d'image Material (Elevated Card) -->
                <div class="relative rounded-2xl overflow-hidden shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-white dark:border-gray-700 bg-white dark:bg-gray-800 p-2 z-10 group">
                    <img 
                        src="{{ asset('images/profile.jpg') }}" 
                        alt="Cheick Abdoul Kader DAO - Diplômé de l'Université Thomas Sankara" 
                        class="w-full h-[500px] sm:h-[600px] object-cover object-top rounded-xl group-hover:scale-[1.02] transition-transform duration-500"
                    >
                    
                    <!-- Élément flottant (Widget d'information) -->
                    <div class="absolute bottom-6 -left-6 bg-white dark:bg-gray-800 p-4 rounded-xl shadow-xl border border-gray-100 dark:border-gray-700 flex items-center gap-4 hover:-translate-y-1 transition-transform duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-gray-700 text-blue-600 dark:text-blue-400 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900 dark:text-white">Innovation & Code</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Architecture moderne</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
