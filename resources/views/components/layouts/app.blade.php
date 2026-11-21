<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? __('site.meta_title') }}</title>
    <meta name="description" content="{{ __('site.meta_description') }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo.jpg') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Manrope:wght@400;500;600;700;800&family=Noto+Nastaliq+Urdu:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="flex min-h-screen flex-col bg-[#fbfcfd] font-sans text-[#021070] antialiased selection:bg-[#01188f] selection:text-[#fbfcfd] {{ app()->getLocale() === 'ur' ? 'font-urdu' : '' }}" x-data="{ mobileMenuOpen: false }">
    @include('partials.header')
    <main class="flex-grow">
        {{ $slot }}
    </main>
    @include('partials.footer')
    @livewireScripts
</body>
</html>
