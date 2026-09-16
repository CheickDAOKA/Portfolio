@php
    $frontendSkills = \App\Models\Skill::where('category', 'Frontend')->get();
    $backendSkills = \App\Models\Skill::where('category', 'Backend')->get();
    $dataSkills = \App\Models\Skill::where('category', 'Data')->get();
    $toolsSkills = \App\Models\Skill::where('category', 'Outils & DevOps')->get();
@endphp

<section id="competences" class="relative py-24 bg-white dark:bg-[#111110]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- En-tête de section --}}
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-50 border border-blue-100 text-blue-700 text-xs font-semibold uppercase tracking-widest mb-4">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                Expertise
            </span>
            <h2 class="text-3xl sm:text-4xl font-black text-gray-900 dark:text-white tracking-tight">
                Compétences techniques
            </h2>
            <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-base leading-relaxed">
                Les technologies que j'utilise au quotidien pour concevoir des applications web modernes, robustes, et explorer la Data Science.
            </p>
        </div>

        {{-- Grille de 4 catégories --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            {{-- Frontend & Mobile --}}
            <div class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white tracking-wide">Front & Mobile</h3>
                </div>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($frontendSkills as $skill)
                        <span class="px-3 py-1.5 text-xs font-medium rounded-md bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-blue-50 hover:text-blue-700 hover:border-blue-200 transition-colors">
                            {{ $skill->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Backend --}}
            <div class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white tracking-wide">Backend</h3>
                </div>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($backendSkills as $skill)
                        <span class="px-3 py-1.5 text-xs font-medium rounded-md bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-indigo-50 hover:text-indigo-700 hover:border-indigo-200 transition-colors">
                            {{ $skill->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Data Science --}}
            <div class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-green-50 flex items-center justify-center text-green-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white tracking-wide">Data Science</h3>
                </div>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($dataSkills as $skill)
                        <span class="px-3 py-1.5 text-xs font-medium rounded-md bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-green-50 hover:text-green-700 hover:border-green-200 transition-colors">
                            {{ $skill->name }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- Outils & Divers --}}
            <div class="group bg-white dark:bg-gray-800 border border-gray-100 dark:border-gray-700 rounded-2xl p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.1)] hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] hover:-translate-y-1 transition-all duration-300">
                <div class="flex flex-col items-center text-center mb-6">
                    <div class="w-14 h-14 rounded-full bg-orange-50 flex items-center justify-center text-orange-600 mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 dark:text-white tracking-wide">Outils & Divers</h3>
                </div>
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($toolsSkills as $skill)
                        <span class="px-3 py-1.5 text-xs font-medium rounded-md bg-gray-50 dark:bg-gray-700 text-gray-700 dark:text-gray-300 border border-gray-200 dark:border-gray-600 hover:bg-orange-50 hover:text-orange-700 hover:border-orange-200 transition-colors">
                            {{ $skill->name }}
                        </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
