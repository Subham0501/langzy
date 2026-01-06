@php
    $selectedLanguage = $selectedLanguage ?? 'german';
    $languageName = $selectedLanguage === 'austrian' ? 'Austrian German' : ucfirst($selectedLanguage);
    
    // Language-specific curriculum content
    $curriculum = [
        'german' => [
            'A1' => [
                'title' => 'Foundation Level',
                'description' => 'Build your German foundation with essential vocabulary, basic grammar, and everyday conversations.',
                'duration' => '2 months',
                'topics' => [
                    'Basic greetings and introductions',
                    'Numbers, dates, and time',
                    'Articles (der, die, das) & cases',
                    'Present tense & simple sentences'
                ]
            ],
            'A2' => [
                'title' => 'Elementary Level',
                'description' => 'Expand your vocabulary and master more complex grammar to handle everyday situations confidently.',
                'duration' => '2 months',
                'topics' => [
                    'Past tense (Perfekt) & future tense',
                    'Dative case & prepositions',
                    'Modal verbs (können, müssen, wollen)',
                    'Expressing opinions and preferences'
                ]
            ],
            'B1' => [
                'title' => 'Intermediate Level',
                'description' => 'Achieve fluency in most situations and handle complex topics with confidence.',
                'duration' => '2 months',
                'topics' => [
                    'Subjunctive mood (Konjunktiv II)',
                    'Passive voice & relative clauses',
                    'Business and professional German',
                    'Writing formal emails and letters'
                ]
            ]
        ],
        'french' => [
            'A1' => [
                'title' => 'Beginner Level',
                'description' => 'Basic communication and understanding of simple French. Communicate in familiar situations and understand simple French spoken slowly.',
                'duration' => '6 months',
                'topics' => [
                    'Greetings, introductions & personal info',
                    'Present tense (être, avoir, aller, faire)',
                    'Articles (le, la, un, une) & negation',
                    'Numbers, days, months & telling time'
                ]
            ],
            'A2' => [
                'title' => 'Elementary Level',
                'description' => 'Handle everyday interactions comfortably. Interact with simple tasks and understand routine materials.',
                'duration' => '6 months',
                'topics' => [
                    'Passé composé & future tense',
                    'Reflexive verbs & pronouns',
                    'Expanded negation (ne…plus, ne…jamais)',
                    'Shopping, travel & daily life vocabulary'
                ]
            ],
            'B1' => [
                'title' => 'Intermediate Level',
                'description' => 'Communicate independently in common situations. Confident communication in familiar subjects.',
                'duration' => '6 months',
                'topics' => [
                    'Imparfait & conditional mood',
                    'Relative pronouns (qui, que)',
                    'Describe experiences, plans & ambitions',
                    'Education, work & travel topics'
                ]
            ]
        ],
        'austrian' => [
            'A1' => [
                'title' => 'Foundation Level',
                'description' => 'Build your Austrian German foundation with essential vocabulary, basic grammar, and everyday conversations.',
                'duration' => '2 months',
                'topics' => [
                    'Basic greetings and introductions',
                    'Numbers, dates, and time',
                    'Articles (der, die, das) & cases',
                    'Present tense & simple sentences'
                ]
            ],
            'A2' => [
                'title' => 'Elementary Level',
                'description' => 'Expand your vocabulary and master more complex grammar to handle everyday situations confidently.',
                'duration' => '2 months',
                'topics' => [
                    'Past tense (Perfekt) & future tense',
                    'Dative case & prepositions',
                    'Modal verbs (können, müssen, wollen)',
                    'Expressing opinions and preferences'
                ]
            ],
            'B1' => [
                'title' => 'Intermediate Level',
                'description' => 'Achieve fluency in most situations and handle complex topics with confidence.',
                'duration' => '2 months',
                'topics' => [
                    'Subjunctive mood (Konjunktiv II)',
                    'Passive voice & relative clauses',
                    'Business and professional German',
                    'Writing formal emails and letters'
                ]
            ]
        ]
    ];
    
    $currentCurriculum = $curriculum[$selectedLanguage] ?? $curriculum['german'];
@endphp

