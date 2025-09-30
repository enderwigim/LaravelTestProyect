<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Prototipo' }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @fluxAppearance
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen">

    {{-- Navbar global --}}
    <livewire:components.navbar />

    {{-- Contenido de cada página --}}
    {{ $slot }}

    @livewireScripts
    @fluxScripts
    @stack('modals')
</body>
</html>
