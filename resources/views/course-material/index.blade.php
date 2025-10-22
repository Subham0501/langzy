<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Material - Langzy</title>
    @include('components.shared-assets')
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #39BDF8 0%, #E0F6FF 100%);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(57, 189, 248, 0.25);
        }
        .category-icon {
            background: linear-gradient(135deg, #39BDF8 0%, #87CEEB 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
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
    </style>
</head>
<body class="font-inter bg-gradient-to-br from-gray-50 to-langzy-light min-h-screen">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Hero Section -->
    <div class="gradient-bg py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="fade-in">
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    Course Material
                </h1>
                <p class="text-xl text-white max-w-3xl mx-auto leading-relaxed">
                    Explore our comprehensive collection of grammar and vocabulary materials organized by categories
                </p>
            </div>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($categories->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($categories as $index => $category)
                    <div class="card-hover fade-in stagger-{{ ($index % 3) + 1 }} bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                        <!-- Category Header -->
                        <div class="p-8 pb-6">
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue to-langzy-sky rounded-xl flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                </div>
                                <h2 class="text-2xl font-bold text-langzy-text">
                                    <a href="{{ route('course-material.category', $category) }}" class="hover:text-langzy-blue transition-colors duration-300">
                                        {{ $category->name }}
                                    </a>
                                </h2>
                            </div>
                            
                            @if($category->description)
                                <p class="text-langzy-gray leading-relaxed mb-6">{{ Str::limit($category->description, 120) }}</p>
                            @endif

                            @if($category->contents->count() > 0)
                                <div class="mb-6">
                                    <h3 class="text-sm font-semibold text-langzy-text mb-3 uppercase tracking-wide">Recent Content</h3>
                                    <div class="space-y-2">
                                        @foreach($category->contents->take(3) as $content)
                                            <div class="flex items-center p-2 rounded-lg hover:bg-langzy-light transition-colors duration-200">
                                                <div class="w-2 h-2 bg-langzy-blue rounded-full mr-3"></div>
                                                <a href="{{ route('course-material.content', $content) }}" class="text-sm text-langzy-text hover:text-langzy-blue transition-colors duration-200 flex-1">
                                                    {{ $content->title }}
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                                <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                    <div class="flex items-center text-sm text-langzy-gray">
                                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        </svg>
                                        {{ $category->contents->count() }} {{ Str::plural('lesson', $category->contents->count()) }}
                                    </div>
                                    <a href="{{ route('course-material.category', $category) }}" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-langzy-blue to-langzy-sky text-white rounded-lg hover:from-blue-500 hover:to-blue-400 transition-all duration-300 font-medium text-sm shadow-lg hover:shadow-xl">
                                        Explore
                                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                </div>
                            @else
                                <div class="text-center py-8">
                                    <div class="w-16 h-16 bg-langzy-light rounded-full flex items-center justify-center mx-auto mb-4">
                                        <svg class="w-8 h-8 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                        </svg>
                                    </div>
                                    <p class="text-langzy-gray text-sm">Content coming soon</p>
                                </div>
                            @endif
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
                <h3 class="text-2xl font-bold text-langzy-text mb-4">No Course Material Available</h3>
                <p class="text-langzy-gray text-lg">Check back later for new content!</p>
            </div>
        @endif
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>
