<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BLG Legal - Intake</title>
    <link rel="icon" href="https://www.blglegal.com/wp-content/uploads/2019/10/cropped-BLG-kok-1-32x32.png" sizes="32x32">
    <link rel="icon" href="https://www.blglegal.com/wp-content/uploads/2019/10/cropped-BLG-kok-1-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://www.blglegal.com/wp-content/uploads/2019/10/cropped-BLG-kok-1-180x180.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased  bg-gray-100">
<div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mt-10">
    <div>
        <a class="flex justify-center" href="/">
            <x-application-logo />
        </a>
    </div>

    <div class="w-full sm:max-w-4xl mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
</body>
</html>
