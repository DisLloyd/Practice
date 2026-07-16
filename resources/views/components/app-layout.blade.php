<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Store' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans text-neutral-900 antialiased">
    <div class="min-h-full flex flex-col">
        <x-navigation />

        @if (session('status'))
            <div class="mx-auto mt-4 w-full max-w-7xl px-6 lg:px-8">
                <div class="rounded-lg bg-emerald-50 px-4 py-3 text-sm text-emerald-700">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <main class="flex-1">
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>
</html>
