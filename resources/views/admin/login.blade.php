<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Langzy</title>
    @include('components.shared-assets')
</head>
<body class="font-inter bg-gray-50">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-2">
        <!-- Left image panel -->
        <div class="hidden lg:block relative overflow-hidden">
            <div id="loginSlider" class="absolute inset-0 w-full h-full">
                <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?q=80&w=1600&auto=format&fit=crop" class="slide absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-700" alt="Students studying together">
                <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=1600&auto=format&fit=crop" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" alt="Students discussing with laptop">
                <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?q=80&w=1600&auto=format&fit=crop" class="slide absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-700" alt="Laptop study session">
            </div>
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute bottom-10 left-10 text-white">
                <h2 class="text-4xl font-extrabold mb-2">Master German with Langzy!</h2>
                <p class="text-white/90">Live classes, structured courses, and proven results.</p>
            </div>
            <!-- Dots -->
            <div class="absolute left-10 bottom-4 flex items-center gap-3">
                <button class="dot w-10 h-1 rounded-full bg-white/60"></button>
                <button class="dot w-10 h-1 rounded-full bg-white/30"></button>
                <button class="dot w-10 h-1 rounded-full bg-white/30"></button>
            </div>
        </div>

        <!-- Right login card -->
        <div class="flex items-center justify-center px-6 py-12">
            <div class="w-full max-w-lg bg-white rounded-2xl shadow-xl p-8">
                <h1 class="text-3xl font-bold text-langzy-dark mb-2 text-center">Welcome Back</h1>
                <p class="text-center text-langzy-gray mb-8">Sign in to continue your learning journey</p>
                @if ($errors->any())
                    <div class="mb-4 text-red-600 text-sm text-center">{{ $errors->first() }}</div>
                @endif
                <form method="POST" action="{{ route('admin.login.post') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Email Address or Username</label>
                        <input type="email" name="email" placeholder="Enter your email or username" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-langzy-dark mb-1">Password</label>
                        <input type="password" name="password" placeholder="Enter your password" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-langzy-blue" required>
                    </div>
                    <button type="submit" class="w-full rounded-xl bg-gradient-to-r from-langzy-blue to-blue-600 text-white py-3 font-semibold shadow-md hover:shadow-lg transition-all">Sign In</button>
                </form>

                <div class="mt-6 text-center text-sm text-langzy-gray">
                    <a href="#" class="hover:text-langzy-blue">Forgot your password?</a>
                </div>

                <div class="mt-8 text-center text-sm text-langzy-gray">
                    Don't have an account? <span class="text-langzy-blue">Create one here</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function(){
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            let i = 0;
            function show(n){
                slides.forEach((s,idx)=>{
                    s.style.opacity = idx===n ? '1' : '0';
                });
                dots.forEach((d,idx)=>{
                    d.style.backgroundColor = idx===n ? 'rgba(255,255,255,0.9)' : 'rgba(255,255,255,0.4)';
                });
            }
            dots.forEach((d,idx)=>d.addEventListener('click', ()=>{ i=idx; show(i); }));
            setInterval(()=>{ i = (i+1)%slides.length; show(i); }, 4000);
            show(0);
        })();
    </script>
</body>
</html>


