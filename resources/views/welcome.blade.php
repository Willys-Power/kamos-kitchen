<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', "Kamo's Kitchen") }}</title>

    <meta name="description" content="Kamo's Kitchen — delicious, freshly prepared food made with love.">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@500;600;700&family=DM+Sans:wght@400;500;600;700;800&family=Lilita+One&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f7f3ed] text-[#241f1b] antialiased">

    {{-- <x-kamo-loader /> --}}

    <x-navbar />

    <main>
        <x-hero />

        <x-featured-dishes />

        <x-specials />

        <x-story />

        <x-menu-preview />

        {{-- <x-catering /> --}}

        <x-social />

        <x-cta />
    </main>

    {{-- Fixed WhatsApp CTA --}}
    <a href="https://wa.me/0365842568"
        class="fixed bottom-16 right-6 rounded-full bg-green-600 px-5 py-4 font-body text-xs font-bold uppercase tracking-[0.15em] text-kamo-cream transition-colors duration-300 hover:bg-kamo-green/90 shadow-2xl shadow-kamo-green/20 z-[9999]"
        target="_blank"
        rel="noopener noreferrer"
    >
        Order via Whatsapp
        {{-- <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
        </svg> --}}
    </a>

    <x-footer />

</body>

</html>
