<!-- Counselling Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-langzy-text mb-3">Book a Counselling Session</h2>
            <p class="text-lg text-langzy-gray">Paid one-on-one guidance to choose the right German course for you.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if(isset($counsellors) && $counsellors->count())
                @foreach($counsellors as $c)
                <div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow p-6 flex flex-col h-full">
                    <div class="flex items-center gap-4 mb-4">
                        @if($c->photo_url)
                            <img src="{{ $c->photo_url }}" alt="Counsellor" class="w-16 h-16 rounded-full object-cover" onerror="this.src='https://i.pravatar.cc/120'">
                        @else
                            <img src="https://i.pravatar.cc/120" alt="Counsellor" class="w-16 h-16 rounded-full object-cover">
                        @endif
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h3 class="text-xl font-semibold text-langzy-text">{{ $c->name }}</h3>
                                @if($c->priority > 0)
                                
                                @endif
                            </div>
                            <p class="text-sm text-langzy-gray">{{ $c->role }}</p>
                            @if(!empty($c->address))
                            <p class="text-xs text-gray-500 mt-0.5">{{ $c->address }}</p>
                            @endif
                        </div>
                    </div>
                    <p class="text-langzy-gray mb-4 flex-grow">{{ $c->description }}</p>
                    <div class="flex items-center justify-between mb-4">
                        <span class="inline-flex items-center rounded-full bg-langzy-blue/10 text-langzy-blue px-3 py-1 text-sm font-semibold">Paid Session</span>
                        <span class="text-lg font-bold text-langzy-text">₹{{ number_format($c->price_rs) }} / {{ $c->duration_minutes }} min</span>
                    </div>
                    <a href="https://wa.me/9701369495?text=Hi! I would like to book a counselling session with {{ $c->name }} ({{ $c->role }}). Session details: ₹{{ number_format($c->price_rs) }} for {{ $c->duration_minutes }} minutes." target="_blank" class="inline-block w-full text-center rounded-full bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-3 font-semibold shadow-md hover:shadow-lg transition-all mt-auto">Book Now</a>
                </div>
                @endforeach
            @else
            <!-- No Counsellors Available -->
            <div class="col-span-full text-center py-12">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">No Counsellors Available</h3>
                <p class="text-gray-500">Please check back later for available counselling sessions.</p>
            </div>
            @endif
        </div>
    </div>
</section>


