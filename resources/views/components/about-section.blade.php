<section id="a-propos" class="relative py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            {{-- Image / Illustration --}}
            <div class="relative group">
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-100 to-indigo-100 rounded-2xl transform rotate-3 group-hover:rotate-0 transition-transform duration-500 opacity-50"></div>
                <div class="relative rounded-2xl overflow-hidden shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Cheick Abdoul Kader DAO" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out">
                </div>
            </div>

            {{-- Texte --}}
            <div>
                <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-100 border border-blue-200 text-blue-700 text-xs font-semibold uppercase tracking-widest mb-4">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                    À Propos de Moi
                </span>
                
                <h2 class="text-3xl sm:text-4xl font-black text-gray-900 tracking-tight mb-6">
                    Développeur passionné & <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600">créateur de solutions</span>
                </h2>
                
                <div class="space-y-4 text-lg text-gray-600 leading-relaxed mb-8">
                    <p>
                        Je suis <strong>Cheick Abdoul Kader DAO</strong>, étudiant et développeur Full-Stack passionné par la création de solutions web et mobiles modernes. Mon objectif est de concevoir des applications performantes, esthétiques et utiles au quotidien.
                    </p>
                    <p>
                        J'ai une forte appétence pour l'apprentissage continu. Actuellement, je consolide mon expertise en développement (Laravel, Flutter, React) tout en explorant activement le monde fascinant de la <strong>Data Science</strong> et de l'<strong>Intelligence Artificielle</strong>.
                    </p>
                    <p>
                        J'aime relever des défis techniques, concevoir des architectures robustes et je propose également des formations pour transmettre ma passion de la programmation aux débutants.
                    </p>
                </div>

                <div class="flex gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center px-6 py-3 border border-transparent text-base font-semibold rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-md hover:shadow-lg transition-all">
                        Me contacter
                    </a>
                    <a href="#parcours" class="inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-base font-semibold rounded-lg text-gray-700 bg-white hover:bg-gray-50 hover:text-blue-600 shadow-sm transition-all">
                        Voir mon parcours
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
