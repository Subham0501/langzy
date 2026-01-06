<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Langzy - Choose Your Language</title>
    @include('components.shared-assets')
    <style>
        .language-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .language-card:hover {
            transform: translateY(-12px) scale(1.02);
        }
        .float-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body class="font-inter bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-100 min-h-screen">
    <!-- Header Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="h-12 w-auto">
                </a>
                
                <!-- Navigation Links -->
                <div class="hidden lg:flex items-center space-x-2 xl:space-x-4">
                    <a href="{{ route('about-us') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">About</a>

                    <a href="{{ route('contact') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">Contact</a>
                    <a href="{{ route('our-team') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">Team</a>

                </div>

                <!-- Right Side -->
                <div class="hidden lg:flex items-center space-x-3">
                    <a href="/admin/login" class="px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors rounded-lg hover:bg-langzy-blue/5">Login</a>
                    <a href="#languages" class="px-6 py-2.5 bg-gradient-to-r from-langzy-blue to-blue-600 text-white rounded-full font-semibold hover:from-blue-600 hover:to-blue-700 transition-all shadow-lg text-sm">
                        Get Started →
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-gray-700 hover:text-langzy-blue">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4">
                <a href="{{ route('about-us') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">About</a>
                <a href="{{ route('course-material.index') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Courses</a>
                <a href="{{ route('contact') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Contact</a>
                <a href="{{ route('our-team') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Team</a>
                <a href="{{ route('information.index') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Info</a>
                <div class="pt-4 border-t border-gray-200 mt-2">
                    <a href="/admin/login" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Login</a>
                    <a href="#languages" class="block mx-4 mt-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-3 rounded-full font-bold shadow-lg text-center">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-72 h-72 bg-langzy-blue/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-20 w-96 h-96 bg-blue-400/10 rounded-full blur-3xl"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-purple-300/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Main Content -->
    <div id="languages" class="relative z-10 min-h-[calc(100vh-80px)] flex flex-col items-center justify-center px-4 py-12">
        <!-- Logo -->
        <div class="mb-8 float-animation">
            <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="h-24 md:h-32 w-auto drop-shadow-2xl">
        </div>

        <!-- Welcome Text -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-langzy-text mb-4">
                Welcome to <span class="bg-gradient-to-r from-langzy-blue to-blue-600 bg-clip-text text-transparent">Langzy</span>
            </h1>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-2xl mx-auto">
                Your journey to language mastery begins here. Choose your language to get started.
            </p>
        </div>

        <!-- Language Selection -->
        <div class="w-full max-w-4xl">
            <div class="text-center mb-8">
                <div class="inline-flex items-center gap-2 bg-white/80 backdrop-blur-sm rounded-full px-6 py-3 shadow-lg border border-gray-200">
                    <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                    </svg>
                    <span class="text-lg font-semibold text-langzy-text">Select Your Language Course</span>
                </div>
            </div>

            <!-- Language Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- German -->
                <a href="{{ route('language.switch', 'german') }}" class="language-card group">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:border-langzy-blue/30 hover:shadow-2xl text-center">
                        <div class="text-6xl md:text-7xl mb-4">🇩🇪</div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-langzy-blue transition-colors">German</h3>
                        <p class="text-gray-500 mb-4">Deutsch</p>
                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">Goethe Cert</span>
                            <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-semibold rounded-full">A1 - B2</span>
                        </div>
                        <div class="inline-flex items-center gap-2 text-langzy-blue font-semibold group-hover:gap-3 transition-all">
                            <span>Start Learning</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- French -->
                <a href="{{ route('language.switch', 'french') }}" class="language-card group">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:border-langzy-blue/30 hover:shadow-2xl text-center">
                        <div class="text-6xl md:text-7xl mb-4">🇫🇷</div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-langzy-blue transition-colors">French</h3>
                        <p class="text-gray-500 mb-4">Français</p>
                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">DELF Cert</span>
                            <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-semibold rounded-full">A1 - B2</span>
                        </div>
                        <div class="inline-flex items-center gap-2 text-langzy-blue font-semibold group-hover:gap-3 transition-all">
                            <span>Start Learning</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Austria -->
                <a href="{{ route('language.switch', 'austrian') }}" class="language-card group">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:border-langzy-blue/30 hover:shadow-2xl text-center">
                        <div class="text-6xl md:text-7xl mb-4">🇦🇹</div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2 group-hover:text-langzy-blue transition-colors">Austria</h3>
                        <p class="text-gray-500 mb-4">Österreich</p>
                        <div class="flex flex-wrap justify-center gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-50 text-blue-600 text-xs font-semibold rounded-full">ÖSD Cert</span>
                            <span class="px-3 py-1 bg-green-50 text-green-600 text-xs font-semibold rounded-full">A1 - B2</span>
                        </div>
                        <div class="inline-flex items-center gap-2 text-langzy-blue font-semibold group-hover:gap-3 transition-all">
                            <span>Start Learning</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- Footer Info -->
        <div class="mt-16 text-center">
            <p class="text-gray-500 mb-4">Trusted by thousands of language learners worldwide</p>
            <div class="flex flex-wrap justify-center items-center gap-6 text-sm text-langzy-gray">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Expert Teachers</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Structured Courses</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                    <span>Exam Preparation</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
            document.getElementById('menu-icon').classList.toggle('hidden');
            document.getElementById('close-icon').classList.toggle('hidden');
        });
    </script>
</body>
</html>
