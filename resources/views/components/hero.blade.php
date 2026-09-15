<section id="accueil" class="relative pt-32 sm:pt-40 pb-20 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Contenu Textuel (Gauche) -->
            <div class="space-y-8 text-center lg:text-left">
                <!-- Chip/Badge -->
                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-white border border-gray-200 text-xs font-medium text-gray-700 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
                    Développeur Full-Stack <span class="text-gray-400">|</span> Data Scientist
                </div>

                <!-- Titre Principal -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-gray-900 tracking-tight leading-[1.15]">
                    Je suis <span class="text-blue-600">Cheick Abdoul Kader DAO</span>,
                    <br class="hidden sm:block"> 
                    passionné par le code et la donnée.
                </h1>

                <!-- Paragraphe -->
                <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
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
                        class="w-full sm:w-auto px-8 py-3.5 rounded bg-white text-blue-600 text-sm font-medium shadow-[0_4px_14px_0_rgba(0,0,0,0.05)] border border-gray-200 hover:shadow-[0_6px_20px_rgba(0,0,0,0.08)] transition-all text-center"
                    >
                        Me contacter
                    </a>
                </div>

                <!-- Réseaux Sociaux -->
                <div class="pt-8 flex items-center justify-center lg:justify-start gap-6 text-gray-400">
                    <a href="https://github.com" target="_blank" class="hover:text-gray-900 transition-colors" aria-label="Mon profil GitHub">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/cheick-dao-29b588371/" target="_blank" class="hover:text-blue-600 transition-colors" aria-label="Mon profil LinkedIn">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            </div>

            <!-- Image/Illustration (Droite) - Matérialisation de l'espace -->
            <div class="relative hidden lg:block">
                <!-- Motif d'arrière-plan -->
                <div class="absolute inset-0 bg-gradient-to-tr from-blue-100 to-indigo-50 rounded-full blur-3xl opacity-60 transform scale-110"></div>
                
                <!-- Carte d'image Material (Elevated Card) -->
                <div class="relative rounded-2xl overflow-hidden shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] border border-white bg-white p-2 z-10 group">
                    <img 
                        src="{{ asset('images/profile.jpg') }}" 
                        alt="Cheick Abdoul Kader DAO - Diplômé de l'Université Thomas Sankara" 
                        class="w-full h-[500px] sm:h-[600px] object-cover object-top rounded-xl group-hover:scale-[1.02] transition-transform duration-500"
                    >
                    
                    <!-- Élément flottant (Widget d'information) -->
                    <div class="absolute bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl border border-gray-100 flex items-center gap-4 hover:-translate-y-1 transition-transform duration-300">
                        <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" /></svg>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-gray-900">Innovation & Code</p>
                            <p class="text-xs text-gray-500">Architecture moderne</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
