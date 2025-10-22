<nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="h-10 w-auto">
                </a>
            </div>
            
            <!-- Desktop Navigation Links - Hidden on mobile -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="/" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Home</a>
                <a href="#about" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">About Us</a>
                
                <!-- Course Material Dropdown -->
                <div class="relative group">
                    <a href="{{ route('course-material.index') }}" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors flex items-center whitespace-nowrap">
                        Course Material
                        <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </a>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="py-2">
                            @if($courseMaterialCategories->count() > 0)
                                @foreach($courseMaterialCategories as $category)
                                    <a href="{{ route('course-material.category', $category) }}" class="block px-4 py-2 text-langzy-text hover:text-langzy-blue hover:bg-langzy-light transition-colors duration-200">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                                <div class="border-t border-gray-100 my-1"></div>
                                <a href="{{ route('course-material.index') }}" class="block px-4 py-2 text-langzy-blue hover:bg-langzy-light transition-colors duration-200 font-medium">
                                    View All Categories
                                </a>
                            @else
                                <div class="px-4 py-3 text-langzy-gray text-sm text-center">
                                    No course material available
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
              
                <a href="#pricing" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Pricing</a>
                <a href="#reviews" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Reviews</a>
                <a href="/contact" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Contact</a>
            </div>
            
            <!-- Desktop Right Side Buttons - Hidden on mobile -->
            <div class="hidden lg:flex items-center space-x-4">
                @if($isAuthenticated)
                    <a href="/admin" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Dashboard</a>
                    <a href="/admin/logout" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Logout</a>
                @else
                    <a href="/admin/login" class="text-langzy-text hover:text-langzy-blue font-medium transition-colors whitespace-nowrap">Login</a>
                    <a href="#" class="bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-2 rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-medium shadow-lg whitespace-nowrap">
                        Get Started
                    </a>
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="text-langzy-text hover:text-langzy-blue focus:outline-none focus:text-langzy-blue transition-colors">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 bg-white border-t border-gray-200">
                <a href="/" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Home</a>
                <a href="#about" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">About Us</a>
                
                <!-- Course Material Mobile Section -->
                <div class="px-3 py-2">
                    <div class="font-medium text-langzy-text mb-2">Course Material</div>
                    @if($courseMaterialCategories->count() > 0)
                        <div class="ml-4 space-y-1">
                            @foreach($courseMaterialCategories as $category)
                                <a href="{{ route('course-material.category', $category) }}" class="block text-sm text-langzy-gray hover:text-langzy-blue transition-colors">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                            <a href="{{ route('course-material.index') }}" class="block text-sm text-langzy-blue hover:text-blue-700 font-medium transition-colors mt-2">
                                View All Categories →
                            </a>
                        </div>
                    @else
                        <div class="ml-4 text-sm text-langzy-gray">No course material available</div>
                    @endif
                </div>
                
               
                <a href="#pricing" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Pricing</a>
                <a href="#reviews" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Reviews</a>
                <a href="/contact" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Contact</a>
                <div class="pt-4 pb-2 border-t border-gray-200">
                    @if($isAuthenticated)
                        <a href="/admin" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Dashboard</a>
                        <a href="/admin/logout" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Logout</a>
                    @else
                        <a href="/admin/login" class="block px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors">Login</a>
                        <a href="#" class="block mx-3 mt-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-2 rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-medium shadow-lg text-center">
                            Get Started
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        menuIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
});
</script>