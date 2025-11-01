<!-- Shared Styles and Scripts -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    inter: ['Inter', 'sans-serif'],
                },
                colors: {
                    'langzy-blue': '#39BDF8',
                    'langzy-dark': '#1e293b',
                    'langzy-gray': '#64748b',
                }
            }
        }
    }
    
</script>
<style>
    .sky-gradient {
        background: linear-gradient(135deg, #39BDF8 0%, #E0F6FF 100%);
    }
    .cloud {
        position: absolute;
        background: white;
        border-radius: 60px 40px 50px 30px;
        opacity: 0.9;
        animation: float 6s ease-in-out infinite;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .cloud:before {
        content: '';
        position: absolute;
        background: white;
        border-radius: 50px 30px 40px 20px;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
    }
    .cloud:after {
        content: '';
        position: absolute;
        background: white;
        border-radius: 40px 25px 35px 15px;
        box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
    }
    .cloud1 {
        width: 200px;
        height: 80px;
        top: 10%;
        left: 50%;
        transform: translateX(-50%);
        animation: float1 8s ease-in-out infinite;
        border-radius: 70px 50px 60px 40px;
    }
    .cloud1:before {
        width: 100px;
        height: 100px;
        top: -50px;
        left: 20px;
        border-radius: 60px 40px 50px 30px;
    }
    .cloud1:after {
        width: 120px;
        height: 90px;
        top: -35px;
        right: 20px;
        border-radius: 50px 30px 40px 20px;
    }
    .cloud2 {
        width: 250px;
        height: 100px;
        top: 60%;
        left: 10%;
        animation: float2 10s ease-in-out infinite;
        border-radius: 80px 60px 70px 50px;
    }
    .cloud2:before {
        width: 120px;
        height: 120px;
        top: -60px;
        left: 30px;
        border-radius: 70px 50px 60px 40px;
    }
    .cloud2:after {
        width: 140px;
        height: 110px;
        top: -45px;
        right: 30px;
        border-radius: 60px 40px 50px 30px;
    }
    .cloud3 {
        width: 250px;
        height: 100px;
        top: 60%;
        right: 10%;
        animation: float3 7s ease-in-out infinite;
        border-radius: 90px 70px 80px 60px;
    }
    .cloud3:before {
        width: 120px;
        height: 120px;
        top: -60px;
        left: 30px;
        border-radius: 80px 60px 70px 50px;
    }
    .cloud3:after {
        width: 140px;
        height: 110px;
        top: -45px;
        right: 30px;
        border-radius: 70px 50px 60px 40px;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
    
    @keyframes floatMove {
        0% { 
            transform: translateY(0px) translateX(0px) rotate(0deg); 
        }
        25% { 
            transform: translateY(-30px) translateX(20px) rotate(2deg); 
        }
        50% { 
            transform: translateY(-15px) translateX(-10px) rotate(-1deg); 
        }
        75% { 
            transform: translateY(-25px) translateX(15px) rotate(1deg); 
        }
        100% { 
            transform: translateY(0px) translateX(0px) rotate(0deg); 
        }
    }
    
    @keyframes float1 {
        0%, 100% { transform: translateX(-50%) translateY(0px); }
        50% { transform: translateX(-50%) translateY(-15px); }
    }
    
    @keyframes float2 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-25px); }
    }
    
    @keyframes float3 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }
</style>

<script>
    function selectPlan(element) {
        // Remove selected class from all cards
        const allCards = document.querySelectorAll('[onclick="selectPlan(this)"]');
        allCards.forEach(card => {
            card.classList.remove('border-langzy-blue', 'border-2', 'shadow-lg', 'scale-105');
            card.classList.add('border-gray-200');
        });
        
        // Add selected class to clicked card
        element.classList.remove('border-gray-200');
        element.classList.add('border-langzy-blue', 'border-2', 'shadow-lg', 'scale-105');
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('bg-white/95', 'backdrop-blur-sm');
        } else {
            nav.classList.remove('bg-white/95', 'backdrop-blur-sm');
        }
    });

    // Mobile menu toggle functionality (handled in nav.blade.php to avoid conflicts)
</script>
