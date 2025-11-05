<!-- Pricing Section -->
<section id="pricing" class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Choose Your Learning Plan</h2>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-3xl mx-auto">
                Flexible pricing options to fit your learning goals and budget
            </p>
        </div>

        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- A1 Level -->
            <div class="group bg-white rounded-2xl border-2 border-gray-200 p-8 hover:border-langzy-blue hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2 relative overflow-hidden" onclick="selectPlan(this)">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="text-center mb-6">
                        <h3 class="text-4xl font-extrabold text-langzy-text mb-2">A1</h3>
                        <div class="mb-4">
                            <div class="flex items-center justify-center gap-3">
                                <span class="text-2xl font-semibold text-gray-400 line-through">Rs10,000</span>
                                <span class="text-5xl font-bold text-langzy-text">Rs8,000</span>
                            </div>
                            <div class="mt-2">
                                <span class="inline-block bg-gradient-to-r from-red-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                    20% Off
                                </span>
                            </div>
                        </div>
                        <span class="inline-block bg-gradient-to-r from-langzy-blue/10 to-blue-50 text-langzy-blue text-sm font-bold px-4 py-2 rounded-full border border-langzy-blue/30">
                            Beginner Level
                        </span>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 month class</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 hrs per day</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Doubt clear session</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Recorded video</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Teacher feedback</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 px-6 rounded-xl font-bold text-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- A2 Level - Featured -->
            <div class="group bg-gradient-to-br from-langzy-blue/5 via-white to-blue-50 rounded-2xl border-2 border-langzy-blue p-8 hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2 relative overflow-hidden scale-105" onclick="selectPlan(this)">
                <div class="absolute top-4 right-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-4 py-1 rounded-full shadow-lg">
                  
                </div>
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/20 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="text-center mb-6">
                        <h3 class="text-4xl font-extrabold text-langzy-text mb-2">A2</h3>
                        <div class="mb-4">
                            <div class="flex items-center justify-center gap-3">
                                <span class="text-2xl font-semibold text-gray-400 line-through">Rs12,000</span>
                                <span class="text-5xl font-bold text-langzy-text">Rs10,000</span>
                            </div>
                            <div class="mt-2">
                                <span class="inline-block bg-gradient-to-r from-red-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                    17% Off
                                </span>
                            </div>
                        </div>
                        <span class="inline-block bg-gradient-to-r from-langzy-blue to-blue-600 text-white text-sm font-bold px-4 py-2 rounded-full shadow-lg">
                            Elementary Level
                        </span>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 month class</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 hrs per day</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Doubt clear session</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Recorded video</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Teacher feedback</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 px-6 rounded-xl font-bold text-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-xl hover:shadow-2xl transform hover:scale-105">
                        Get Started
                    </button>
                </div>
            </div>

            <!-- B1 Level -->
            <div class="group bg-white rounded-2xl border-2 border-gray-200 p-8 hover:border-langzy-blue hover:shadow-2xl transition-all duration-300 cursor-pointer transform hover:-translate-y-2 relative overflow-hidden" onclick="selectPlan(this)">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="text-center mb-6">
                        <h3 class="text-4xl font-extrabold text-langzy-text mb-2">B1</h3>
                        <div class="mb-4">
                            <div class="flex items-center justify-center gap-3">
                                <span class="text-2xl font-semibold text-gray-400 line-through">Rs13,000</span>
                                <span class="text-5xl font-bold text-langzy-text">Rs11,000</span>
                            </div>
                            <div class="mt-2">
                                <span class="inline-block bg-gradient-to-r from-red-500 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                                    15% Off
                                </span>
                            </div>
                        </div>
                        <span class="inline-block bg-gradient-to-r from-langzy-blue/10 to-blue-50 text-langzy-blue text-sm font-bold px-4 py-2 rounded-full border border-langzy-blue/30">
                            Intermediate Level
                        </span>
                    </div>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 month class</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">2 hrs per day</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Doubt clear session</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Recorded video</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <span class="text-gray-700 text-lg">Teacher feedback</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 px-6 rounded-xl font-bold text-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
        
      
    </div>
</section>
