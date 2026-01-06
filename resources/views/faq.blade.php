<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @php
        $faqStructuredData = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What German language levels do you offer?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We offer comprehensive German language courses for three levels: A1 (Beginner), A2 (Elementary), and B1 (Intermediate). Each level is designed to build upon the previous one, ensuring a structured learning path from beginner to confident speaker.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What are the prices for your courses?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our course pricing is as follows: A1 level at Rs8,000 (discounted from Rs10,000), A2 level at Rs10,000 (discounted from Rs11,000), and B1 level at Rs11,000 (discounted from Rs13,000). All prices include access to course materials, expert instruction, and ongoing support.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you offer a free trial?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, we offer a free trial to help you experience our teaching methods and course structure before committing to a full course. Contact our counsellors to learn more about our free trial options and how to get started.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Who are your teachers?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our teachers are certified German language experts from around the world, each bringing years of teaching experience and cultural insights. They are passionate about helping students succeed and are dedicated to creating an engaging and supportive learning environment.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do I get started?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Getting started is easy! Simply contact one of our counsellors through WhatsApp or our contact page. They will help you choose the right course level based on your current German language skills and learning goals. You can also explore our course materials to get a feel for our teaching style.'
                    ]
                ]
            ]
        ];
        
        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'WebPage',
                    '@id' => url('/faq') . '#webpage',
                    'url' => url('/faq'),
                    'name' => 'FAQ - Langzy',
                    'description' => 'Frequently asked questions about Langzy - your questions answered about our German language courses, pricing, teachers, and more.',
                    'isPartOf' => [
                        '@id' => url('/') . '#website'
                    ]
                ],
                $faqStructuredData
            ]
        ];
    @endphp
    
    @include('components.seo-meta', [
        'title' => 'FAQ - Frequently Asked Questions About Langzy German Courses | Langzy',
        'description' => 'Frequently asked questions about Langzy - your questions answered about our German language courses, pricing, teachers, support, and more. Get all the information you need to start learning German.',
        'keywords' => 'Langzy FAQ, German course questions, Langzy pricing, German language course FAQ, learn German FAQ, Langzy support, German course information',
        'image' => asset('Group 36.png'),
        'url' => url('/faq'),
        'type' => 'website',
        'structuredData' => $structuredData,
        'canonical' => url('/faq')
    ])
    
    <!-- Favicon is included in seo-meta component -->
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'langzy-blue': '#39BDF8',
                        'langzy-sky': '#87CEEB',
                        'langzy-light': '#E0F6FF',
                        'langzy-dark': '#1e293b',
                        'langzy-text': '#1e293b',
                        'langzy-gray': '#64748b',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <!-- Navigation -->
    @include('components.simple-nav')
    
    <!-- Hero Section -->
    <section class="py-24 bg-gradient-to-br from-langzy-blue via-blue-500 to-blue-600 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute top-20 left-20 w-64 h-64 bg-white rounded-full blur-3xl"></div>
                <div class="absolute bottom-20 right-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-3xl mb-8 shadow-xl">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">Frequently Asked Questions</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Find answers to common questions about our German language courses, pricing, and learning experience.
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Course Information -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-langzy-text mb-4">Course Information</h2>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What German language levels do you offer?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We offer comprehensive German language courses for three levels: A1 (Beginner), A2 (Elementary), and B1 (Intermediate). Each level is designed to build upon the previous one, ensuring a structured learning path from beginner to confident speaker.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">How long does each course take to complete?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                The duration of each course varies depending on your learning pace and schedule. Generally, A1 level takes approximately 2-3 months, A2 takes 3-4 months, and B1 takes 4-5 months with regular study. Our flexible learning approach allows you to learn at your own pace.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What teaching methods do you use?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We combine traditional teaching methods with modern technology to create an engaging learning experience. Our approach includes interactive lessons, real-world practice scenarios, grammar exercises, vocabulary building, and conversational practice with native speakers and expert teachers.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Do you provide course materials?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Yes! We provide comprehensive course materials including grammar guides, vocabulary lists, practice exercises, and downloadable resources. You can access all course materials through our Course Material section, organized by categories and subcategories for easy navigation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing & Payment -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-langzy-text mb-4">Pricing & Payment</h2>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 5 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What are the prices for your courses?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Our course pricing is as follows: A1 level at Rs8,000 (discounted from Rs10,000), A2 level at Rs10,000 (discounted from Rs11,000), and B1 level at Rs11,000 (discounted from Rs13,000). All prices include access to course materials, expert instruction, and ongoing support.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Do you offer a free trial?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Yes, we offer a free trial to help you experience our teaching methods and course structure before committing to a full course. Contact our counsellors to learn more about our free trial options and how to get started.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 7 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What payment methods do you accept?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We accept various payment methods including bank transfers, online payment gateways, and other convenient payment options. For specific payment details and to discuss payment plans, please contact our counsellors who will guide you through the process.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 8 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Can I get a refund if I'm not satisfied?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We want you to be completely satisfied with your learning experience. Please contact us to discuss our refund policy and any concerns you may have. We're committed to finding a solution that works for you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Teachers & Support -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-langzy-text mb-4">Teachers & Support</h2>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 9 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Who are your teachers?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Our teachers are certified German language experts from around the world, each bringing years of teaching experience and cultural insights. They are passionate about helping students succeed and are dedicated to creating an engaging and supportive learning environment.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 10 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What kind of support do you provide?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We provide comprehensive support including personalized guidance from our expert counsellors, 24/7 access to course materials, regular feedback from teachers, and a supportive community of learners. Our counsellors help you choose the right learning path and support your journey every step of the way.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 11 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Can I contact teachers directly?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Yes, you can interact with teachers during lessons and through our platform. We encourage communication between students and teachers to ensure a personalized learning experience. You can also reach out to our counsellors who can help coordinate with teachers on your behalf.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- General Questions -->
            <div>
                <div class="text-center mb-12">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                        </svg>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-langzy-text mb-4">General Questions</h2>
                </div>

                <div class="space-y-4">
                    <!-- FAQ Item 12 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">How do I get started?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Getting started is easy! Simply contact one of our counsellors through WhatsApp or our contact page. They will help you choose the right course level based on your current German language skills and learning goals. You can also explore our course materials to get a feel for our teaching style.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 13 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Do I need any prior German language knowledge?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                No prior knowledge is needed! Our A1 course is designed for complete beginners. If you have some German language experience, our counsellors can help you determine which level is most appropriate for you through a quick assessment.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 14 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">Is the course suitable for all ages?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                Yes! Our courses are designed to be accessible and engaging for learners of all ages. Whether you're a student, professional, or retiree, our flexible learning approach can be adapted to suit your needs and schedule.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ Item 15 -->
                    <div class="faq-item bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 flex items-center justify-between hover:bg-gray-50 transition-colors group">
                            <span class="text-lg font-bold text-langzy-text pr-4">What if I have more questions?</span>
                            <svg class="faq-icon w-6 h-6 text-langzy-blue flex-shrink-0 transform transition-transform duration-300 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div class="faq-answer hidden px-6 pb-5">
                            <p class="text-gray-700 leading-relaxed">
                                We're here to help! You can reach out to us through our contact page, WhatsApp, email at langzy76@gmail.com, or call us at +977-9701369495. Our team is always ready to answer your questions and assist you with any concerns you may have.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <div class="bg-gradient-to-br from-langzy-blue to-blue-600 rounded-3xl p-12 lg:p-16 shadow-2xl relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
                <div class="absolute bottom-0 left-0 w-64 h-64 bg-white/10 rounded-full -ml-32 -mb-32"></div>
                <div class="relative z-10">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-3xl mb-8 shadow-xl">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Still Have Questions?</h2>
                    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                        Our team is here to help! Get in touch with us and we'll answer any questions you have.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact') }}" class="group inline-flex items-center justify-center gap-3 bg-white text-langzy-blue px-8 py-4 rounded-full text-lg font-bold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                            <span>Contact Us</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="{{ route('home') }}" class="inline-flex items-center justify-center gap-3 border-2 border-white text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-langzy-blue transition-all duration-300 shadow-lg">
                            <span>Explore Courses</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- FAQ Accordion Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon');
                
                question.addEventListener('click', function() {
                    const isOpen = !answer.classList.contains('hidden');
                    
                    // Close all other FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            const otherAnswer = otherItem.querySelector('.faq-answer');
                            const otherIcon = otherItem.querySelector('.faq-icon');
                            otherAnswer.classList.add('hidden');
                            otherIcon.classList.remove('rotate-180');
                        }
                    });
                    
                    // Toggle current item
                    if (isOpen) {
                        answer.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    } else {
                        answer.classList.remove('hidden');
                        icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>

