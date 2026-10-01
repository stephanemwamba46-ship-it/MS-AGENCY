<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title ?? '' }}
    </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-gray-900">
    <x-navbar />
    <main class="relative z-0">
        {{ $slot }}
    </main>
    <x-footer />
    @livewireScripts
</body>
</html>