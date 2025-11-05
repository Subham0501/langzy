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
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 leading-tight">Meet Our Team</h1>
            <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                Get to know the passionate educators and experts dedicated to helping you master the German language.
            </p>
        </div>
    </section>
    
    <!-- Team Members Section -->
    <section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
        <!-- Background Decoration -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 left-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
                <!-- Ashok Dhungana - CEO -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 cursor-pointer relative overflow-hidden" onclick="showTeamMemberModal('Ashok Dhungana', 'CEO', 'https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.24.jpeg', 'At Langzy, our main focus has always been on helping learners truly understand and enjoy the German language. Teaching isn\'t just about grammar or vocabulary — it\'s about building confidence and creating real connections through communication.\\n\\nEvery lesson we design aims to make learning German practical, interesting, and fun. I believe that when students feel comfortable and inspired, real progress begins.\\n\\nI\'m proud to see how Langzy has grown into a community where learning feels natural and meaningful. Thank you to all our learners for being part of this journey — your dedication is what keeps us moving forward.')">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="text-center mb-6">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 mx-auto rounded-2xl overflow-hidden shadow-xl ring-4 ring-langzy-blue/20 group-hover:ring-langzy-blue/40 transition-all">
                                    <img src="https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.24.jpeg" alt="Ashok Dhungana" class="w-full h-full object-cover" style="object-position: left center;" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-langzy-blue to-blue-600 text-white text-4xl font-bold\'>AD</div>'">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    CEO
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-langzy-text mb-2">Ashok Dhungana</h3>
                            <p class="text-lg font-semibold text-langzy-blue mb-4">Chief Executive Officer</p>
                        </div>
                        <div class="border-t border-gray-100 pt-6">
                            <p class="text-gray-700 text-center leading-relaxed text-lg">
                                Visionary leader driving Langzy's mission to make German language learning accessible to everyone. With a passion for education and technology, dedicated to transforming how students learn languages.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Subham Pudasaini - Co-founder & Developer -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 cursor-pointer relative overflow-hidden" onclick="showTeamMemberModal('Subham Pudasaini', 'Co-founder & Developer', 'https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.07.jpeg', 'When we started Langzy, our goal was simple — to make learning German feel easy, natural, and enjoyable for everyone. I wanted to build a platform that doesn\'t just teach words and grammar, but helps you truly connect with the language.\\n\\nEvery part of Langzy — from the design to the learning experience — is created with learners in mind. We keep improving, adding new features, and listening to feedback to make sure your journey with us feels smooth and rewarding.\\n\\nI\'m grateful to everyone who\'s joined us so far. Your trust and enthusiasm keep us motivated to make Langzy better every single day.')">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="text-center mb-6">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 mx-auto rounded-2xl overflow-hidden shadow-xl ring-4 ring-langzy-blue/20 group-hover:ring-langzy-blue/40 transition-all">
                                    <img src="https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.07.jpeg" alt="Subham Pudasaini" class="w-full h-full object-cover object-top" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-langzy-blue to-blue-600 text-white text-4xl font-bold\'>SP</div>'">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-purple-500 to-indigo-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    Co-founder
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-langzy-text mb-2">Subham Pudasaini</h3>
                            <p class="text-lg font-semibold text-langzy-blue mb-4">Co-founder & Developer</p>
                        </div>
                        <div class="border-t border-gray-100 pt-6">
                            <p class="text-gray-700 text-center leading-relaxed text-lg">
                                Tech enthusiast and full-stack developer building the future of language learning. Combining innovation with user experience to create seamless educational platforms that empower learners worldwide.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Saroj Phuyal - Senior Counsellor -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 cursor-pointer relative overflow-hidden" onclick="showTeamMemberModal('Saroj Phuyal', 'Senior Counsellor', 'https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.08.jpeg', 'Experienced counselor dedicated to guiding students on their German language learning journey. Committed to providing personalized support and helping learners achieve their educational goals with expertise and care.')">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="text-center mb-6">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 mx-auto rounded-2xl overflow-hidden shadow-xl ring-4 ring-langzy-blue/20 group-hover:ring-langzy-blue/40 transition-all">
                                    <img src="https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.08.jpeg" alt="Saroj Phuyal" class="w-full h-full object-cover object-center" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-langzy-blue to-blue-600 text-white text-4xl font-bold\'>SP</div>'">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-green-500 to-emerald-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    Senior Counsellor
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-langzy-text mb-2">Saroj Phuyal</h3>
                            <p class="text-lg font-semibold text-langzy-blue mb-4">Senior Counsellor</p>
                        </div>
                        <div class="border-t border-gray-100 pt-6">
                            <p class="text-gray-700 text-center leading-relaxed text-lg">
                                Experienced counselor dedicated to guiding students on their German language learning journey. Committed to providing personalized support and helping learners achieve their educational goals with expertise and care.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Mohit Kumawat - Counsellor -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 cursor-pointer relative overflow-hidden" onclick="showTeamMemberModal('Mohit Kumawat', 'Counsellor', 'https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.08%20(1).jpeg', 'Passionate counselor helping students navigate their path to German language proficiency. Focused on understanding individual needs and providing the support necessary for academic success and personal growth.')">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="text-center mb-6">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 mx-auto rounded-2xl overflow-hidden shadow-xl ring-4 ring-langzy-blue/20 group-hover:ring-langzy-blue/40 transition-all">
                                    <img src="https://pub-c39269ac19d748e6a459d6721369c9d3.r2.dev/WhatsApp%20Image%202025-11-01%20at%2010.09.08%20(1).jpeg" alt="Mohit Kumawat" class="w-full h-full object-cover object-center" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-gradient-to-br from-langzy-blue to-blue-600 text-white text-4xl font-bold\'>MK</div>'">
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    Counsellor
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-langzy-text mb-2">Mohit Kumawat</h3>
                            <p class="text-lg font-semibold text-langzy-blue mb-4">Counsellor</p>
                        </div>
                        <div class="border-t border-gray-100 pt-6">
                            <p class="text-gray-700 text-center leading-relaxed text-lg">
                                Passionate counselor helping students navigate their path to German language proficiency. Focused on understanding individual needs and providing the support necessary for academic success and personal growth.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sanjog Paudel - Counsellor -->
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 cursor-pointer relative overflow-hidden md:col-span-2 lg:col-span-1" onclick="showTeamMemberModal('Sanjog Paudel', 'Counsellor', '', 'Dedicated counselor committed to supporting students throughout their German language learning journey. Providing guidance, encouragement, and personalized assistance to help learners overcome challenges and reach their full potential.')">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                        <div class="text-center mb-6">
                            <div class="relative inline-block mb-6">
                                <div class="w-32 h-32 mx-auto rounded-2xl bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center text-white text-4xl font-bold shadow-xl ring-4 ring-langzy-blue/20 group-hover:ring-langzy-blue/40 transition-all">
                                    SP
                                </div>
                                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    Counsellor
                                </div>
                            </div>
                            <h3 class="text-2xl font-bold text-langzy-text mb-2">Sanjog Paudel</h3>
                            <p class="text-lg font-semibold text-langzy-blue mb-4">Counsellor</p>
                        </div>
                        <div class="border-t border-gray-100 pt-6">
                            <p class="text-gray-700 text-center leading-relaxed text-lg">
                                Dedicated counselor committed to supporting students throughout their German language learning journey. Providing guidance, encouragement, and personalized assistance to help learners overcome challenges and reach their full potential.
                            </p>
                        </div>
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
            
            let initials = '';
            if (name.includes('Ashok')) initials = 'AD';
            else if (name.includes('Subham')) initials = 'SP';
            else if (name.includes('Saroj')) initials = 'SP';
            else if (name.includes('Mohit')) initials = 'MK';
            else if (name.includes('Sanjog')) initials = 'SP';
            
            const imageHtml = photoUrl ? 
                `<div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="${photoUrl}" alt="${name}" class="w-full h-auto object-cover" style="max-height: ${isMobile ? '300px' : '500px'}; object-position: ${objectPosition};" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                    <div class="w-full rounded-2xl bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center text-white text-6xl font-bold shadow-2xl hidden" style="min-height: ${isMobile ? '300px' : '500px'};">
                        ${initials}
                    </div>
                </div>` :
                `<div class="w-full rounded-2xl bg-gradient-to-br from-langzy-blue to-blue-600 flex items-center justify-center text-white text-6xl font-bold shadow-2xl" style="min-height: ${isMobile ? '300px' : '500px'};">
                    ${initials}
                </div>`;
            
            const htmlContent = `
                <div class="flex flex-col md:flex-row gap-6 md:gap-8 items-start">
                    <div class="flex-shrink-0 w-full md:w-2/5">
                        ${imageHtml}
                    </div>
                    <div class="flex-1 w-full md:w-3/5">
                        <div class="mb-6">
                            <h3 class="text-3xl md:text-4xl font-extrabold text-langzy-text mb-3">${name}</h3>
                            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-langzy-blue/10 to-blue-50 border border-langzy-blue/30 rounded-full px-4 py-2">
                                <svg class="w-5 h-5 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-lg md:text-xl font-bold text-langzy-blue">${role}</p>
                            </div>
                        </div>
                        <div class="border-t border-gray-200 pt-6">
                            <h4 class="text-xl md:text-2xl font-bold text-gray-800 mb-4">${messageTitle}</h4>
                            <div class="text-gray-700 leading-relaxed text-base md:text-lg" style="line-height: 1.8;">
                                ${description.replace(/\\n/g, '<br>')}
                            </div>
                        </div>
                    </div>
                </div>
            `;
            
            Swal.fire({
                html: htmlContent,
                width: isMobile ? '95%' : '1100px',
                showConfirmButton: false,
                showCloseButton: true,
                customClass: {
                    popup: 'text-left rounded-2xl',
                    htmlContainer: 'text-left',
                    closeButton: 'text-gray-400 hover:text-gray-600'
                },
                background: '#ffffff',
                padding: isMobile ? '1.5rem' : '3rem',
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
