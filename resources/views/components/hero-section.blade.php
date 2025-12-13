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
            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm border border-langzy-blue/20 rounded-full px-6 py-2 mb-8 shadow-lg">
                <svg class="w-5 h-5 text-langzy-blue" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                <span class="text-sm font-semibold text-langzy-text">Trusted by Many Language Learners</span>
            </div>
            
            <!-- Main Headline -->
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-langzy-text mb-6 leading-tight">
                <span class="bg-gradient-to-r from-langzy-blue to-blue-600 bg-clip-text text-transparent">Langzy</span> - Grow your words.<br>
                <span class="bg-gradient-to-r from-langzy-blue to-blue-600 bg-clip-text text-transparent">Expand your world.</span>
            </h1>
            
            <!-- Logo/Brand -->
            <div class="mb-10 relative flex flex-col items-center justify-center">
                <div class="relative">
                    <img src="{{ asset('Group 36.png') }}" alt="Langzy - German Language Learning Platform Logo" class="mb-4 max-w-xs md:max-w-md drop-shadow-2xl transform hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-langzy-blue/20 blur-2xl -z-10"></div>
                </div>
            </div>
            
            <!-- Description -->
            <p class="text-xl md:text-2xl text-langzy-gray mb-12 max-w-3xl mx-auto leading-relaxed font-medium">
                <span class="text-langzy-text font-semibold">Langzy</span> helps you master German with expert tutors, structured courses, and personalized learning paths. 
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