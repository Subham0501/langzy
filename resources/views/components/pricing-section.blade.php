@php
    $selectedLanguage = $selectedLanguage ?? 'german';
    $languageName = $selectedLanguage === 'austrian' ? 'Austrian German' : ucfirst($selectedLanguage);
    
    if ($selectedLanguage === 'french') {
        $learningPlansRoute = route('french-learning-plans');
    } elseif ($selectedLanguage === 'austrian') {
        $learningPlansRoute = route('austrian-learning-plans');
    } else {
        $learningPlansRoute = route('german-learning-plans');
    }
@endphp

<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg transform hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-4">Choose Your {{ $languageName }} Learning Plan</h2>
            <p class="text-lg md:text-xl text-langzy-gray max-w-2xl mx-auto leading-relaxed">
                Select the learning path that best fits your goals - comprehensive language courses or focused exam preparation
            </p>
        </div>

        <!-- Two Plan Type Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12 max-w-5xl mx-auto">
            <!-- Language Class Card -->
            <a href="{{ $learningPlansRoute }}" class="group bg-white rounded-3xl border-2 border-gray-200 p-8 md:p-10 hover:border-langzy-blue hover:shadow-2xl transition-all duration-300 relative overflow-hidden transform hover:-translate-y-2 cursor-pointer block">
                <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-24 -mt-24 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-blue-400/10 to-transparent rounded-full -ml-16 -mb-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-langzy-text mb-3">Language Class</h3>
                        <p class="text-langzy-gray text-base md:text-lg leading-relaxed mb-6">
                            Comprehensive German language courses from A1 to B2 level with expert teachers
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">A1, A2, B1 & B2 Levels Available</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">Complete Grammar & Vocabulary</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">Speaking, Listening, Reading & Writing</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">Live Classes & Recorded Videos</span>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-langzy-blue/10 to-blue-50 text-langzy-blue font-bold px-6 py-3 rounded-full border border-langzy-blue/30 group-hover:bg-gradient-to-r group-hover:from-langzy-blue group-hover:to-blue-600 group-hover:text-white transition-all duration-300">
                            <span>View Plans</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Exam Preparation Card -->
            <a href="{{ $learningPlansRoute }}" class="group bg-white rounded-3xl border-2 border-gray-200 p-8 md:p-10 hover:border-purple-500 hover:shadow-2xl transition-all duration-300 relative overflow-hidden transform hover:-translate-y-2 cursor-pointer block">
                <div class="absolute top-0 right-0 w-48 h-48 bg-gradient-to-br from-purple-500/10 to-transparent rounded-full -mr-24 -mt-24 group-hover:scale-150 transition-transform duration-500"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-gradient-to-tr from-purple-400/10 to-transparent rounded-full -ml-16 -mb-16 group-hover:scale-150 transition-transform duration-500"></div>
                
                <div class="relative">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl mb-6 shadow-xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-extrabold text-langzy-text mb-3">Exam Preparation</h3>
                        <p class="text-langzy-gray text-base md:text-lg leading-relaxed mb-6">
                            Focused preparation for Goethe, ÖSD & telc German certification exams
                        </p>
                    </div>
                    
                    <div class="space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">A1, A2, B1 & B2 Exam Prep</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">Mock Tests & Past Papers</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">Exam Tips & Strategies</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center flex-shrink-0">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-base font-medium">All Modules: Listening, Reading, Writing, Speaking</span>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <div class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500/10 to-purple-50 text-purple-600 font-bold px-6 py-3 rounded-full border border-purple-500/30 group-hover:bg-gradient-to-r group-hover:from-purple-500 group-hover:to-purple-700 group-hover:text-white transition-all duration-300">
                            <span>View Plans</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <!-- Additional Info -->
        <div class="mt-12 text-center">
            <p class="text-langzy-gray text-base">
                Click on a plan to view detailed curriculum and pricing for each level
            </p>
        </div>
    </div>
</section>
