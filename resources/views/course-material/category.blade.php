<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }} - Course Material | Langzy</title>
    @include('components.shared-assets')
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #39BDF8 0%, #E0F6FF 100%);
        }
        .content-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .content-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -12px rgba(57, 189, 248, 0.25);
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
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .breadcrumb {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="font-inter bg-gradient-to-br from-gray-50 to-langzy-light min-h-screen">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Hero Section -->
    <div class="gradient-bg py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="mb-8">
                <div class="flex items-center space-x-2 text-white">
                    <a href="{{ route('course-material.index') }}" class="hover:text-langzy-light transition-colors duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </a>
                    <span class="text-langzy-light">/</span>
                    <a href="{{ route('course-material.index') }}" class="hover:text-langzy-light transition-colors duration-200">Course Material</a>
                    <span class="text-langzy-light">/</span>
                    <span class="text-white font-medium">{{ $category->name }}</span>
                </div>
            </nav>

            <div class="text-center fade-in">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-2xl mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                    {{ $category->name }}
                </h1>
                @if($category->description)
                    <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed">
                        {{ $category->description }}
                    </p>
                @endif
            </div>
        </div>
    </div>

    <!-- Content Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($category->contents->count() > 0)
            <div class="mb-8">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-langzy-text">Lessons</h2>
                    <div class="flex items-center text-sm text-langzy-gray">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        {{ $category->contents->count() }} {{ Str::plural('lesson', $category->contents->count()) }}
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($category->contents as $index => $content)
                    <div class="content-card fade-in stagger-{{ ($index % 3) + 1 }} bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
                        <!-- Thumbnail -->
                        @if($content->thumbnail_image)
                            <div class="h-48 bg-gradient-to-br from-langzy-light to-langzy-sky relative overflow-hidden">
                                <img src="{{ $content->thumbnail_image }}" alt="{{ $content->title }}" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                            </div>
                        @else
                            <div class="h-48 bg-gradient-to-br from-langzy-light to-langzy-sky flex items-center justify-center">
                                <svg class="w-16 h-16 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                        @endif

                        <!-- Content -->
                        <div class="p-6">
                            <div class="flex items-start justify-between mb-3">
                                <h3 class="text-lg font-semibold text-langzy-text line-clamp-2">
                                    <a href="{{ route('course-material.content', $content) }}" class="hover:text-langzy-blue transition-colors duration-200">
                                        {{ $content->title }}
                                    </a>
                                </h3>
                                @if($content->is_featured)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 ml-2">
                                        Featured
                                    </span>
                                @endif
                            </div>

                            @if($content->subcategory)
                                <div class="mb-3">
                                    <span class="inline-flex items-center px-2 py-1 rounded-md text-xs font-medium bg-langzy-light text-langzy-blue">
                                        {{ $content->subcategory->name }}
                                    </span>
                                </div>
                            @endif

                            @if($content->meta_description)
                                <p class="text-langzy-gray text-sm mb-4 line-clamp-3">{{ $content->meta_description }}</p>
                            @endif

                            <!-- Actions -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center space-x-4">
                                    @if($content->teaching_material_pdf && $isAuthenticated)
                                        <a href="{{ $content->teaching_material_pdf }}" target="_blank" class="flex items-center text-sm text-langzy-gray hover:text-langzy-blue transition-colors duration-200">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                            </svg>
                                            View PDF
                                        </a>
                                    @elseif($content->teaching_material_pdf && !$isAuthenticated)
                                        <span class="flex items-center text-sm text-gray-400">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                            </svg>
                                            Login to View PDF
                                        </span>
                                    @endif
                                </div>
                                <a href="{{ route('course-material.content', $content) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-langzy-blue to-langzy-sky text-white rounded-lg hover:from-blue-500 hover:to-blue-400 transition-all duration-300 font-medium text-sm shadow-lg hover:shadow-xl">
                                    Read
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-br from-langzy-light to-langzy-sky rounded-full flex items-center justify-center mx-auto mb-8">
                    <svg class="w-12 h-12 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-langzy-text mb-4">No Content Available</h3>
                <p class="text-langzy-gray text-lg">Content for this category is coming soon!</p>
            </div>
        @endif
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>