<!-- Simple Navigation (for pages without language selection) -->
<nav class="bg-white shadow-sm sticky top-0 z-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('Group 36.png') }}" alt="Langzy Logo" class="h-12 w-auto">
            </a>
            
            <!-- Navigation Links -->
            <div class="hidden lg:flex items-center space-x-2 xl:space-x-4">
                <a href="/" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">Home</a>
                <a href="{{ route('about-us') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">About</a>
                <a href="{{ route('contact') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">Contact</a>
                <a href="{{ route('our-team') }}" class="px-3 xl:px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium text-sm xl:text-base transition-colors rounded-lg hover:bg-langzy-blue/5">Team</a>
            </div>

            <!-- Right Side -->
            <div class="hidden lg:flex items-center space-x-3">
                <a href="/admin/login" class="px-4 py-2 text-langzy-text hover:text-langzy-blue font-medium transition-colors rounded-lg hover:bg-langzy-blue/5">Login</a>
                <a href="/" class="px-6 py-2.5 bg-gradient-to-r from-langzy-blue to-blue-600 text-white rounded-full font-semibold hover:from-blue-600 hover:to-blue-700 transition-all shadow-lg text-sm">
                    Get Started →
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="simple-mobile-menu-btn" class="lg:hidden p-2 text-gray-700 hover:text-langzy-blue">
                <svg id="simple-menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg id="simple-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="simple-mobile-menu" class="hidden lg:hidden pb-4">
            <a href="/" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Home</a>
            <a href="{{ route('about-us') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">About</a>
            <a href="{{ route('contact') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Contact</a>
            <a href="{{ route('our-team') }}" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Team</a>
            <div class="pt-4 border-t border-gray-200 mt-2">
                <a href="/admin/login" class="block py-3 px-4 text-langzy-text hover:text-langzy-blue font-semibold rounded-xl hover:bg-langzy-blue/5">Login</a>
                <a href="/" class="block mx-4 mt-2 bg-gradient-to-r from-langzy-blue to-blue-600 text-white px-6 py-3 rounded-full font-bold shadow-lg text-center">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuBtn = document.getElementById('simple-mobile-menu-btn');
    const mobileMenu = document.getElementById('simple-mobile-menu');
    const menuIcon = document.getElementById('simple-menu-icon');
    const closeIcon = document.getElementById('simple-close-icon');
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }
});
</script>
