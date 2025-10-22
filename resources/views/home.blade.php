<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langzy - Grow your words. Expand your world.</title>
    <meta name="description" content="Master new languages with expert tutors, structured courses, and personalized learning paths. Join thousands of successful language learners worldwide.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'langzy-blue': '#39BDF8',
                        'langzy-sky': '#87CEEB',
                        'langzy-light': '#E0F6FF',
                        'langzy-dark': '#1e293b',
                        'langzy-text': '#1e293b',
                        'langzy-gray': '#64748b',
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter">
    <!-- Navigation -->
    @include('components.nav')
    
    <!-- Hero Section -->
    @include('components.hero-section')

    <!-- Pricing Section -->
    @include('components.pricing-section')

    <!-- Features Section -->
    @include('components.features-section')

    <!-- Testimonials Section -->
    @include('components.testimonials-section')

    <!-- Counselling Section -->
    @include('components.counselling-section')

    <!-- Call to Action Section -->
    @include('components.cta-section')

    <!-- Footer Section -->
    @include('components.footer-section')

    <!-- Shared Styles and Scripts -->
    @include('components.shared-assets')
</body>
</html>