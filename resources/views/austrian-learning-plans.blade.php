<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @include('components.seo-meta', [
        'title' => 'Austrian German Learning Plans - Language Class & Exam Preparation | Langzy',
        'description' => 'Choose your Austrian German learning plan at Langzy. Language classes from A1 to B2 level with comprehensive curriculum, or exam preparation classes for ÖSD certification.',
        'keywords' => 'Austrian German learning plans, Austrian German language class, Austrian German exam preparation, A1 Austrian, A2 Austrian, B1 Austrian, B2 Austrian, ÖSD exam, Austrian course pricing',
        'image' => asset('Group 36.png'),
        'url' => url('/austrian-learning-plans'),
        'type' => 'website',
        'canonical' => url('/austrian-learning-plans')
    ])
    
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
    <style>
        .plan-tab.active {
            background: linear-gradient(135deg, #39BDF8, #3b82f6);
            color: white;
            box-shadow: 0 10px 40px -10px rgba(59, 130, 246, 0.5);
        }
        .plan-tab:not(.active) {
            background: white;
            color: #1e293b;
        }
        .level-card {
            transition: all 0.3s ease;
        }
        .level-card:hover {
            transform: translateY(-5px);
        }
        .curriculum-section {
            display: none;
        }
        .curriculum-section.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .skill-badge {
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border: 1px solid #bae6fd;
        }
    </style>
</head>
<body class="font-inter">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Header Section -->
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
                <span class="text-4xl">🇦🇹</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">Choose Your Austrian German Learning Plan</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Master Austrian German with our comprehensive courses designed for all proficiency levels
            </p>
        </div>
    </section>
    
    <!-- Plan Selection Section -->
    <section class="py-16 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Plan Type Tabs -->
            <div class="flex flex-col sm:flex-row justify-center gap-4 mb-16">
                <button onclick="switchPlan('language')" id="language-tab" class="plan-tab active px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center gap-3 border-2 border-transparent hover:border-langzy-blue/30">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                    </svg>
                    <span>Language Class</span>
                </button>
                <button onclick="switchPlan('exam')" id="exam-tab" class="plan-tab px-8 py-4 rounded-2xl font-bold text-lg transition-all duration-300 flex items-center justify-center gap-3 border-2 border-gray-200 hover:border-langzy-blue/30">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Exam Preparation Class</span>
                </button>
            </div>
            
            <!-- Language Class Content -->
            <div id="language-content" class="curriculum-section active">
                <!-- Level Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- A1 Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('language', 'A1')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">A1</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">Beginner Level</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">8,000</span>
                            </div>
                            <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">
                                🔰 Start Here
                            </span>
                        </div>
                    </div>
                    
                    <!-- A2 Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('language', 'A2')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">A2</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">Elementary Level</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">10,000</span>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">
                                🔰 Elementary
                            </span>
                        </div>
                    </div>
                    
                    <!-- B1 Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('language', 'B1')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">B1</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">Intermediate Level</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">12,000</span>
                            </div>
                            <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">
                                🔰 Intermediate
                            </span>
                        </div>
                    </div>
                    
                    <!-- B2 Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('language', 'B2')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">B2</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">Upper-Intermediate</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">15,000</span>
                            </div>
                            <span class="inline-block bg-orange-100 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full">
                                🔰 Advanced
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Level Details Modal Area -->
                <div id="language-details" class="hidden">
                    <!-- Will be populated by JavaScript -->
                </div>
            </div>
            
            <!-- Exam Preparation Content -->
            <div id="exam-content" class="curriculum-section">
                <!-- Level Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- A1 Exam Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('exam', 'A1')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">A1</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">A1 Exam Prep</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">5,000</span>
                            </div>
                            <span class="inline-block bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">
                                📝 ÖSD A1
                            </span>
                        </div>
                    </div>
                    
                    <!-- A2 Exam Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('exam', 'A2')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">A2</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">A2 Exam Prep</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">5,000</span>
                            </div>
                            <span class="inline-block bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1 rounded-full">
                                📝 ÖSD A2
                            </span>
                        </div>
                    </div>
                    
                    <!-- B1 Exam Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('exam', 'B1')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">B1</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">B1 Exam Prep</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">5,000</span>
                            </div>
                            <span class="inline-block bg-purple-100 text-purple-700 text-xs font-semibold px-3 py-1 rounded-full">
                                📝 ÖSD B1
                            </span>
                        </div>
                    </div>
                    
                    <!-- B2 Exam Card -->
                    <div class="level-card bg-white rounded-3xl border-2 border-gray-200 p-6 hover:border-langzy-blue hover:shadow-xl cursor-pointer" onclick="showLevelDetails('exam', 'B2')">
                        <div class="text-center">
                            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-orange-400 to-orange-600 rounded-2xl mb-4 shadow-lg">
                                <span class="text-2xl font-extrabold text-white">B2</span>
                            </div>
                            <h3 class="text-xl font-bold text-langzy-text mb-2">B2 Exam Prep</h3>
                            <div class="flex items-baseline justify-center gap-1 mb-4">
                                <span class="text-2xl font-bold text-langzy-text">Rs</span>
                                <span class="text-4xl font-extrabold text-langzy-blue">7,000</span>
                            </div>
                            <span class="inline-block bg-orange-100 text-orange-700 text-xs font-semibold px-3 py-1 rounded-full">
                                📝 ÖSD B2
                            </span>
                        </div>
                    </div>
                </div>
                
                <!-- Exam Details Modal Area -->
                <div id="exam-details" class="hidden">
                    <!-- Will be populated by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        // Plan data
        const languagePlans = {
            A1: {
                level: 'A1',
                title: 'Beginner Level',
                price: '8,000',
                color: 'green',
                communication: [
                    'Introduce yourself and others',
                    'Ask and answer simple personal questions (name, age, nationality, job)',
                    'Use everyday expressions and basic phrases',
                    'Simple conversations if the other person speaks slowly'
                ],
                grammar: [
                    'German alphabet & pronunciation',
                    'Articles (der, die, das / ein, eine)',
                    'Personal pronouns',
                    'Present tense (Präsens)',
                    'Yes/No questions & W-questions',
                    'Nominative & Accusative cases',
                    'Plural forms',
                    'Separable verbs'
                ],
                vocabulary: [
                    'Greetings & introductions',
                    'Numbers, dates, time',
                    'Family & friends',
                    'Food & drinks',
                    'Daily routine',
                    'Shopping'
                ],
                listening: [
                    'Understand familiar words and simple sentences',
                    'Read short texts like signs, menus, forms'
                ],
                writing: [
                    'Fill forms',
                    'Write short messages and emails'
                ]
            },
            A2: {
                level: 'A2',
                title: 'Elementary Level',
                price: '10,000',
                color: 'blue',
                communication: [
                    'Communicate in routine situations',
                    'Describe daily activities and surroundings',
                    'Talk about past events in a simple way'
                ],
                grammar: [
                    'Past tense (Perfekt)',
                    'Dative case',
                    'Modal verbs (können, müssen, wollen, sollen)',
                    'Comparatives & superlatives',
                    'Reflexive verbs',
                    'Prepositions (with cases)'
                ],
                vocabulary: [
                    'Travel & transportation',
                    'Health & body',
                    'Work & professions',
                    'Weather',
                    'Housing & environment'
                ],
                listening: [
                    'Understand short conversations',
                    'Read simple articles, emails, advertisements'
                ],
                writing: [
                    'Write short letters and emails',
                    'Describe experiences'
                ]
            },
            B1: {
                level: 'B1',
                title: 'Intermediate Level',
                price: '12,000',
                color: 'purple',
                communication: [
                    'Handle most situations while traveling',
                    'Express opinions, hopes, and plans',
                    'Participate in discussions on familiar topics'
                ],
                grammar: [
                    'Past tense (Präteritum of sein & haben)',
                    'Future tense (Futur I)',
                    'Subordinate clauses (weil, dass, wenn)',
                    'Relative clauses',
                    'Passive voice',
                    'Konjunktiv II (basic)'
                ],
                vocabulary: [
                    'Education & studies',
                    'Media & technology',
                    'Culture & traditions',
                    'Social issues',
                    'Work life'
                ],
                listening: [
                    'Understand main points of TV shows, news',
                    'Read newspaper articles and reports'
                ],
                writing: [
                    'Write essays and formal emails',
                    'Express arguments and opinions'
                ]
            },
            B2: {
                level: 'B2',
                title: 'Upper-Intermediate Level',
                price: '15,000',
                color: 'orange',
                communication: [
                    'Communicate fluently and spontaneously',
                    'Argue and defend opinions',
                    'Participate in professional and academic discussions'
                ],
                grammar: [
                    'Advanced passive structures',
                    'Konjunktiv I & II',
                    'Complex sentence structures',
                    'Nominalization',
                    'Advanced prepositions'
                ],
                vocabulary: [
                    'Politics & economics',
                    'Science & technology',
                    'Environment & society',
                    'Professional communication'
                ],
                listening: [
                    'Understand complex texts and lectures',
                    'Follow debates and discussions'
                ],
                writing: [
                    'Write structured essays, reports, and reviews',
                    'Formal and academic writing'
                ]
            }
        };

        const examPlans = {
            A1: {
                level: 'A1',
                title: 'A1 Exam Preparation',
                price: '5,000',
                color: 'green',
                focus: [
                    'ÖSD Zertifikat A1',
                    'ÖSD Zertifikat A1',
                    'telc Deutsch A1'
                ],
                modules: [
                    'Listening comprehension practice',
                    'Reading comprehension exercises',
                    'Writing tasks (filling forms, short messages)',
                    'Speaking practice (introducing yourself, asking questions)'
                ],
                materials: [
                    'Past exam papers',
                    'Mock tests with time limits',
                    'Vocabulary lists for exam topics',
                    'Grammar review sheets'
                ],
                tips: [
                    'Time management strategies',
                    'Common mistakes to avoid',
                    'Exam day preparation',
                    'Stress management techniques'
                ]
            },
            A2: {
                level: 'A2',
                title: 'A2 Exam Preparation',
                price: '5,000',
                color: 'blue',
                focus: [
                    'ÖSD Zertifikat A2',
                    'ÖSD Zertifikat A2',
                    'telc Deutsch A2'
                ],
                modules: [
                    'Advanced listening comprehension',
                    'Reading longer texts and emails',
                    'Writing letters and describing experiences',
                    'Speaking about daily routines and past events'
                ],
                materials: [
                    'Official exam practice books',
                    'Audio materials for listening',
                    'Writing templates and samples',
                    'Speaking prompts and scenarios'
                ],
                tips: [
                    'Answering strategies for multiple choice',
                    'Structuring written responses',
                    'Building confidence for oral exam',
                    'Review techniques before exam'
                ]
            },
            B1: {
                level: 'B1',
                title: 'B1 Exam Preparation',
                price: '5,000',
                color: 'purple',
                focus: [
                    'ÖSD Zertifikat B1',
                    'ÖSD Zertifikat B1',
                    'telc Deutsch B1',
                    'DTZ (Deutsch-Test für Zuwanderer)'
                ],
                modules: [
                    'Complex listening exercises',
                    'Reading articles and reports',
                    'Essay writing and formal emails',
                    'Discussion and presentation skills'
                ],
                materials: [
                    'Comprehensive exam preparation kits',
                    'Authentic exam recordings',
                    'Model answers and analysis',
                    'Grammar and vocabulary review'
                ],
                tips: [
                    'Understanding question formats',
                    'Organizing thoughts for writing',
                    'Handling unexpected speaking topics',
                    'Last-minute preparation checklist'
                ]
            },
            B2: {
                level: 'B2',
                title: 'B2 Exam Preparation',
                price: '7,000',
                color: 'orange',
                focus: [
                    'ÖSD Zertifikat B2',
                    'ÖSD Zertifikat B2',
                    'telc Deutsch B2',
                    'TestDaF preparation'
                ],
                modules: [
                    'Academic listening comprehension',
                    'Complex text analysis',
                    'Academic and formal writing',
                    'Debating and argumentation skills'
                ],
                materials: [
                    'University-level practice materials',
                    'Authentic media recordings',
                    'Professional writing samples',
                    'Advanced grammar exercises'
                ],
                tips: [
                    'Mastering complex question types',
                    'Writing coherent arguments',
                    'Handling abstract discussion topics',
                    'Comprehensive revision strategies'
                ]
            }
        };

        function switchPlan(planType) {
            const languageTab = document.getElementById('language-tab');
            const examTab = document.getElementById('exam-tab');
            const languageContent = document.getElementById('language-content');
            const examContent = document.getElementById('exam-content');
            
            if (planType === 'language') {
                languageTab.classList.add('active');
                examTab.classList.remove('active');
                languageContent.classList.add('active');
                examContent.classList.remove('active');
            } else {
                examTab.classList.add('active');
                languageTab.classList.remove('active');
                examContent.classList.add('active');
                languageContent.classList.remove('active');
            }
            
            // Hide any open details
            document.getElementById('language-details').classList.add('hidden');
            document.getElementById('exam-details').classList.add('hidden');
        }

        function showLevelDetails(planType, level) {
            const isMobile = window.innerWidth < 768;
            
            if (planType === 'language') {
                const plan = languagePlans[level];
                const colorClasses = {
                    green: { bg: 'from-green-400 to-green-600', light: 'bg-green-50', text: 'text-green-700', border: 'border-green-200' },
                    blue: { bg: 'from-blue-400 to-blue-600', light: 'bg-blue-50', text: 'text-blue-700', border: 'border-blue-200' },
                    purple: { bg: 'from-purple-400 to-purple-600', light: 'bg-purple-50', text: 'text-purple-700', border: 'border-purple-200' },
                    orange: { bg: 'from-orange-400 to-orange-600', light: 'bg-orange-50', text: 'text-orange-700', border: 'border-orange-200' }
                };
                const colors = colorClasses[plan.color];
                
                const htmlContent = `
                    <div class="text-left max-h-[80vh] overflow-y-auto">
                        <div class="sticky top-0 bg-white pb-4 mb-6 border-b border-gray-200">
                            <div class="flex items-center gap-4">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br ${colors.bg} rounded-2xl shadow-lg">
                                    <span class="text-2xl font-extrabold text-white">${plan.level}</span>
                                </div>
                                <div>
                                    <h2 class="text-2xl md:text-3xl font-extrabold text-langzy-text">🔰 ${plan.level} – ${plan.title}</h2>
                                    <p class="text-lg font-bold text-langzy-blue">Rs ${plan.price}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Communication Skills -->
                            <div class="${colors.light} rounded-2xl p-5 ${colors.border} border">
                                <h3 class="text-lg font-bold ${colors.text} mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                    </svg>
                                    Communication Skills
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.communication.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-green-500 mt-1">✓</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            
                            <!-- Grammar -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                    Grammar
                                </h3>
                                <div class="flex flex-wrap gap-2">
                                    ${plan.grammar.map(item => `
                                        <span class="skill-badge px-3 py-1.5 rounded-full text-sm font-medium text-blue-700">${item}</span>
                                    `).join('')}
                                </div>
                            </div>
                            
                            <!-- Vocabulary Topics -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                    </svg>
                                    Vocabulary Topics
                                </h3>
                                <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                    ${plan.vocabulary.map(item => `
                                        <span class="bg-white px-3 py-2 rounded-lg text-sm font-medium text-gray-700 border border-gray-200 text-center">📚 ${item}</span>
                                    `).join('')}
                                </div>
                            </div>
                            
                            <!-- Listening & Reading -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"/>
                                    </svg>
                                    Listening & Reading
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.listening.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-blue-500 mt-1">👂</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            
                            <!-- Writing -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                    Writing
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.writing.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-purple-500 mt-1">✏️</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <a href="https://wa.me/9701369495?text=Hi! I'm interested in the Austrian German ${plan.level} ${plan.title} (Rs ${plan.price}). Can you provide more information?" target="_blank" class="w-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 px-6 rounded-xl font-semibold text-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl inline-flex items-center justify-center gap-2">
                                <span>Enroll Now - Rs ${plan.price}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                `;
                
                Swal.fire({
                    html: htmlContent,
                    width: isMobile ? '95%' : '800px',
                    showConfirmButton: false,
                    showCloseButton: true,
                    customClass: {
                        popup: 'rounded-3xl',
                        htmlContainer: 'text-left p-0',
                        closeButton: 'text-gray-400 hover:text-gray-600'
                    },
                    background: '#ffffff',
                    padding: isMobile ? '1.5rem' : '2rem',
                    allowOutsideClick: true,
                    allowEscapeKey: true
                });
            } else {
                const plan = examPlans[level];
                const colorClasses = {
                    green: { bg: 'from-green-400 to-green-600', light: 'bg-green-50', text: 'text-green-700', border: 'border-green-200' },
                    blue: { bg: 'from-blue-400 to-blue-600', light: 'bg-blue-50', text: 'text-blue-700', border: 'border-blue-200' },
                    purple: { bg: 'from-purple-400 to-purple-600', light: 'bg-purple-50', text: 'text-purple-700', border: 'border-purple-200' },
                    orange: { bg: 'from-orange-400 to-orange-600', light: 'bg-orange-50', text: 'text-orange-700', border: 'border-orange-200' }
                };
                const colors = colorClasses[plan.color];
                
                const htmlContent = `
                    <div class="text-left max-h-[80vh] overflow-y-auto">
                        <div class="sticky top-0 bg-white pb-4 mb-6 border-b border-gray-200">
                            <div class="flex items-center gap-4">
                                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br ${colors.bg} rounded-2xl shadow-lg">
                                    <span class="text-2xl font-extrabold text-white">${plan.level}</span>
                                </div>
                                <div>
                                    <h2 class="text-2xl md:text-3xl font-extrabold text-langzy-text">📝 ${plan.title}</h2>
                                    <p class="text-lg font-bold text-langzy-blue">Rs ${plan.price}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-6">
                            <!-- Exam Focus -->
                            <div class="${colors.light} rounded-2xl p-5 ${colors.border} border">
                                <h3 class="text-lg font-bold ${colors.text} mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    Exam Focus
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.focus.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-green-500 mt-1">🎯</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            
                            <!-- Exam Modules -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/>
                                    </svg>
                                    Exam Modules
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    ${plan.modules.map(item => `
                                        <div class="bg-white px-4 py-3 rounded-xl border border-gray-200 flex items-center gap-2">
                                            <span class="text-blue-500">📋</span>
                                            <span class="text-gray-700 text-sm">${item}</span>
                                        </div>
                                    `).join('')}
                                </div>
                            </div>
                            
                            <!-- Study Materials -->
                            <div class="bg-gray-50 rounded-2xl p-5 border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                    Study Materials
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.materials.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-purple-500 mt-1">📚</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                            
                            <!-- Exam Tips -->
                            <div class="bg-yellow-50 rounded-2xl p-5 border border-yellow-200">
                                <h3 class="text-lg font-bold text-yellow-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                    </svg>
                                    Exam Tips & Strategies
                                </h3>
                                <ul class="space-y-2">
                                    ${plan.tips.map(item => `
                                        <li class="flex items-start gap-2 text-gray-700">
                                            <span class="text-yellow-500 mt-1">💡</span>
                                            <span>${item}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <a href="https://wa.me/9701369495?text=Hi! I'm interested in the Austrian German ${plan.level} Exam Preparation (Rs ${plan.price}). Can you provide more information?" target="_blank" class="w-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 px-6 rounded-xl font-semibold text-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl inline-flex items-center justify-center gap-2">
                                <span>Enroll Now - Rs ${plan.price}</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                `;
                
                Swal.fire({
                    html: htmlContent,
                    width: isMobile ? '95%' : '800px',
                    showConfirmButton: false,
                    showCloseButton: true,
                    customClass: {
                        popup: 'rounded-3xl',
                        htmlContainer: 'text-left p-0',
                        closeButton: 'text-gray-400 hover:text-gray-600'
                    },
                    background: '#ffffff',
                    padding: isMobile ? '1.5rem' : '2rem',
                    allowOutsideClick: true,
                    allowEscapeKey: true
                });
            }
        }
    </script>

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>
