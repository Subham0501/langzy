<!-- FAQ Section -->
<section id="faq" class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg transform hover:scale-110 transition-transform">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-4">Frequently Asked Questions</h2>
            <p class="text-lg md:text-xl text-langzy-gray max-w-2xl mx-auto leading-relaxed">
                Find answers to common questions about our courses, pricing, and learning process
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">What {{ ucfirst($selectedLanguage ?? 'german') }} language levels do you offer?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        We offer comprehensive {{ ucfirst($selectedLanguage ?? 'german') }} language courses for three levels: A1 (Beginner), A2 (Elementary), and B1 (Intermediate). Each level is designed to build upon the previous one, ensuring a structured learning path from beginner to confident speaker.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">What are the prices for your courses?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        Our course pricing is as follows: A1 level at Rs 8,000, A2 level at Rs 10,000, and B1 level at Rs 11,000. All prices include access to course materials, expert instruction, doubt clearing sessions, recorded videos, and ongoing teacher feedback.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">How long does each course take to complete?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        Each course is designed as a 2-month program with 2 hours of instruction per day. This intensive schedule ensures comprehensive coverage of all course materials while maintaining a steady learning pace.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">Do you provide course materials and recorded videos?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        Yes! All our courses include comprehensive course materials, recorded videos of all sessions, and downloadable resources. You can access these materials anytime to review and reinforce your learning.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">What is included in the doubt clearing session?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        Our doubt clearing sessions provide dedicated time for you to ask questions, clarify concepts, and get personalized help from our expert teachers. These sessions ensure you fully understand the material before moving forward.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">How do I enroll in a course?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        Simply click the "Get Started" button on any pricing plan, and you'll be connected to us via WhatsApp. Our team will guide you through the enrollment process and answer any questions you may have.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">Can I get a refund if I'm not satisfied?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        We want you to be completely satisfied with your learning experience. Please contact us via WhatsApp or email to discuss our refund policy and any concerns you may have. We're committed to finding a solution that works for you.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="faq-item bg-white rounded-2xl shadow-md border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300">
                <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group" onclick="toggleFaq(this)">
                    <span class="text-lg font-semibold text-langzy-text pr-4">What if I have more questions?</span>
                    <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-answer hidden px-6 pb-5">
                    <p class="text-gray-700 leading-relaxed">
                        We're here to help! You can reach out to us through WhatsApp at +977-9701369495, email at langzy76@gmail.com, or visit our contact page. Our team is always ready to answer your questions and assist you with any concerns.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleFaq(button) {
    const faqItem = button.closest('.faq-item');
    const answer = faqItem.querySelector('.faq-answer');
    const icon = button.querySelector('.faq-icon');
    
    // Close all other FAQ items
    document.querySelectorAll('.faq-item').forEach(item => {
        if (item !== faqItem) {
            item.querySelector('.faq-answer').classList.add('hidden');
            item.querySelector('.faq-icon').classList.remove('rotate-180');
        }
    });
    
    // Toggle current FAQ item
    answer.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}
</script>

