<!-- Hero Section -->
<section class="relative min-h-screen sky-gradient overflow-hidden">
    <!-- Floating Clouds -->
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-64 h-40 opacity-90 animate-float" style="animation: floatMove 6s ease-in-out infinite;">
        <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
    </div>
    
    <!-- Cloud 2 - Top Right -->
    <div class="absolute top-20 right-20 w-48 h-32 opacity-70" style="animation: floatMove 8s ease-in-out infinite 1s;">
        <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
    </div>
    
    <!-- Cloud 3 - Bottom Left -->
    <div class="absolute bottom-32 left-16 w-56 h-36 opacity-80" style="animation: floatMove 10s ease-in-out infinite 2s;">
        <img src="{{ asset('Group 40.png') }}" alt="Cloud" class="w-full h-full object-contain">
    </div>
    
    <!-- Hero Content -->
    <div class="relative z-10 flex items-center justify-center min-h-screen px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Main Headline -->
            <h1 class="text-4xl md:text-5xl font-bold text-black mt-14 leading-tight">
                Grow your words. Expand your world.
            </h1>
            
            <!-- Logo/Brand -->
            <div class="mb-8 relative flex flex-col items-center justify-center">
                <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="mb-4 max-w-xs md:max-w-md drop-shadow-lg">
                <!-- Pronunciation -->

            </div>
            
            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-700 mb-12 max-w-3xl mx-auto leading-relaxed">
                Master new languages with expert tutors, structured courses, and personalized learning paths. 
                Join thousands of successful language learners worldwide.
            </p>
            
            <!-- CTA -->
            <div class="flex justify-center items-center mb-16">
                <a href="/contact" class="bg-white text-langzy-blue border-2 border-langzy-blue px-8 py-4 rounded-full text-lg font-semibold hover:bg-blue-50 transition-colors shadow-lg">
                    Contact Us
                </a>
            </div>
            
            <!-- Scroll Indicator -->
            <div class="text-white animate-bounce">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </div>
        </div>
    </div>
</section>