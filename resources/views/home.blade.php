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
                    '@type' => 'Organization',
                    '@id' => url('/') . '#organization',
                    'name' => 'Langzy',
                    'url' => url('/'),
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => asset('Group 36.png'),
                        'width' => 512,
                        'height' => 512
                    ],
                    'description' => 'Master new languages with expert tutors, structured courses, and personalized learning paths. Join thousands of successful language learners worldwide.',
                    'sameAs' => [
                        // Add social media links when available
                    ],
                    'contactPoint' => [
                        '@type' => 'ContactPoint',
                        'contactType' => 'Customer Service',
                        'availableLanguage' => ['English', 'German']
                    ]
                ],
                [
                    '@type' => 'WebSite',
                    '@id' => url('/') . '#website',
                    'url' => url('/'),
                    'name' => 'Langzy',
                    'description' => 'Master new languages with expert tutors, structured courses, and personalized learning paths. Join thousands of successful language learners worldwide.',
                    'publisher' => [
                        '@id' => url('/') . '#organization'
                    ],
                    'potentialAction' => [
                        '@type' => 'SearchAction',
                        'target' => [
                            '@type' => 'EntryPoint',
                            'urlTemplate' => url('/') . '?s={search_term_string}'
                        ],
                        'query-input' => 'required name=search_term_string'
                    ]
                ],
                [
                    '@type' => 'EducationalOrganization',
                    '@id' => url('/') . '#educational',
                    'name' => 'Langzy',
                    'url' => url('/'),
                    'description' => 'Online German language learning platform with expert tutors and structured courses.',
                    'educationalCredentialAwarded' => 'Language Certificate',
                    'offers' => [
                        '@type' => 'Offer',
                        'category' => 'Language Education',
                        'description' => 'German language courses with expert tutors'
                    ]
                ],
                [
                    '@type' => 'Course',
                    'name' => 'German Language Course',
                    'description' => 'Comprehensive German language learning course with expert tutors, structured curriculum, and personalized learning paths.',
                    'provider' => [
                        '@id' => url('/') . '#organization'
                    ],
                    'courseCode' => 'GER-101',
                    'educationalLevel' => 'Beginner to Advanced',
                    'inLanguage' => 'German',
                    'teaches' => 'German Language'
                ]
            ]
        ];
    @endphp
    
    @include('components.seo-meta', [
        'title' => 'Langzy - Grow your words. Expand your world. | Learn German Online',
        'description' => 'Master German language with expert tutors, structured courses, and personalized learning paths at Langzy. Join thousands of successful language learners worldwide. Free trial available.',
        'keywords' => 'Langzy, German language learning, learn German online, German tutors, online German courses, German language school, German classes, learn German, German lessons, German course, German teacher, German language classes, best German course online',
        'image' => asset('Group 36.png'),
        'url' => url('/'),
        'type' => 'website',
        'structuredData' => $structuredData,
        'canonical' => url('/')
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
    @include('components.hero-section')

    <!-- Course Curriculum Section -->
    @include('components.curriculum-section')

    <!-- Features Section -->
    @include('components.features-section')

    <!-- Pricing Section -->
    @include('components.pricing-section')

    <!-- Testimonials Section -->
    @include('components.testimonials-section')

    <!-- Teacher Section -->
    @include('components.teacher-section')

    <!-- Counselling Section -->
    @include('components.counselling-section')

    <!-- FAQ Section -->
    @include('components.faq-section')

    <!-- Call to Action Section -->
    @include('components.cta-section')

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>