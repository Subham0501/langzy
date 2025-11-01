<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Our Team - Langzy</title>
    <meta name="description" content="Meet our experienced German language experts and teachers from around the world.">
    
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
    
    <!-- Meet Our Team Header Section -->
    <section class="py-12 md:py-16 bg-gradient-to-br from-langzy-blue to-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-3 md:mb-4">Meet Our Team</h1>
            <p class="text-base sm:text-lg md:text-xl text-blue-100 max-w-2xl mx-auto px-2">
                Get to know the passionate educators and experts dedicated to helping you master the German language.
            </p>
        </div>
    </section>
    
    <!-- Team Members Section -->
    <section class="py-12 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 max-w-5xl mx-auto">
                <!-- Ashok Shungana - CEO -->
                <div class="bg-gradient-to-br from-blue-50 to-langzy-light rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" onclick="showTeamMemberModal('Ashok Dhungana', 'CEO', '{{ asset('WhatsApp Image 2025-11-01 at 10.09.24.jpeg') }}', 'At Langzy, our main focus has always been on helping learners truly understand and enjoy the German language. Teaching isn\'t just about grammar or vocabulary — it\'s about building confidence and creating real connections through communication.\\n\\nEvery lesson we design aims to make learning German practical, interesting, and fun. I believe that when students feel comfortable and inspired, real progress begins.\\n\\nI\'m proud to see how Langzy has grown into a community where learning feels natural and meaningful. Thank you to all our learners for being part of this journey — your dedication is what keeps us moving forward.')">
                    <div class="text-center mb-4 md:mb-6">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto mb-3 md:mb-4 rounded-full overflow-hidden shadow-lg ring-2 md:ring-4 ring-white">
                            <img src="{{ asset('WhatsApp Image 2025-11-01 at 10.09.24.jpeg') }}" alt="Ashok Shungana" class="w-full h-full object-cover" style="object-position: left center;">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-langzy-text mb-2">Ashok Dhungana</h3>
                        <p class="text-base sm:text-lg font-semibold text-langzy-blue mb-3 md:mb-4">CEO</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4 md:pt-6">
                        <p class="text-sm sm:text-base text-gray-700 text-center leading-relaxed">
                            Visionary leader driving Langzy's mission to make German language learning accessible to everyone. With a passion for education and technology, dedicated to transforming how students learn languages.
                        </p>
                    </div>
                </div>

                <!-- Subham Pudasaini - Co-founder & Developer -->
                <div class="bg-gradient-to-br from-langzy-light to-blue-50 rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" onclick="showTeamMemberModal('Subham Pudasaini', 'Co-founder & Developer', '{{ asset('WhatsApp Image 2025-11-01 at 10.09.07.jpeg') }}', 'When we started Langzy, our goal was simple — to make learning German feel easy, natural, and enjoyable for everyone. I wanted to build a platform that doesn\'t just teach words and grammar, but helps you truly connect with the language.\\n\\nEvery part of Langzy — from the design to the learning experience — is created with learners in mind. We keep improving, adding new features, and listening to feedback to make sure your journey with us feels smooth and rewarding.\\n\\nI\'m grateful to everyone who\'s joined us so far. Your trust and enthusiasm keep us motivated to make Langzy better every single day.')">
                    <div class="text-center mb-4 md:mb-6">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto mb-3 md:mb-4 rounded-full overflow-hidden shadow-lg ring-2 md:ring-4 ring-white">
                            <img src="{{ asset('WhatsApp Image 2025-11-01 at 10.09.07.jpeg') }}" alt="Subham Pudasaini" class="w-full h-full object-cover object-top">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-langzy-text mb-2">Subham Pudasaini</h3>
                        <p class="text-base sm:text-lg font-semibold text-langzy-blue mb-3 md:mb-4">Co-founder & Developer</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4 md:pt-6">
                        <p class="text-sm sm:text-base text-gray-700 text-center leading-relaxed">
                            Tech enthusiast and full-stack developer building the future of language learning. Combining innovation with user experience to create seamless educational platforms that empower learners worldwide.
                        </p>
                    </div>
                </div>

                <!-- Saroj Phuyal - Senior Counsellor -->
                <div class="bg-gradient-to-br from-blue-50 to-langzy-light rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" onclick="showTeamMemberModal('Saroj Phuyal', 'Senior Counsellor', '{{ asset('WhatsApp Image 2025-11-01 at 10.09.08.jpeg') }}', 'Experienced counselor dedicated to guiding students on their German language learning journey. Committed to providing personalized support and helping learners achieve their educational goals with expertise and care.')">
                    <div class="text-center mb-4 md:mb-6">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto mb-3 md:mb-4 rounded-full overflow-hidden shadow-lg ring-2 md:ring-4 ring-white">
                            <img src="{{ asset('WhatsApp Image 2025-11-01 at 10.09.08.jpeg') }}" alt="Saroj Phuyal" class="w-full h-full object-cover object-center">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-langzy-text mb-2">Saroj Phuyal</h3>
                        <p class="text-base sm:text-lg font-semibold text-langzy-blue mb-3 md:mb-4">Senior Counsellor</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4 md:pt-6">
                        <p class="text-sm sm:text-base text-gray-700 text-center leading-relaxed">
                            Experienced counselor dedicated to guiding students on their German language learning journey. Committed to providing personalized support and helping learners achieve their educational goals with expertise and care.
                        </p>
                    </div>
                </div>

                <!-- Mohit Kumawat - Counsellor -->
                <div class="bg-gradient-to-br from-langzy-light to-blue-50 rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" onclick="showTeamMemberModal('Mohit Kumawat', 'Counsellor', '{{ asset('WhatsApp Image 2025-11-01 at 10.09.08 (1).jpeg') }}', 'Passionate counselor helping students navigate their path to German language proficiency. Focused on understanding individual needs and providing the support necessary for academic success and personal growth.')">
                    <div class="text-center mb-4 md:mb-6">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto mb-3 md:mb-4 rounded-full overflow-hidden shadow-lg ring-2 md:ring-4 ring-white">
                            <img src="{{ asset('WhatsApp Image 2025-11-01 at 10.09.08 (1).jpeg') }}" alt="Mohit Kumawat" class="w-full h-full object-cover object-center">
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-langzy-text mb-2">Mohit Kumawat</h3>
                        <p class="text-base sm:text-lg font-semibold text-langzy-blue mb-3 md:mb-4">Counsellor</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4 md:pt-6">
                        <p class="text-sm sm:text-base text-gray-700 text-center leading-relaxed">
                            Passionate counselor helping students navigate their path to German language proficiency. Focused on understanding individual needs and providing the support necessary for academic success and personal growth.
                        </p>
                    </div>
                </div>

                <!-- Sanjog Paudel - Counsellor -->
                <div class="bg-gradient-to-br from-blue-50 to-langzy-light rounded-2xl shadow-xl p-4 sm:p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer" onclick="showTeamMemberModal('Sanjog Paudel', 'Counsellor', '', 'Dedicated counselor committed to supporting students throughout their German language learning journey. Providing guidance, encouragement, and personalized assistance to help learners overcome challenges and reach their full potential.')">
                    <div class="text-center mb-4 md:mb-6">
                        <div class="w-32 h-32 sm:w-36 sm:h-36 md:w-40 md:h-40 mx-auto mb-3 md:mb-4 rounded-full bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center text-white text-3xl sm:text-4xl font-bold shadow-lg">
                            SP
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-langzy-text mb-2">Sanjog Paudel</h3>
                        <p class="text-base sm:text-lg font-semibold text-langzy-blue mb-3 md:mb-4">Counsellor</p>
                    </div>
                    <div class="border-t border-gray-200 pt-4 md:pt-6">
                        <p class="text-sm sm:text-base text-gray-700 text-center leading-relaxed">
                            Dedicated counselor committed to supporting students throughout their German language learning journey. Providing guidance, encouragement, and personalized assistance to help learners overcome challenges and reach their full potential.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- SweetAlert2 CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Responsive Close Button Styles -->
    <style>
        @media (max-width: 768px) {
            .swal2-close {
                width: 36px !important;
                height: 36px !important;
                font-size: 24px !important;
                line-height: 36px !important;
                padding: 0 !important;
            }
        }
        @media (min-width: 769px) {
            .swal2-close {
                width: 32px !important;
                height: 32px !important;
                font-size: 20px !important;
                line-height: 32px !important;
            }
        }
        .swal2-close:hover {
            transform: scale(1.1);
            transition: transform 0.2s ease;
        }
    </style>

    <!-- Team Member Modal Script -->
    <script>
        function showTeamMemberModal(name, role, photoUrl, description) {
            const isMobile = window.innerWidth < 768;
            let messageTitle = 'Message';
            let objectPosition = 'center';
            
            if (name.includes('Ashok')) {
                messageTitle = 'Message from Ashok';
                objectPosition = 'left center';
            } else if (name.includes('Subham')) {
                messageTitle = 'Message from Subham';
                objectPosition = 'top center';
            } else if (name.includes('Saroj')) {
                messageTitle = 'Message from Saroj';
                objectPosition = 'center';
            } else if (name.includes('Mohit')) {
                messageTitle = 'Message from Mohit';
                objectPosition = 'center';
            } else if (name.includes('Sanjog')) {
                messageTitle = 'Message from Sanjog';
                objectPosition = 'center';
            }
            
            const imageHtml = photoUrl ? 
                `<img src="${photoUrl}" alt="${name}" class="w-full h-auto rounded-lg shadow-lg object-cover" style="max-height: ${isMobile ? '300px' : '500px'}; object-position: ${objectPosition};">` :
                `<div class="w-full h-full rounded-lg bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center text-white text-6xl font-bold shadow-lg" style="min-height: ${isMobile ? '300px' : '500px'};">
                    SP
                </div>`;
            
            const htmlContent = `
                <div class="flex flex-col md:flex-row gap-4 md:gap-6 items-start">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        ${imageHtml}
                    </div>
                    <div class="flex-1 w-full md:w-2/3">
                        <h3 class="text-xl md:text-2xl font-bold text-gray-800 mb-2">${name}</h3>
                        <p class="text-base md:text-lg text-langzy-blue mb-4 md:mb-6">${role}</p>
                        <div class="border-t border-gray-200 pt-3 md:pt-4">
                            <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-3 md:mb-4">${messageTitle}</h4>
                            <div class="text-gray-700 leading-relaxed text-sm md:text-base" style="line-height: 1.7;">
                                ${description.replace(/\\n/g, '<br>')}
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            Swal.fire({
                html: htmlContent,
                width: isMobile ? '95%' : '1000px',
                showConfirmButton: false,
                showCloseButton: true,
                customClass: {
                    popup: 'text-left rounded-lg',
                    htmlContainer: 'text-left',
                    closeButton: 'text-gray-400 hover:text-gray-600'
                },
                background: '#ffffff',
                padding: isMobile ? '1.5rem' : '2.5rem',
                allowOutsideClick: true,
                allowEscapeKey: true,
                backdrop: true
            });
        }
    </script>

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>

