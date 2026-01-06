<nav id="main-nav" class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center group">
                    <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="h-12 w-auto transition-transform duration-300 group-hover:scale-105">
                </a>
            </div>
            
            <!-- Desktop Navigation Links - Hidden on mobile -->
            <div class="hidden lg:flex items-center space-x-2 xl:space-x-4">
                <a href="/" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Home</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('about-us') }}" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">About</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                
                <!-- Course Material Dropdown -->
                <div class="relative group">
                    <a href="{{ route('course-material.index') }}" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 flex items-center gap-1 group whitespace-nowrap">
                        <span class="relative z-10">Courses</span>
                        <svg class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                    </a>
                    
                    <!-- Dropdown Menu -->
                    <div class="absolute top-full left-0 mt-2 w-64 bg-white rounded-2xl shadow-2xl border border-gray-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform group-hover:translate-y-0 translate-y-2">
                        <div class="py-2">
                            @if($courseMaterialCategories->count() > 0)
                                @foreach($courseMaterialCategories as $category)
                                    <a href="{{ route('course-material.category', $category) }}" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50 transition-all duration-200 mx-2 rounded-lg group/item">
                                        <div class="flex items-center justify-between">
                                            <span class="font-medium">{{ $category->name }}</span>
                                            <svg class="w-4 h-4 text-langzy-blue opacity-0 group-hover/item:opacity-100 transform -translate-x-2 group-hover/item:translate-x-0 transition-all duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </div>
                                    </a>
                                @endforeach
                                <div class="border-t border-gray-100 my-2 mx-2"></div>
                                <a href="{{ route('course-material.index') }}" class="block px-4 py-3 text-langzy-blue hover:bg-gradient-to-r hover:from-langzy-blue/10 hover:to-blue-50 transition-all duration-200 font-bold mx-2 rounded-lg group/item">
                                    <div class="flex items-center justify-between">
                                        <span>View All Categories</span>
                                        <svg class="w-4 h-4 transform group-hover/item:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                        </svg>
                                    </div>
                                </a>
                            @else
                                <div class="px-4 py-3 text-langzy-gray text-sm text-center">
                                    No course material available
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                <a href="#pricing" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Pricing</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="#reviews" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Reviews</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Contact</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('our-team') }}" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Team</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="{{ route('information.index') }}" class="relative px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-all duration-300 rounded-lg hover:bg-langzy-blue/5 group whitespace-nowrap">
                    <span class="relative z-10">Info</span>
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-langzy-blue to-blue-600 group-hover:w-full transition-all duration-300"></span>
                </a>
            </div>
            
            <!-- Desktop Right Side Buttons - Hidden on mobile -->
            <div class="hidden lg:flex items-center space-x-2 xl:space-x-3">
                @if($isAuthenticated)
                    <a href="/admin" class="px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm transition-colors rounded-lg hover:bg-langzy-blue/5">
                        Dashboard
                    </a>
                    <a href="/admin/logout" class="px-3 py-2 text-gray-600 hover:text-red-600 font-medium text-sm transition-colors rounded-lg hover:bg-red-50">
                        Logout
                    </a>
                @else
                    <a href="/admin/login" class="px-3 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm transition-colors rounded-lg hover:bg-langzy-blue/5">
                        Login
                    </a>
                    <a href="#pricing" class="group relative inline-flex items-center justify-center gap-1.5 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-4 xl:px-5 py-2 rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-semibold text-sm shadow-md hover:shadow-lg transform hover:scale-105 whitespace-nowrap overflow-hidden">
                        <span class="relative z-10">Get Started</span>
                        <svg class="w-3.5 h-3.5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </a>
                @endif
            </div>

            <!-- Mobile Menu Button -->
            <div class="lg:hidden relative z-50">
                <button id="mobile-menu-button" type="button" class="text-langzy-text hover:text-langzy-blue focus:outline-none focus:text-langzy-blue transition-colors relative z-50 p-2 -mr-2 rounded-lg hover:bg-langzy-blue/5" style="pointer-events: auto; position: relative; z-index: 9999;">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" pointer-events="none">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="close-icon" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <div class="px-4 pt-4 pb-6 space-y-2 bg-white border-t border-gray-200 shadow-lg">
                <a href="/" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Home
                </a>
                <a href="{{ route('about-us') }}" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    About Us
                </a>
                
                <!-- Course Material Mobile Section -->
                <div class="px-4">
                    <button id="course-material-toggle" class="flex items-center justify-between w-full text-left font-semibold text-langzy-text hover:text-langzy-blue transition-all duration-200 py-3 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50 px-4 -mx-4">
                        <span>Course Material</span>
                        <svg id="course-material-arrow" class="h-5 w-5 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="course-material-submenu" class="hidden mt-2">
                        @if($courseMaterialCategories->count() > 0)
                            <div class="ml-4 space-y-1">
                                @foreach($courseMaterialCategories as $category)
                                    <a href="{{ route('course-material.category', $category) }}" class="block px-4 py-2.5 text-sm text-langzy-gray hover:text-langzy-blue hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50 rounded-lg transition-all duration-200 font-medium">
                                        {{ $category->name }}
                                    </a>
                                @endforeach
                                <a href="{{ route('course-material.index') }}" class="block px-4 py-2.5 text-sm text-langzy-blue hover:text-blue-700 hover:bg-gradient-to-r hover:from-langzy-blue/10 hover:to-blue-50 rounded-lg font-bold transition-all duration-200 mt-2">
                                    View All Categories →
                                </a>
                            </div>
                        @else
                            <div class="ml-4 px-4 py-2 text-sm text-langzy-gray">No course material available</div>
                        @endif
                    </div>
                </div>
                
                <a href="#pricing" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Pricing
                </a>
                <a href="#reviews" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Reviews
                </a>
                <a href="/contact" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Contact
                </a>
                <a href="{{ route('our-team') }}" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Our Team
                </a>
                <a href="{{ route('information.index') }}" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50">
                    Information
                </a>
                <div class="pt-4 pb-2 border-t border-gray-200">
                    @if($isAuthenticated)
                        <a href="/admin" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50 mb-2">
                            Dashboard
                        </a>
                        <a href="/admin/logout" class="block px-4 py-3 text-red-600 hover:text-red-700 font-semibold transition-all duration-200 rounded-xl hover:bg-red-50">
                            Logout
                        </a>
                    @else
                        <a href="/admin/login" class="block px-4 py-3 text-langzy-text hover:text-langzy-blue font-semibold transition-all duration-200 rounded-xl hover:bg-gradient-to-r hover:from-langzy-blue/5 hover:to-blue-50 mb-3">
                            Login
                        </a>
                        <a href="#pricing" class="block mx-4 mt-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-3.5 rounded-full hover:from-blue-600 hover:to-blue-700 transition-all duration-300 font-bold shadow-lg text-center transform hover:scale-105">
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
    const nav = document.getElementById('main-nav');

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            nav.classList.add('shadow-lg');
            nav.classList.remove('shadow-sm');
        } else {
            nav.classList.remove('shadow-lg');
            nav.classList.add('shadow-sm');
        }
    });

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            
            // Toggle mobile menu visibility
            mobileMenu.classList.toggle('hidden');
            
            // Toggle icons
            if (menuIcon && closeIcon) {
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            }
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            if (mobileMenuButton && mobileMenu && 
                !mobileMenuButton.contains(event.target) && 
                !mobileMenu.contains(event.target) &&
                !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                if (menuIcon) menuIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            }
        });

        // Course Material submenu toggle for mobile
        const courseMaterialToggle = document.getElementById('course-material-toggle');
        const courseMaterialSubmenu = document.getElementById('course-material-submenu');
        const courseMaterialArrow = document.getElementById('course-material-arrow');
        
        if (courseMaterialToggle && courseMaterialSubmenu && courseMaterialArrow) {
            courseMaterialToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                courseMaterialSubmenu.classList.toggle('hidden');
                courseMaterialArrow.classList.toggle('rotate-180');
            });
        }
    }
});
</script>
