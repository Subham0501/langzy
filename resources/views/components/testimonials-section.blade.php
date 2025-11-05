<!-- Testimonials Section -->
<section id="reviews" class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">What Our Students Say</h2>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                Join thousands of successful German learners who have achieved their language goals with Langzy.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center mb-6">
                        <div class="flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-langzy-text mb-8 italic text-lg leading-relaxed">
                        "Langzy made learning German so much easier! The interactive lessons and native speaker teachers helped me reach B2 level in just 8 months."
                    </p>
                    <div class="flex items-center pt-6 border-t border-gray-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-white font-bold text-lg">SM</span>
                        </div>
                        <div>
                            <div class="font-bold text-langzy-text text-lg">Sarah Miller</div>
                            <div class="text-langzy-gray text-sm">Software Engineer</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center mb-6">
                        <div class="flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-langzy-text mb-8 italic text-lg leading-relaxed">
                        "The structured approach and excellent teachers made all the difference. I can now confidently communicate in German at work!"
                    </p>
                    <div class="flex items-center pt-6 border-t border-gray-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-white font-bold text-lg">MJ</span>
                        </div>
                        <div>
                            <div class="font-bold text-langzy-text text-lg">Michael Johnson</div>
                            <div class="text-langzy-gray text-sm">Business Analyst</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center mb-6">
                        <div class="flex gap-1">
                            @for($i = 1; $i <= 5; $i++)
                                <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <p class="text-langzy-text mb-8 italic text-lg leading-relaxed">
                        "Amazing platform! The personalized learning path and supportive community helped me achieve my German language goals faster than I ever imagined."
                    </p>
                    <div class="flex items-center pt-6 border-t border-gray-100">
                        <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mr-4 shadow-lg">
                            <span class="text-white font-bold text-lg">ED</span>
                        </div>
                        <div>
                            <div class="font-bold text-langzy-text text-lg">Emma Davis</div>
                            <div class="text-langzy-gray text-sm">Marketing Manager</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
