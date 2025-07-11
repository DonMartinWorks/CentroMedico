<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} &#124; {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-white">
    {{-- Header --}}
    @include('layouts.includes.admin.navigation')

    {{-- Sidebar --}}
    @include('layouts.includes.admin.sidebar')

    <div class="p-4 sm:ml-64">
        <div class="mt-14 w-full">
            @include('layouts.includes.admin.breadcrumb')

            <!-- Page Heading -->
            @if (isset($action))
                {{ $action }}
            @endif

            <section class="bg-stone-50 rounded-md shadow-lg px-2 py-4 border">
                {{ $slot }}
            </section>
        </div>
    </div>

    @stack('modals')

    @livewireScripts

    {{-- Flowbite --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- Font-Awesome --}}
    <script src="https://kit.fontawesome.com/ff5c09116c.js" crossorigin="anonymous"></script>

    <x-libraries.sweet-alert />
</body>

</html>
