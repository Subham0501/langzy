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
                    '@type' => 'ContactPage',
                    '@id' => url('/contact') . '#webpage',
                    'url' => url('/contact'),
                    'name' => 'Contact Us - Langzy',
                    'description' => 'Get in touch with Langzy - your trusted partner in mastering the German language. Contact us via email, phone, or visit us in Kathmandu, Nepal.',
                    'isPartOf' => [
                        '@id' => url('/') . '#website'
                    ]
                ],
                [
                    '@type' => 'Organization',
                    'name' => 'Langzy',
                    'url' => url('/'),
                    'contactPoint' => [
                        [
                            '@type' => 'ContactPoint',
                            'telephone' => '+977-9701369495',
                            'contactType' => 'Customer Service',
                            'email' => 'langzy76@gmail.com',
                            'areaServed' => 'Worldwide',
                            'availableLanguage' => ['English', 'German', 'Nepali']
                        ]
                    ],
                    'address' => [
                        '@type' => 'PostalAddress',
                        'addressLocality' => 'Kathmandu',
                        'addressCountry' => 'Nepal'
                    ]
                ]
            ]
        ];
    @endphp
    
    @include('components.seo-meta', [
        'title' => 'Contact Us - Get in Touch with Langzy German Language School | Langzy',
        'description' => 'Get in touch with Langzy - your trusted partner in mastering the German language. Contact us via email at langzy76@gmail.com, phone +977-9701369495, or visit us in Kathmandu, Nepal. We\'re here to help you start your German learning journey.',
        'keywords' => 'contact Langzy, Langzy contact, German language school contact, Langzy email, Langzy phone, contact German course, Langzy support',
        'image' => asset('Group 36.png'),
        'url' => url('/contact'),
        'type' => 'website',
        'structuredData' => $structuredData,
        'canonical' => url('/contact')
    ])
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('Group 36.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('Group 36.png') }}">
    
    @include('components.shared-assets')
</head>
<body class="font-inter bg-white">
    @include('components.nav')

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Left: Gradient Info Panel -->
            <section class="relative rounded-2xl overflow-hidden p-8 bg-gradient-to-br from-langzy-blue to-blue-600 text-white">
                <h1 class="text-4xl font-bold mb-2">Get in Touch</h1>
                <p class="text-white/90 mb-8 max-w-md">Ready to start your language learning journey? We're here to help you.</p>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="rounded-xl border border-white/20 bg-white/10 backdrop-blur px-6 py-6">
                        <div class="text-2xl font-extrabold">10,000+</div>
                        <div class="text-white/80 text-sm mt-1">Happy Students</div>
                    </div>
                    <div class="rounded-xl border border-white/20 bg-white/10 backdrop-blur px-6 py-6">
                        <div class="text-2xl font-extrabold">25+</div>
                        <div class="text-white/80 text-sm mt-1">Languages</div>
                    </div>
                    <div class="rounded-xl border border-white/20 bg-white/10 backdrop-blur px-6 py-6">
                        <div class="text-2xl font-extrabold">24/7</div>
                        <div class="text-white/80 text-sm mt-1">Support</div>
                    </div>
                    <div class="rounded-xl border border-white/20 bg-white/10 backdrop-blur px-6 py-6">
                        <div class="text-2xl font-extrabold">95%</div>
                        <div class="text-white/80 text-sm mt-1">Success Rate</div>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center gap-3 rounded-xl border border-white/20 bg-white/10 backdrop-blur px-5 py-4">
                        <span class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">@</span>
                        <div>
                            <div class="text-sm text-white/80">Email us</div>
                            <div class="font-semibold">langzy76@gmail.com</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 rounded-xl border border-white/20 bg-white/10 backdrop-blur px-5 py-4">
                        <span class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">📞</span>
                        <div>
                            <div class="text-sm text-white/80">Call us</div>
                            <div class="font-semibold">+977-9701369495</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 rounded-xl border border-white/20 bg-white/10 backdrop-blur px-5 py-4">
                        <span class="w-9 h-9 rounded-full bg-white/20 flex items-center justify-center">📍</span>
                        <div>
                            <div class="text-sm text-white/80">Visit us</div>
                            <div class="font-semibold">Kathmandu, Nepal</div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between rounded-xl border border-white/20 bg-white/10 backdrop-blur px-5 py-4">
                        <div>
                            <div class="text-sm text-white/80">We're Online!</div>
                            <div class="font-semibold">Response: 2 hours</div>
                        </div>
                        <div class="text-sm text-white/80">Mon–Fri: 9AM–6PM • Sat: 10AM–4PM</div>
                    </div>
                </div>
            </section>

            <!-- Right: Form -->
            <section>
                <h2 class="text-3xl font-bold text-langzy-dark mb-2">Send us a Message</h2>
                <p class="text-langzy-gray mb-6">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Full Name *</label>
                        <input type="text" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" placeholder="Enter your full name">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Email Address *</label>
                        <input type="email" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" placeholder="your.email@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Contact Number *</label>
                        <input type="tel" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" placeholder="+977-98XXXXXXXX">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Subject *</label>
                        <input type="text" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" placeholder="What can we help you with?">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Message *</label>
                        <textarea rows="5" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" placeholder="Tell us more about your inquiry..."></textarea>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="w-full rounded-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-4 font-semibold shadow-md hover:shadow-lg transition-all">Send Message</button>
                    </div>
                </form>
            </section>
        </div>
    </main>

    @include('components.footer-section')
</body>
</html>


