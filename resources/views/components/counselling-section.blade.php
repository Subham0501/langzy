<!-- Counselling Section -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-langzy-blue to-blue-600 rounded-2xl mb-6 shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
            </div>
            <h2 class="text-4xl md:text-5xl font-bold text-langzy-text mb-4">Book a Counselling Session</h2>
            <p class="text-lg md:text-xl text-langzy-gray max-w-2xl mx-auto">Paid one-on-one guidance to choose the right {{ ucfirst($selectedLanguage ?? 'german') }} course for you.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @if(isset($counsellors) && $counsellors->count())
                @foreach($counsellors as $c)
                <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-8 flex flex-col h-full border border-gray-100 hover:border-langzy-blue/30 transform hover:-translate-y-2">
                    <!-- Header with Image -->
                    <div class="flex items-start gap-5 mb-6">
                        <div class="relative flex-shrink-0">
                            @if($c->photo_url)
                                <img src="{{ $c->photo_url }}" alt="{{ $c->name }}" class="w-20 h-20 rounded-2xl object-cover ring-4 ring-langzy-blue/10 group-hover:ring-langzy-blue/30 transition-all" onerror="this.src='https://i.pravatar.cc/120'">
                            @else
                                <img src="https://i.pravatar.cc/120" alt="{{ $c->name }}" class="w-20 h-20 rounded-2xl object-cover ring-4 ring-langzy-blue/10 group-hover:ring-langzy-blue/30 transition-all">
                            @endif
                            @if($c->priority > 0)
                            <div class="absolute -top-2 -right-2 bg-gradient-to-r from-yellow-400 to-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full shadow-lg flex items-center gap-1">
                             
                               
                            </div>
                            @endif
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-start justify-between gap-2 mb-2">
                                <h3 class="text-xl font-bold text-langzy-text leading-tight">{{ $c->name }}</h3>
                            </div>
                            <div class="flex items-center gap-2 mb-2">
                                <svg class="w-4 h-4 text-langzy-blue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-sm font-medium text-langzy-blue">{{ $c->role }}</p>
                            </div>
                            @if(!empty($c->address))
                            <div class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-xs text-gray-500 truncate">{{ $c->address }}</p>
                            </div>
                            @endif
                        </div>
                    </div>

                    <!-- Description -->
                    <p class="text-langzy-gray mb-6 flex-grow leading-relaxed line-clamp-3">{{ $c->description }}</p>

                    <!-- Pricing Info -->
                    <div class="bg-gradient-to-r from-langzy-blue/5 to-blue-50 rounded-xl p-4 mb-6 border border-langzy-blue/10">
                        <div class="flex items-center justify-between mb-2">
                            <span class="inline-flex items-center gap-2 rounded-full bg-langzy-blue/10 text-langzy-blue px-3 py-1.5 text-xs font-semibold">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Paid Session
                            </span>
                            <div class="text-right">
                                <div class="text-2xl font-bold text-langzy-text">₹{{ number_format($c->price_rs) }}</div>
                                <div class="text-xs text-gray-500">/ {{ $c->duration_minutes }} min</div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="https://wa.me/9701369495?text=Hi! I would like to book a counselling session with {{ $c->name }} ({{ $c->role }}). Session details: ₹{{ number_format($c->price_rs) }} for {{ $c->duration_minutes }} minutes." target="_blank" class="group/btn inline-flex items-center justify-center gap-2 w-full text-center rounded-xl bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-4 font-semibold shadow-lg hover:shadow-xl transition-all duration-300 mt-auto hover:from-blue-600 hover:to-blue-700 transform hover:scale-[1.02]">
                        <svg class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        <span>Book on WhatsApp</span>
                        <svg class="w-4 h-4 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                @endforeach
            @else
            <!-- No Counsellors Available -->
            <div class="col-span-full text-center py-16">
                <div class="w-24 h-24 bg-gradient-to-br from-gray-100 to-gray-200 rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">No Counsellors Available</h3>
                <p class="text-gray-500 text-lg">Please check back later for available counselling sessions.</p>
            </div>
            @endif
        </div>
    </div>
</section>


