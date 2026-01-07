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

<!-- Teacher Section -->
<section class="py-24 bg-gradient-to-b from-white via-gray-50 to-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-96 h-96 bg-langzy-blue/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-400/5 rounded-full blur-3xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-20">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-extrabold text-langzy-text mb-6">Meet Our {{ ucfirst($selectedLanguage ?? 'german') }} Teachers</h2>
            <p class="text-xl md:text-2xl text-langzy-gray max-w-3xl mx-auto leading-relaxed">
                Learn from experienced {{ ucfirst($selectedLanguage ?? 'german') }} language experts from around the world.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if(isset($teachers) && $teachers->count())
                @foreach($teachers as $teacher)
                @php
                    $ratingsData = $teacher->ratings->map(function($rating) {
                        return [
                            'user_name' => $rating->user->name ?? 'Anonymous',
                            'rating' => $rating->rating,
                            'comment' => $rating->comment ?? '',
                            'created_at' => $rating->created_at->diffForHumans()
                        ];
                    })->toArray();
                @endphp
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 flex flex-col h-full cursor-pointer teacher-card border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2 relative overflow-hidden" 
                     onclick="showTeacherModal({{ $teacher->id }}, {{ json_encode($teacher->name) }}, {{ json_encode($teacher->role) }}, {{ json_encode($teacher->country) }}, {{ json_encode($teacher->description ?? '') }}, {{ json_encode($teacher->photo_url ?? '') }}, {{ number_format($teacher->average_rating, 1) }}, {{ $teacher->total_ratings }}, {{ json_encode($ratingsData) }})">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-langzy-blue/10 to-transparent rounded-full -mr-16 -mt-16"></div>
                    <div class="relative">
                    <div class="flex items-start gap-5 mb-6">
                        <div class="relative flex-shrink-0">
                            @if($teacher->photo_url)
                                <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" class="w-20 h-20 rounded-2xl object-cover ring-4 ring-langzy-blue/10 group-hover:ring-langzy-blue/30 transition-all shadow-lg" onerror="this.src='https://i.pravatar.cc/120'">
                            @else
                                <img src="https://i.pravatar.cc/120" alt="{{ $teacher->name }}" class="w-20 h-20 rounded-2xl object-cover ring-4 ring-langzy-blue/10 group-hover:ring-langzy-blue/30 transition-all shadow-lg">
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="mb-2">
                                <h3 class="text-xl font-bold text-langzy-text leading-tight">{{ $teacher->name }}</h3>
                            </div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-4 h-4 text-langzy-blue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <p class="text-sm font-medium text-langzy-blue">{{ $teacher->role }}</p>
                            </div>
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <p class="text-xs text-gray-500">{{ $teacher->country }}</p>
                            </div>
                        </div>
                    </div>
                    
                    @php
                        $fullDescription = $teacher->description ?? '';
                        $truncatedDescription = Str::limit($fullDescription, 120);
                        $isTruncated = strlen($fullDescription) > 120;
                    @endphp
                    <p class="text-langzy-gray mb-6 flex-grow leading-relaxed line-clamp-3">
                        {{ $truncatedDescription }}
                        @if($isTruncated)
                            <span class="text-langzy-blue text-sm font-medium">... Read more</span>
                        @endif
                    </p>
                    
                    <!-- Rating Display -->
                    <div class="bg-gradient-to-r from-langzy-blue/5 to-blue-50 rounded-xl p-4 mb-6 border border-langzy-blue/10">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($teacher->average_rating))
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @elseif($i - 0.5 <= $teacher->average_rating)
                                        <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <defs>
                                                <linearGradient id="half-{{ $teacher->id }}-{{ $i }}">
                                                    <stop offset="50%" stop-color="currentColor"/>
                                                    <stop offset="50%" stop-color="#E5E7EB"/>
                                                </linearGradient>
                                            </defs>
                                            <path fill="url(#half-{{ $teacher->id }}-{{ $i }})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @else
                                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <div class="flex-1">
                                <div class="text-lg font-bold text-langzy-text">{{ number_format($teacher->average_rating, 1) }}</div>
                                <div class="text-xs text-gray-500">{{ $teacher->total_ratings }} {{ Str::plural('review', $teacher->total_ratings) }}</div>
                            </div>
                        </div>
                    </div>
                    
                   
                    @if(auth()->check() && auth()->user()->role === 'u')
                        <div class="border-t border-gray-100 pt-4 stop-propagation">
                            @php $userHasRated = $teacher->ratings->contains('user_id', auth()->id()); @endphp
                            @if($userHasRated)
                                <div class="text-center rounded-xl bg-gradient-to-r from-green-50 to-emerald-50 border border-green-200 px-4 py-3 text-sm text-green-700 font-medium">
                                    ✓ You have already rated this teacher.
                                </div>
                            @else
                            <div id="rating-form-{{ $teacher->id }}" class="hidden">
                                <form class="space-y-4" onsubmit="submitRating(event, {{ $teacher->id }})">
                                    <div class="flex items-center gap-3">
                                        <label class="text-sm font-semibold text-gray-700">Rate this teacher:</label>
                                        <div class="flex items-center gap-1" id="star-rating-{{ $teacher->id }}">
                                            @for($i = 1; $i <= 5; $i++)
                                                <button type="button" class="star-btn text-gray-300 hover:text-yellow-400 focus:outline-none transition-colors" data-rating="{{ $i }}" data-teacher="{{ $teacher->id }}">
                                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                </button>
                                            @endfor
                                        </div>
                                    </div>
                                    <input type="hidden" name="rating" value="">
                                    <textarea name="comment" placeholder="Write a comment (optional)" class="w-full px-4 py-3 border border-gray-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent transition-all" rows="3"></textarea>
                                    <div class="flex gap-3">
                                        <button type="submit" class="flex-1 px-4 py-2.5 bg-gradient-to-r from-langzy-blue to-blue-600 text-white text-sm font-semibold rounded-xl hover:from-blue-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-langzy-blue transition-all shadow-lg">Submit Rating</button>
                                        <button type="button" onclick="toggleRatingForm({{ $teacher->id }})" class="px-4 py-2.5 bg-gray-200 text-gray-700 text-sm font-semibold rounded-xl hover:bg-gray-300 focus:outline-none transition-all">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <button onclick="toggleRatingForm({{ $teacher->id }})" class="w-full text-center rounded-xl bg-gradient-to-r from-langzy-blue/10 to-blue-50 text-langzy-blue hover:from-langzy-blue/20 hover:to-blue-100 px-4 py-3 text-sm font-semibold transition-all duration-300 border border-langzy-blue/20">
                                Rate this teacher
                            </button>
                            @endif
                        </div>
                    @else
                        <div class="border-t border-gray-100 pt-4 stop-propagation">
                            <a href="{{ route('admin.login') }}" class="w-full text-center rounded-xl bg-gradient-to-r from-langzy-blue/10 to-blue-50 text-langzy-blue hover:from-langzy-blue/20 hover:to-blue-100 px-4 py-3 text-sm font-semibold transition-all duration-300 block border border-langzy-blue/20">
                                Login to rate this teacher
                            </a>
                        </div>
                    @endif
                    </div>
                </div>
                @endforeach
            @else
            <!-- No Teachers Available -->
            <div class="col-span-full text-center py-16">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Teachers Available</h3>
                <p class="text-gray-500 text-lg">Please check back later for our teaching team.</p>
            </div>
            @endif
        </div>
    </div>
