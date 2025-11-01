<!-- SweetAlert2 CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Teacher Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-langzy-text mb-3">Meet Our Teachers</h2>
            <p class="text-lg text-langzy-gray">Learn from experienced German language experts from around the world.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if(isset($teachers) && $teachers->count())
                @foreach($teachers as $teacher)
                <div class="bg-gray-50 rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 flex flex-col h-full">
                    <div class="flex items-center gap-4 mb-4">
                        @if($teacher->photo_url)
                            <img src="{{ $teacher->photo_url }}" alt="{{ $teacher->name }}" class="w-16 h-16 rounded-full object-cover" onerror="this.src='https://i.pravatar.cc/120'">
                        @else
                            <img src="https://i.pravatar.cc/120" alt="{{ $teacher->name }}" class="w-16 h-16 rounded-full object-cover">
                        @endif
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="text-xl font-semibold text-langzy-text">{{ $teacher->name }}</h3>
                            </div>
                            <p class="text-sm text-langzy-gray">{{ $teacher->role }}</p>
                            <p class="text-xs text-gray-500 mt-0.5">{{ $teacher->country }}</p>
                        </div>
                    </div>
                    
                    <p class="text-langzy-gray mb-4 flex-grow">{{ Str::limit($teacher->description, 120) }}</p>
                    
                    <!-- Rating Display -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="flex items-center">
                                @for($i = 1; $i <= 5; $i++)
                                    @if($i <= floor($teacher->average_rating))
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @elseif($i - 0.5 <= $teacher->average_rating)
                                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                            <defs>
                                                <linearGradient id="half-{{ $teacher->id }}-{{ $i }}">
                                                    <stop offset="50%" stop-color="currentColor"/>
                                                    <stop offset="50%" stop-color="#E5E7EB"/>
                                                </linearGradient>
                                            </defs>
                                            <path fill="url(#half-{{ $teacher->id }}-{{ $i }})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @else
                                        <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                    @endif
                                @endfor
                            </div>
                            <span class="text-sm text-gray-600">
                                {{ number_format($teacher->average_rating, 1) }} ({{ $teacher->total_ratings }} {{ Str::plural('review', $teacher->total_ratings) }})
                            </span>
                        </div>
                    </div>
                    
                   
                    @if(auth()->check() && auth()->user()->role === 'u')
                        <div class="border-t pt-4">
                            @php $userHasRated = $teacher->ratings->contains('user_id', auth()->id()); @endphp
                            @if($userHasRated)
                                <div class="text-sm text-gray-600">
                                    You have already rated this teacher.
                                </div>
                            @else
                            <div id="rating-form-{{ $teacher->id }}" class="hidden">
                                <form class="space-y-3" onsubmit="submitRating(event, {{ $teacher->id }})">
                                    <div class="flex items-center gap-2">
                                        <label class="text-sm font-medium text-gray-700">Rate this teacher:</label>
                                        <div class="flex items-center" id="star-rating-{{ $teacher->id }}">
                                            @for($i = 1; $i <= 5; $i++)
                                                <button type="button" class="star-btn text-gray-300 hover:text-yellow-400 focus:outline-none" data-rating="{{ $i }}" data-teacher="{{ $teacher->id }}">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                    </svg>
                                                </button>
                                            @endfor
                                        </div>
                                    </div>
                                    <input type="hidden" name="rating" value="">
                                    <textarea name="comment" placeholder="Write a comment (optional)" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-langzy-blue focus:border-transparent" rows="2"></textarea>
                                    <div class="flex gap-2">
                                        <button type="submit" class="px-4 py-2 bg-langzy-blue text-white text-sm rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-langzy-blue">Submit Rating</button>
                                        <button type="button" onclick="toggleRatingForm({{ $teacher->id }})" class="px-4 py-2 bg-gray-300 text-gray-700 text-sm rounded-md hover:bg-gray-400 focus:outline-none">Cancel</button>
                                    </div>
                                </form>
                            </div>
                            <button onclick="toggleRatingForm({{ $teacher->id }})" class="w-full text-center text-sm text-langzy-blue hover:text-blue-600 font-medium">
                                Rate this teacher
                            </button>
                            @endif
                        </div>
                    @else
                        <div class="border-t pt-4">
                            <a href="{{ route('admin.login') }}" class="w-full text-center text-sm text-langzy-blue hover:text-blue-600 font-medium block">
                                Login to rate this teacher
                            </a>
                        </div>
                    @endif
                </div>
                @endforeach
            @else
            <!-- No Teachers Available -->
            <div class="col-span-full text-center py-12">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">No Teachers Available</h3>
                <p class="text-gray-500">Please check back later for our teaching team.</p>
            </div>
            @endif
        </div>
    </div>
</section>

<script>
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
