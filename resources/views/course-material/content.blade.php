<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $content->title }} - Course Material | Langzy</title>
    @include('components.shared-assets')
    
    @if($content->meta_description)
        <meta name="description" content="{{ $content->meta_description }}">
    @endif
    
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #39BDF8 0%, #E0F6FF 100%);
        }
        .content-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .fade-in {
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .prose {
            line-height: 1.8;
        }
        .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
            color: #1e293b;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .prose h2 {
            font-size: 1.875rem;
            border-bottom: 2px solid #39BDF8;
            padding-bottom: 0.5rem;
        }
        .prose h3 {
            font-size: 1.5rem;
        }
        .prose p {
            margin-bottom: 1.5rem;
        }
        .prose ul, .prose ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .prose li {
            margin-bottom: 0.5rem;
        }
        .prose blockquote {
            border-left: 4px solid #39BDF8;
            padding-left: 1rem;
            margin: 1.5rem 0;
            font-style: italic;
            background: #E0F6FF;
            padding: 1rem;
            border-radius: 0.5rem;
        }
        .prose code {
            background: #E0F6FF;
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }
        .prose pre {
            background: #1e293b;
            color: #e2e8f0;
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1.5rem 0;
        }
        .sticky-nav {
            position: sticky;
            top: 2rem;
        }
    </style>
