<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $information->title }} - Information | Langzy</title>
    @include('components.shared-assets')
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #39BDF8 0%, #3b82f6 100%);
        }
    </style>
</head>
<body class="font-inter bg-gradient-to-br from-gray-50 to-langzy-light min-h-screen">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Hero Section -->
    <div class="gradient-bg py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('information.index') }}" class="inline-flex items-center gap-2 text-blue-100 hover:text-white mb-6 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Information
            </a>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $information->title }}</h1>
            <div class="flex items-center gap-4 text-blue-100">
                <span class="inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    {{ $information->created_at->format('F d, Y') }}
                </span>
                <span class="inline-flex px-3 py-1 bg-white/20 rounded-full text-sm font-semibold">
                    {{ ucfirst($information->language) }}
                </span>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
            @if($information->description)
                <div class="prose prose-lg max-w-none mb-8">
                    <p class="text-gray-700 leading-relaxed whitespace-pre-line">{{ $information->description }}</p>
                </div>
            @endif

            @if($information->hasFile())
                <div class="border-t border-gray-200 pt-8">
                    <h3 class="text-xl font-bold text-langzy-text mb-4">Attached File</h3>
                    
                    <div class="bg-gradient-to-r from-langzy-blue/5 to-blue-50 rounded-xl p-6 border border-langzy-blue/20">
                        <div class="flex items-center justify-between flex-wrap gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-14 h-14 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-xl flex items-center justify-center">
                                    @php
                                        $ext = strtolower($information->file_extension);
                                    @endphp
                                    @if(in_array($ext, ['pdf']))
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                        </svg>
                                    @elseif(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    @else
                                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                        </svg>
                                    @endif
                                </div>
                                <div>
                                    <p class="font-semibold text-langzy-text">{{ $information->file_name }}</p>
                                    <p class="text-sm text-langzy-gray">{{ strtoupper($information->file_extension) }} File</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-3">
                                <a href="{{ $information->file_url }}" target="_blank" class="inline-flex items-center gap-2 px-4 py-2 border border-langzy-blue text-langzy-blue rounded-lg font-semibold hover:bg-langzy-blue/5 transition-colors">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                    View
                                </a>
                                <a href="{{ route('information.download', $information) }}" class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white rounded-lg font-semibold hover:from-blue-600 hover:to-blue-700 transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    Download
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                        <div class="mt-6">
                            <img src="{{ $information->file_url }}" alt="{{ $information->title }}" class="rounded-xl shadow-lg max-w-full h-auto">
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>

    <!-- Footer -->
    @include('components.footer-section')
</body>
</html>