</section>

<script>
// Function to show full teacher details in modal
function showTeacherModal(teacherId, teacherName, role, country, description, photoUrl, averageRating, totalRatings, ratings = []) {
    // Prevent if clicked on rating form or buttons
    if (event.target.closest('.stop-propagation') || event.target.closest('button') || event.target.closest('form') || event.target.closest('a')) {
        return;
    }
    
    const isMobile = window.innerWidth < 768;
    
    // Build stars HTML with responsive sizing
    let starsHtml = '';
    const starSize = isMobile ? 'w-5 h-5' : 'w-6 h-6';
    const rating = parseFloat(averageRating);
    for (let i = 1; i <= 5; i++) {
        if (i <= Math.floor(rating)) {
            starsHtml += `<svg class="${starSize} text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
        } else if (i - 0.5 <= rating) {
            starsHtml += `<svg class="${starSize} text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><defs><linearGradient id="half-modal-${i}"><stop offset="50%" stop-color="currentColor"/><stop offset="50%" stop-color="#E5E7EB"/></linearGradient></defs><path fill="url(#half-modal-${i})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
        } else {
            starsHtml += `<svg class="${starSize} text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
        }
    }
    
    const imageSize = isMobile ? 'w-32 h-32' : 'w-40 h-40';
    const imageHtml = photoUrl ? 
        `<img src="${photoUrl}" alt="${teacherName}" class="${imageSize} rounded-full object-cover mx-auto mb-4 md:mb-6 ring-4 ring-langzy-blue/20" onerror="this.src='https://i.pravatar.cc/160'">` :
        `<img src="https://i.pravatar.cc/160" alt="${teacherName}" class="${imageSize} rounded-full object-cover mx-auto mb-4 md:mb-6 ring-4 ring-langzy-blue/20">`;
    
    // Build reviews HTML
    let reviewsHtml = '';
    if (ratings && ratings.length > 0) {
        // Array of colors for avatars
        const avatarColors = [
            'bg-blue-500', 'bg-green-500', 'bg-purple-500', 'bg-pink-500', 
            'bg-indigo-500', 'bg-teal-500', 'bg-orange-500', 'bg-red-500'
        ];
        
        reviewsHtml = `
            <div class="border-t pt-4 md:pt-6 mt-4">
                <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Student Reviews (${ratings.length})
                </h4>
                <div class="space-y-4 max-h-64 overflow-y-auto pr-2">
                    ${ratings.map((review, index) => {
                        const firstLetter = (review.user_name || 'A').charAt(0).toUpperCase();
                        const colorClass = avatarColors[index % avatarColors.length];
                        
                        // Build review stars
                        let reviewStars = '';
                        for (let i = 1; i <= 5; i++) {
                            if (i <= review.rating) {
                                reviewStars += `<svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                            } else {
                                reviewStars += `<svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>`;
                            }
                        }
                        
                        return `
                            <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-10 h-10 ${colorClass} rounded-full flex items-center justify-center text-white font-bold text-lg shadow-md">
                                        ${firstLetter}
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center gap-2 mb-1">
                                            <span class="font-semibold text-gray-800">${review.user_name}</span>
                                            <div class="flex items-center gap-0.5">
                                                ${reviewStars}
                                            </div>
                                        </div>
                                        <p class="text-xs text-gray-500 mb-2">${review.created_at}</p>
                                        ${review.comment ? `<p class="text-gray-700 text-sm leading-relaxed">${review.comment}</p>` : '<p class="text-gray-400 text-sm italic">No comment</p>'}
                                    </div>
                                </div>
                            </div>
                        `;
                    }).join('')}
                </div>
            </div>
        `;
    } else {
        reviewsHtml = `
            <div class="border-t pt-4 md:pt-6 mt-4">
                <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-4 flex items-center gap-2">
                    <svg class="w-5 h-5 text-langzy-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    Student Reviews
                </h4>
                <div class="text-center py-6 bg-gray-50 rounded-xl border border-gray-100">
                    <svg class="w-12 h-12 text-gray-300 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                    <p class="text-gray-500">No reviews yet. Be the first to review!</p>
                </div>
            </div>
        `;
    }
    
    const htmlContent = `
        <div class="text-center mb-4 md:mb-6">
            ${imageHtml}
            <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">${teacherName}</h3>
            <p class="text-base md:text-lg text-langzy-blue mb-1">${role || ''}</p>
            <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">${country || ''}</p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2 mb-2">
                <div class="flex items-center gap-1">
                    ${starsHtml}
                </div>
                <span class="text-sm md:text-lg text-gray-700 font-medium">
                    ${averageRating} (${totalRatings} ${totalRatings === 1 ? 'review' : 'reviews'})
                </span>
            </div>
        </div>
        <div class="border-t pt-4 md:pt-6">
            <h4 class="text-lg md:text-xl font-semibold text-gray-800 mb-3 md:mb-4">About</h4>
            <div class="text-left text-gray-700 leading-relaxed text-sm md:text-base" style="line-height: 1.7;">
                ${(description || 'No description available.').replace(/\n/g, '<br>')}
            </div>
        </div>
        ${reviewsHtml}
    `;
    
    Swal.fire({
        html: htmlContent,
        width: isMobile ? '95%' : '900px',
        showConfirmButton: false,
        showCloseButton: true,
        customClass: {
            popup: 'text-left rounded-lg',
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

// Stop event propagation for rating forms and buttons within teacher cards only
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.teacher-card .stop-propagation, .teacher-card button, .teacher-card form, .teacher-card a').forEach(el => {
        el.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
});

function toggleRatingForm(teacherId) {
    const form = document.getElementById(`rating-form-${teacherId}`);
    form.classList.toggle('hidden');
}

function submitRating(event, teacherId) {
    event.preventDefault();
    
    const form = event.target;
    const formData = new FormData(form);
    
    // Read rating from hidden input (source of truth)
    let rating = parseInt(form.querySelector('input[name="rating"]').value || '');
    
    if (!rating) {
        Swal.fire({
            icon: 'warning',
            title: 'Rating Required',
            text: 'Please select a rating before submitting.',
            confirmButtonColor: '#39BDF8'
        });
        return;
    }
    
    formData.append('teacher_id', teacherId);
    formData.append('rating', rating);
    
    fetch('{{ route("teacher-ratings.store") }}', {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Swal.fire({
                icon: 'success',
                title: 'Rating Submitted!',
                text: data.message,
                confirmButtonColor: '#39BDF8',
                timer: 2000,
                timerProgressBar: true
            }).then(() => {
                location.reload(); // Refresh to show updated ratings
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message,
                confirmButtonColor: '#39BDF8'
            });
        }
    })
    .catch(error => {
        console.error('Error:', error);
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'An error occurred while submitting the rating. Please try again.',
            confirmButtonColor: '#39BDF8'
        });
    });
}

// Star rating functionality
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.star-btn').forEach(button => {
        button.addEventListener('click', function() {
            const teacherId = this.dataset.teacher;
            const rating = parseInt(this.dataset.rating);
            
            // Update visual state
            const stars = document.querySelectorAll(`#star-rating-${teacherId} .star-btn`);
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('active', 'text-yellow-400');
                    star.classList.remove('text-gray-300');
                } else {
                    star.classList.remove('active', 'text-yellow-400');
                    star.classList.add('text-gray-300');
                }
            });

            // Persist the selected rating in a hidden input for submission
            const form = document.getElementById(`rating-form-${teacherId}`);
            if (form) {
                const hiddenInput = form.querySelector('input[name="rating"]');
                if (hiddenInput) hiddenInput.value = rating;
            }
        });
        
        button.addEventListener('mouseenter', function() {
            const teacherId = this.dataset.teacher;
            const rating = parseInt(this.dataset.rating);
            
            const stars = document.querySelectorAll(`#star-rating-${teacherId} .star-btn`);
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add('text-yellow-400');
                    star.classList.remove('text-gray-300');
                } else {
                    star.classList.remove('text-yellow-400');
                    star.classList.add('text-gray-300');
                }
            });
        });
    });
    
    // Reset stars on mouse leave
    document.querySelectorAll('#star-rating-*').forEach(container => {
        container.addEventListener('mouseleave', function() {
            const stars = this.querySelectorAll('.star-btn');
            stars.forEach(star => {
                if (!star.classList.contains('active')) {
                    star.classList.remove('text-yellow-400');
                    star.classList.add('text-gray-300');
                }
            });
        });
    });
});
</script>