</head>
<body class="font-inter bg-gradient-to-br from-gray-50 to-langzy-light min-h-screen">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Hero Section -->
    <div class="gradient-bg py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <div class="flex items-center space-x-2 text-blue-100">
                    <a href="{{ route('course-material.index') }}" class="hover:text-white transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                    <span class="text-blue-200">/</span>
                    <a href="{{ route('course-material.index') }}" class="hover:text-white transition-colors duration-200">Course Material</a>
                    <span class="text-blue-200">/</span>
                    <a href="{{ route('course-material.category', $content->category) }}" class="hover:text-white transition-colors duration-200">{{ $content->category->name }}</a>
                    <span class="text-blue-200">/</span>
                    <span class="text-white font-medium">{{ Str::limit($content->title, 30) }}</span>
                </div>
            </nav>

            <div class="text-center fade-in">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-2xl mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    {{ $content->title }}
                </h1>
                <div class="flex flex-wrap items-center justify-center gap-4 text-blue-100">
                    <div class="flex items-center">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                        {{ $content->category->name }}
                    </div>
                    @if($content->subcategory)
                        <div class="flex items-center">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                            {{ $content->subcategory->name }}
                        </div>
                    @endif
                    @if($content->is_featured)
                        <div class="flex items-center">
                            <svg class="h-4 w-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            Featured
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Main Article -->
            <div class="lg:col-span-3">
                <article class="content-card fade-in bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                    @if($content->thumbnail_image)
                        <div class="h-64 md:h-80 bg-gradient-to-br from-blue-100 to-purple-100 relative overflow-hidden">
                            <img src="{{ $content->thumbnail_image }}" alt="{{ $content->title }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                        </div>
                    @endif
                    
                    <div class="p-8 md:p-12">
                        <div class="prose prose-lg max-w-none text-gray-700">
                            {!! $content->content !!}
                        </div>

                        @if(!$isAuthenticated)
                            <!-- Login Prompt for Full Content -->
                            <div class="mt-8 p-6 bg-gradient-to-r from-langzy-light to-langzy-sky rounded-xl border border-langzy-blue/20">
                                <div class="text-center">
                                    <div class="w-16 h-16 bg-langzy-blue rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                        </svg>
                                    </div>
                                    <h3 class="text-xl font-bold text-langzy-dark mb-2">Want to read the full content?</h3>
                                    <p class="text-langzy-gray mb-4">Login to access the complete article and download teaching materials.</p>
                                    <div class="flex flex-col sm:flex-row gap-3 justify-center">
                                        <a href="/admin/login" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-langzy-blue to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-medium shadow-lg">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                            </svg>
                                            Login to Continue
                                        </a>
                                        <a href="{{ route('course-material.category', $content->category) }}" class="inline-flex items-center px-6 py-3 border border-langzy-blue text-langzy-blue rounded-lg hover:bg-langzy-blue hover:text-white transition-all duration-300 font-medium">
                                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                                            </svg>
                                            Back to Category
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($content->teaching_material_pdf && $isAuthenticated)
                            <div class="mt-12 pt-8 border-t border-gray-200">
                                <div class="bg-gradient-to-r from-red-50 to-pink-50 rounded-xl p-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                        <svg class="w-6 h-6 mr-3 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        Teaching Material
                                    </h3>
                                    <p class="text-gray-600 mb-4">View the PDF version of this lesson in your browser.</p>
                                    <a href="{{ $content->teaching_material_pdf }}" target="_blank" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-500 to-pink-600 text-white rounded-lg hover:from-red-600 hover:to-pink-700 transition-all duration-300 font-medium shadow-lg hover:shadow-xl">
                                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        View PDF
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </article>

                <!-- Navigation -->
                <div class="mt-8 flex flex-col sm:flex-row justify-between gap-4">
                    <a href="{{ route('course-material.category', $content->category) }}" class="inline-flex items-center px-6 py-3 bg-white text-gray-700 rounded-lg hover:bg-gray-50 transition-all duration-300 font-medium shadow-lg hover:shadow-xl border border-gray-200">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        Back to {{ $content->category->name }}
                    </a>
                    
                    <a href="{{ route('course-material.index') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-lg hover:from-blue-600 hover:to-purple-700 transition-all duration-300 font-medium shadow-lg hover:shadow-xl">
                        All Course Material
                        <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky-nav">
                    <!-- Lesson Info -->
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-6 border border-gray-100">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Lesson Info</h3>
                        <div class="space-y-3">
                            <div class="flex items-center text-sm text-gray-600">
                                <svg class="w-4 h-4 mr-3 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                </svg>
                                <span class="font-medium">Category:</span>
                                <span class="ml-2">{{ $content->category->name }}</span>
                            </div>
                            @if($content->subcategory)
                                <div class="flex items-center text-sm text-gray-600">
                                    <svg class="w-4 h-4 mr-3 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                    </svg>
                                    <span class="font-medium">Subcategory:</span>
                                    <span class="ml-2">{{ $content->subcategory->name }}</span>
                                </div>
                            @endif
                            @if($content->is_featured)
                                <div class="flex items-center text-sm text-yellow-600">
                                    <svg class="w-4 h-4 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <span class="font-medium">Featured Lesson</span>
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Quick Actions -->
           
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="fixed bottom-6 right-6 z-50">
        <div class="flex flex-col space-y-3">
            @if(!$isAuthenticated)
                <!-- Quick Login Button -->
                <a href="/admin/login" class="group relative">
                    <div class="bg-gradient-to-r from-langzy-blue to-blue-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                    </div>
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        Quick Login
                    </div>
                </a>
            @endif
            
            <!-- Back to Category -->
            <a href="{{ route('course-material.category', $content->category) }}" class="group relative">
                <div class="bg-gradient-to-r from-gray-600 to-gray-700 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </div>
                <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    Back to {{ $content->category->name }}
                </div>
            </a>
            
            <!-- View All Categories -->
            <a href="{{ route('course-material.index') }}" class="group relative">
                <div class="bg-gradient-to-r from-langzy-sky to-blue-500 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                    All Categories
                </div>
            </a>
            
            @if($content->teaching_material_pdf && $isAuthenticated)
                <!-- Quick PDF View -->
                <a href="{{ $content->teaching_material_pdf }}" target="_blank" class="group relative">
                    <div class="bg-gradient-to-r from-red-500 to-pink-600 text-white p-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 hover:scale-110">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        View PDF
                    </div>
                </a>
            @elseif($content->teaching_material_pdf && !$isAuthenticated)
                <!-- PDF Locked for Non-Authenticated Users -->
                <div class="group relative cursor-not-allowed">
                    <div class="bg-gradient-to-r from-gray-400 to-gray-500 text-white p-4 rounded-full shadow-lg opacity-60">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <div class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-900 text-white px-3 py-1 rounded-lg text-sm whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        Login to View PDF
                    </div>
                </div>
            @endif
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>