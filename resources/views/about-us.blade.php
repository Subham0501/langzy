<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @php
        $structuredData = [
            '@context' => 'https://schema.org',
            '@graph' => [
                [
                    '@type' => 'AboutPage',
                    '@id' => url('/about-us') . '#webpage',
                    'url' => url('/about-us'),
                    'name' => 'About Us - Langzy',
                    'description' => 'Learn about Langzy - your trusted partner in mastering the German language. Discover our mission, values, and commitment to excellence.',
                    'isPartOf' => [
                        '@id' => url('/') . '#website'
                    ],
                    'about' => [
                        '@type' => 'Organization',
                        'name' => 'Langzy',
                        'description' => 'Online German language learning platform empowering language learners worldwide to master German through innovative teaching methods, expert guidance, and a passion for education.'
                    ]
                ],
                [
                    '@type' => 'Organization',
                    'name' => 'Langzy',
                    'url' => url('/'),
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => asset('Group 36.png')
                    ],
                    'description' => 'Empowering language learners worldwide to master German through innovative teaching methods, expert guidance, and a passion for education.',
                    'foundingDate' => '2024',
                    'mission' => 'To make German language learning accessible, engaging, and effective for learners of all levels. We believe that mastering a new language opens doors to new opportunities, cultures, and connections.'
                ]
            ]
        ];
    @endphp
    
    @include('components.seo-meta', [
        'title' => 'About Us - Learn About Langzy German Language School | Langzy',
        'description' => 'Learn about Langzy - your trusted partner in mastering the German language. Discover our mission, values, commitment to excellence, and how we help thousands of students learn German online.',
        'keywords' => 'about Langzy, Langzy German school, German language learning platform, learn about Langzy, Langzy mission, German language education, online German courses about',
        'image' => asset('Group 36.png'),
        'url' => url('/about-us'),
        'type' => 'website',
        'structuredData' => $structuredData,
        'canonical' => url('/about-us')
    ])
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('Group 36.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Group 36.png') }}">
    
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
    @include('components.nav')
    
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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">About Langzy</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Empowering language learners worldwide to master German through innovative teaching methods, expert guidance, and a passion for education.
            </p>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Mission Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 lg:p-10 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-langzy-text mb-4">Our Mission</h2>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            To make German language learning accessible, engaging, and effective for learners of all levels. We believe that mastering a new language opens doors to new opportunities, cultures, and connections.
                        </p>
                    </div>
                </div>

                <!-- Vision Card -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 lg:p-10 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl mb-6 shadow-lg">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </div>
                        <h2 class="text-3xl font-bold text-langzy-text mb-4">Our Vision</h2>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            To become the leading platform for German language education, recognized for our innovative approach, expert instructors, and commitment to student success. We envision a world where language barriers are eliminated.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Our Story</h2>
                <p class="text-xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                    Langzy was born from a simple yet powerful idea: language learning should be accessible, enjoyable, and effective for everyone.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 lg:p-12 shadow-lg border border-gray-100">
                    <div class="prose prose-lg max-w-none">
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            Founded by a team of passionate educators and language enthusiasts, Langzy emerged from the recognition that traditional language learning methods often fall short of meeting modern learners' needs. We saw that students needed more than just textbooks and grammar drills—they needed engaging, interactive experiences that make learning feel natural and fun.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed mb-6">
                            At Langzy, our main focus has always been on helping learners truly understand and enjoy the German language. Teaching isn't just about grammar or vocabulary—it's about building confidence and creating real connections through communication. Every lesson we design aims to make learning German practical, interesting, and fun.
                        </p>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            We believe that when students feel comfortable and inspired, real progress begins. Today, Langzy has grown into a community where learning feels natural and meaningful. We're proud to see how our platform has helped thousands of learners achieve their language goals, and we're committed to continuing this journey of excellence.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Our Values</h2>
                <p class="text-xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                    The principles that guide everything we do at Langzy
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                <!-- Value 1: Excellence -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden text-center">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-12 -mt-12"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-langzy-text mb-3">Excellence</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We strive for excellence in every lesson, every interaction, and every student's learning journey.
                        </p>
                    </div>
                </div>

                <!-- Value 2: Innovation -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden text-center">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-12 -mt-12"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-langzy-text mb-3">Innovation</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We continuously innovate our teaching methods to provide the best learning experience possible.
                        </p>
                    </div>
                </div>

                <!-- Value 3: Community -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden text-center">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-12 -mt-12"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-langzy-text mb-3">Community</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We build a supportive community where learners can grow, connect, and achieve their goals together.
                        </p>
                    </div>
                </div>

                <!-- Value 4: Accessibility -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden text-center">
                    <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-12 -mt-12"></div>
                    <div class="relative">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-langzy-text mb-3">Accessibility</h3>
                        <p class="text-gray-600 leading-relaxed">
                            We make quality German language education accessible to everyone, regardless of their background or location.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Why Choose Langzy?</h2>
                <p class="text-xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                    What sets us apart in the world of language learning
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Expert Teachers</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Learn from certified German language experts from around the world, each bringing years of teaching experience and cultural insights.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Structured Curriculum</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Our comprehensive curriculum covers all levels from A1 to B1, designed to take you from beginner to confident speaker.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Flexible Learning</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Learn at your own pace with flexible scheduling options. Access course materials anytime, anywhere that suits your lifestyle.
                        </p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Proven Results</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Join thousands of successful learners who have achieved their German language goals with our proven teaching methodology.
                        </p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Personalized Support</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Get personalized guidance from our expert counsellors who help you choose the right learning path and support your journey.
                        </p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-400/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center mb-6 shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-langzy-text mb-4">Affordable Pricing</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Quality education shouldn't break the bank. We offer competitive pricing with flexible payment options to suit your budget.
                        </p>
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
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Ready to Start Your German Journey?</h2>
                    <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto leading-relaxed">
                        Join thousands of learners who are mastering German with Langzy. Start your free trial today!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('home') }}" class="group inline-flex items-center justify-center gap-3 bg-white text-langzy-blue px-8 py-4 rounded-full text-lg font-bold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                            <span>Explore Courses</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                        <a href="/contact" class="inline-flex items-center justify-center gap-3 border-2 border-white text-white px-8 py-4 rounded-full text-lg font-bold hover:bg-white hover:text-langzy-blue transition-all duration-300 shadow-lg">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>

