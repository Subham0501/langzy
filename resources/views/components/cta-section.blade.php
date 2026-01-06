<!-- Call to Action Section -->
<section class="py-24 bg-gradient-to-br from-langzy-blue via-blue-500 to-blue-600 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-20 left-20 w-64 h-64 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
    </div>
    
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-3xl mb-8 shadow-xl">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
        </div>
        <h2 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">
            Ready to Start Your<br>
            <span class="bg-gradient-to-r from-yellow-200 to-yellow-400 bg-clip-text text-transparent">{{ ucfirst($selectedLanguage ?? 'german') }} Journey?</span>
        </h2>
        <p class="text-xl md:text-2xl text-blue-100 mb-12 max-w-3xl mx-auto leading-relaxed">
            Join thousands of successful learners and master {{ ucfirst($selectedLanguage ?? 'german') }} with our expert-guided courses.
        </p>
        <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
            <a href="/contact" class="group inline-flex items-center justify-center gap-3 bg-white text-langzy-blue px-10 py-5 rounded-full text-lg font-bold hover:bg-blue-50 transition-all duration-300 shadow-2xl hover:shadow-3xl transform hover:scale-105">
                <span>Get Started Today</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
            <a href="#pricing" class="inline-flex items-center justify-center gap-3 bg-white/10 backdrop-blur-sm text-white border-2 border-white/30 px-10 py-5 rounded-full text-lg font-bold hover:bg-white/20 transition-all duration-300 shadow-xl">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                <span>View Pricing</span>
            </a>
        </div>
    </div>
</section>
