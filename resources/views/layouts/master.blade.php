<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ma voorbeeld') }}</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiase>
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @include('layouts.partials.header')
    
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</div>

<!-- Scripts -->
@vite(['resources/js/app.js'])
@yield('scripts')
</body>
</html>
