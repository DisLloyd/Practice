<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-neutral-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Store' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full font-sans text-neutral-900 antialiased">
    <div class="flex min-h-full flex-col items-center justify-center px-6 py-12">
        <a href="{{ route('home') }}" class="mb-8 text-lg font-semibold tracking-tight text-neutral-900">
            Store
        </a>

        <div class="w-full max-w-sm">
            <div class="rounded-2xl border border-neutral-200 bg-white p-8 shadow-sm">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
