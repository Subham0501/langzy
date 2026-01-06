<!-- Features Section -->
<section id="about" class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Why Choose Langzy?</h2>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                Our innovative approach combines traditional teaching methods with modern technology 
                to create an engaging and effective learning experience.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">Interactive Lessons</h3>
                    <p class="text-langzy-gray leading-relaxed text-lg">Engage with multimedia content, interactive exercises, and real-world scenarios that make learning fun and effective.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">Expert Teachers</h3>
                    <p class="text-langzy-gray leading-relaxed text-lg">Learn from native {{ ucfirst($selectedLanguage ?? 'german') }} speakers and certified language teachers with years of experience in language education.</p>
                </div>
            </div>

            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">Progress Tracking</h3>
                    <p class="text-langzy-gray leading-relaxed text-lg">Monitor your learning journey with detailed analytics, personalized recommendations, and achievement badges.</p>
                </div>
            </div>
        </div>
    </div>
</section>