<!-- Course Curriculum Section -->
<section class="py-24 bg-gradient-to-b from-gray-50 via-white to-gray-50 relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">What You'll Learn</h2>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                Comprehensive curriculum designed to take you from beginner to confident {{ $languageName }} speaker
            </p>
        </div>

        <!-- Course Levels Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- A1 Level -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-200 hover:border-langzy-blue transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-extrabold text-white">A1</span>
                        </div>
                        <span class="text-sm font-bold text-green-600 bg-green-50 px-3 py-1 rounded-full">Beginner</span>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">{{ $currentCurriculum['A1']['title'] }}</h3>
                    <p class="text-langzy-gray mb-6 leading-relaxed">
                        {{ $currentCurriculum['A1']['description'] }}
                    </p>
                    <ul class="space-y-3 mb-6">
                        @foreach($currentCurriculum['A1']['topics'] as $topic)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-langzy-blue flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">{{ $topic }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Duration:</span>
                            <span class="font-semibold text-langzy-text">{{ $currentCurriculum['A1']['duration'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- A2 Level -->
            <div class="group bg-gradient-to-br from-langzy-blue/5 via-white to-blue-50 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-langzy-blue transform hover:-translate-y-2 relative overflow-hidden scale-105">
                <div class="absolute top-4 right-4 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-4 py-1 rounded-full shadow-lg">
                    Popular
                </div>
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/20 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-extrabold text-white">A2</span>
                        </div>
                        <span class="text-sm font-bold text-langzy-blue bg-langzy-blue/10 px-3 py-1 rounded-full">Elementary</span>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">{{ $currentCurriculum['A2']['title'] }}</h3>
                    <p class="text-langzy-gray mb-6 leading-relaxed">
                        {{ $currentCurriculum['A2']['description'] }}
                    </p>
                    <ul class="space-y-3 mb-6">
                        @foreach($currentCurriculum['A2']['topics'] as $topic)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-langzy-blue flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">{{ $topic }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Duration:</span>
                            <span class="font-semibold text-langzy-text">{{ $currentCurriculum['A2']['duration'] }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- B1 Level -->
            <div class="group bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border-2 border-gray-200 hover:border-langzy-blue transform hover:-translate-y-2 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                <div class="relative">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center shadow-lg">
                            <span class="text-2xl font-extrabold text-white">B1</span>
                        </div>
                        <span class="text-sm font-bold text-purple-600 bg-purple-50 px-3 py-1 rounded-full">Intermediate</span>
                    </div>
                    <h3 class="text-2xl font-bold text-langzy-text mb-4">{{ $currentCurriculum['B1']['title'] }}</h3>
                    <p class="text-langzy-gray mb-6 leading-relaxed">
                        {{ $currentCurriculum['B1']['description'] }}
                    </p>
                    <ul class="space-y-3 mb-6">
                        @foreach($currentCurriculum['B1']['topics'] as $topic)
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-langzy-blue flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span class="text-gray-700">{{ $topic }}</span>
                        </li>
                        @endforeach
                    </ul>
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Duration:</span>
                            <span class="font-semibold text-langzy-text">{{ $currentCurriculum['B1']['duration'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Features -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue/10 to-blue-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-langzy-text mb-2">Grammar Materials</h4>
                <p class="text-sm text-langzy-gray">Comprehensive {{ $languageName }} grammar lessons and exercises</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue/10 to-blue-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-langzy-text mb-2">Video Lessons</h4>
                <p class="text-sm text-langzy-gray">Recorded video sessions for review</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue/10 to-blue-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-langzy-text mb-2">Doubt Sessions</h4>
                <p class="text-sm text-langzy-gray">Regular Q&A sessions with teachers</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-shadow">
                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue/10 to-blue-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h4 class="font-bold text-langzy-text mb-2">Progress Tracking</h4>
                <p class="text-sm text-langzy-gray">Monitor your learning journey</p>
            </div>
        </div>

        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="{{ route('course-material.index') }}" class="inline-flex items-center justify-center gap-3 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-8 py-4 rounded-full text-lg font-bold shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
                <span>Explore {{ $languageName }} Course Materials</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
