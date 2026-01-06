<!-- Hero Section -->
<section class="relative min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-langzy-light overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-40 opacity-20 animate-float" style="animation: floatMove 6s ease-in-out infinite;">
            <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
        </div>
        <div class="absolute top-20 right-20 w-48 h-32 opacity-15" style="animation: floatMove 8s ease-in-out infinite 1s;">
            <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
        </div>
        <div class="absolute bottom-32 left-16 w-56 h-36 opacity-20" style="animation: floatMove 10s ease-in-out infinite 2s;">
            <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
        </div>
        
        <!-- Decorative Gradient Circles -->
        <div class="absolute top-10 left-10 w-72 h-72 bg-langzy-blue/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8 py-20">
        <div class="max-w-5xl mx-auto text-center">
            <!-- Language Selector -->
            <div class="mb-8">
                <div class="inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm rounded-full px-4 py-2 mb-4 shadow-sm border border-gray-200/50">
                    <svg class="w-5 h-5 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                    <span class="text-sm font-semibold text-langzy-text">Choose Your Language</span>
                </div>
                
                <div class="flex flex-wrap justify-center gap-3 md:gap-4">
                    <!-- German -->
                    <a href="{{ route('language.switch', 'german') }}" class="group relative flex items-center gap-3 px-5 py-3 rounded-2xl transition-all duration-300 transform hover:scale-105 {{ ($selectedLanguage ?? 'german') === 'german' ? 'bg-gradient-to-r from-langzy-blue to-blue-600 text-white shadow-xl ring-2 ring-langzy-blue/30' : 'bg-white/90 backdrop-blur-sm text-gray-700 shadow-lg hover:shadow-xl border border-gray-200 hover:border-langzy-blue/30' }}">
                        <span class="text-2xl">🇩🇪</span>
                        <div class="text-left">
                            <div class="font-bold {{ ($selectedLanguage ?? 'german') === 'german' ? 'text-white' : 'text-gray-800' }}">German</div>
                            <div class="text-xs {{ ($selectedLanguage ?? 'german') === 'german' ? 'text-blue-100' : 'text-gray-500' }}">Deutsch</div>
                        </div>
                        @if(($selectedLanguage ?? 'german') === 'german')
                            <svg class="w-5 h-5 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    </a>
                    
                    <!-- French -->
                    <a href="{{ route('language.switch', 'french') }}" class="group relative flex items-center gap-3 px-5 py-3 rounded-2xl transition-all duration-300 transform hover:scale-105 {{ ($selectedLanguage ?? 'german') === 'french' ? 'bg-gradient-to-r from-langzy-blue to-blue-600 text-white shadow-xl ring-2 ring-langzy-blue/30' : 'bg-white/90 backdrop-blur-sm text-gray-700 shadow-lg hover:shadow-xl border border-gray-200 hover:border-langzy-blue/30' }}">
                        <span class="text-2xl">🇫🇷</span>
                        <div class="text-left">
                            <div class="font-bold {{ ($selectedLanguage ?? 'german') === 'french' ? 'text-white' : 'text-gray-800' }}">French</div>
                            <div class="text-xs {{ ($selectedLanguage ?? 'german') === 'french' ? 'text-blue-100' : 'text-gray-500' }}">Français</div>
                        </div>
                        @if(($selectedLanguage ?? 'german') === 'french')
                            <svg class="w-5 h-5 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    </a>
                    
                    <!-- Austria -->
                    <a href="{{ route('language.switch', 'austrian') }}" class="group relative flex items-center gap-3 px-5 py-3 rounded-2xl transition-all duration-300 transform hover:scale-105 {{ ($selectedLanguage ?? 'german') === 'austrian' ? 'bg-gradient-to-r from-langzy-blue to-blue-600 text-white shadow-xl ring-2 ring-langzy-blue/30' : 'bg-white/90 backdrop-blur-sm text-gray-700 shadow-lg hover:shadow-xl border border-gray-200 hover:border-langzy-blue/30' }}">
                        <span class="text-2xl">🇦🇹</span>
                        <div class="text-left">
                            <div class="font-bold {{ ($selectedLanguage ?? 'german') === 'austrian' ? 'text-white' : 'text-gray-800' }}">Austria</div>
                            <div class="text-xs {{ ($selectedLanguage ?? 'german') === 'austrian' ? 'text-blue-100' : 'text-gray-500' }}">Österreich</div>
                        </div>
                        @if(($selectedLanguage ?? 'german') === 'austrian')
                            <svg class="w-5 h-5 text-white ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                        @endif
                    </a>
                </div>
            </div>
        
            
            <!-- Main Headline -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-langzy-text mb-6 leading-tight">
                <span class="bg-gradient-to-r from-langzy-blue to-blue-600 bg-clip-text text-transparent">Langzy</span> - Grow your words.<br>
                <span class="bg-gradient-to-r from-langzy-blue to-blue-600 bg-clip-text text-transparent">Expand your world.</span>
            </h1>
            
            <!-- Logo/Brand -->
            <div class="mb-10 relative flex flex-col items-center justify-center">
                <div class="relative">
                    <img src="{{ asset('Group 36.png') }}" alt="Langzy - {{ ucfirst($selectedLanguage ?? 'german') }} Language Learning Platform Logo" class="mb-4 max-w-xs md:max-w-md drop-shadow-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-langzy-blue/20 blur-2xl -z-10"></div>
                </div>
            </div>
            
            <!-- Description -->
            <p class="text-xl md:text-2xl text-langzy-gray mb-12 max-w-3xl mx-auto leading-relaxed font-medium">
                <span class="text-langzy-text font-semibold">Langzy</span> helps you master {{ ucfirst($selectedLanguage ?? 'german') }} with expert tutors, structured courses, and personalized learning paths. 
                <span class="text-langzy-text font-semibold">Join thousands of successful language learners worldwide.</span>
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mb-16">
                <a href="#pricing" class="group inline-flex items-center justify-center gap-3 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-8 py-4 rounded-full text-lg font-bold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                    <span>Start Learning Today</span>
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="/contact" class="inline-flex items-center justify-center gap-3 bg-white text-langzy-blue border-2 border-langzy-blue px-8 py-4 rounded-full text-lg font-bold hover:bg-langzy-blue hover:text-white transition-all duration-300 shadow-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <span>Contact Us</span>
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-langzy-gray">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Free Trial Available</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Certified Teachers</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>24/7 Support</span>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>