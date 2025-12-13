@php
    // Default values
    $title = $title ?? 'Langzy - Grow your words. Expand your world.';
    $description = $description ?? 'Master new languages with expert tutors, structured courses, and personalized learning paths. Join thousands of successful language learners worldwide.';
    $keywords = $keywords ?? 'Langzy, German language learning, online German courses, German tutors, language school, learn German online, German classes, German language courses';
    $image = $image ?? asset('Group 36.png');
    $url = $url ?? url()->current();
    $type = $type ?? 'website';
    $structuredData = $structuredData ?? null;
    $canonical = $canonical ?? $url;
    $robots = $robots ?? 'index, follow';
@endphp

<!-- Primary Meta Tags -->
<title>{{ $title }}</title>
<meta name="title" content="{{ $title }}">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="Langzy">
<meta name="robots" content="{{ $robots }}">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $canonical }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:site_name" content="Langzy">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ $url }}">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:site" content="@langzy">
<meta name="twitter:creator" content="@langzy">

<!-- Additional SEO Meta Tags -->
<meta name="theme-color" content="#39BDF8">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Langzy">

<!-- Google Search Console Verification -->
@if(env('GOOGLE_SEARCH_CONSOLE_VERIFICATION'))
<meta name="google-site-verification" content="{{ env('GOOGLE_SEARCH_CONSOLE_VERIFICATION') }}" />
@endif

<!-- Structured Data (JSON-LD) -->
@if($structuredData)
<script type="application/ld+json">
{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif

