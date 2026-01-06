<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information - {{ ucfirst($selectedLanguage) }} | Langzy</title>
    @include('components.shared-assets')
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #39BDF8 0%, #3b82f6 100%);
        }
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(57, 189, 248, 0.25);
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
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 backdrop-blur-sm rounded-3xl mb-6 shadow-xl">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
                    Information
                </h1>
                <p class="text-xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                    @if($selectedLanguage === 'german')
                        Important information and resources for German language learners
                    @elseif($selectedLanguage === 'french')
                        Important information and resources for French language learners
                    @else
                        Important information and resources for Austria German learners
                    @endif
                </p>
            </div>
        </div>
    </div>

    <!-- Information Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @if($information->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($information as $index => $info)
                    <div class="card-hover fade-in stagger-{{ ($index % 3) + 1 }} bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-100">
                        <div class="p-8">
                            <!-- Icon -->
                            <div class="flex items-center mb-4">
                                <div class="w-12 h-12 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                    @if($info->hasFile())
                                        @php
                                            $ext = strtolower($info->file_extension);
                                        @endphp
                                        @if(in_array($ext, ['pdf']))
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                            </svg>
                                        @elseif(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                            </svg>
                                        @else
                                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                        @endif
                                    @else
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    @endif
                                </div>
                                <div class="flex-1">
                                    <h2 class="text-xl font-bold text-langzy-text">{{ $info->title }}</h2>
                                    <p class="text-sm text-langzy-gray">{{ $info->created_at->format('M d, Y') }}</p>
                                </div>
                            </div>
                            
                            @if($info->description)
                                <p class="text-langzy-gray leading-relaxed mb-6">{{ Str::limit($info->description, 150) }}</p>
                            @endif

                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                @if($info->hasFile())
                                    <a href="{{ route('information.download', $info) }}" class="inline-flex items-center gap-2 text-langzy-blue hover:text-blue-700 font-semibold transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Download
                                    </a>
                                @else
                                    <span></span>
                                @endif
                                
                                <a href="{{ route('information.show', $info) }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-4 py-2 rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all">
                                    View Details
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-16">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-gray-100 rounded-full mb-6">
                    <svg class="w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-700 mb-2">No Information Available</h3>
                <p class="text-gray-500">There is no information available for {{ ucfirst($selectedLanguage) }} at the moment.</p>
            </div>
        @endif
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>
