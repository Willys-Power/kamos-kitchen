<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', "Kamo's Kitchen") }}</title>

    <meta name="description" content="Kamo's Kitchen — delicious, freshly prepared food made with love.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f7f3ed] text-[#241f1b] antialiased">

    <x-navbar />

    <main>
        <x-hero />

        <x-featured-dishes />

        <x-specials />

        <x-story />

        <x-menu-preview />

        <x-catering />

        <x-social />

        <x-cta />
    </main>

    <x-footer />

</body>

</html>
