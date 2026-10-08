<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white text-gray-900">

    {{-- Navbar --}}
    <nav class="flex h-16 items-center justify-between bg-slate-900 px-7">

        {{-- Lado esquerdo --}}
        <div class="flex items-center gap-10">

            {{-- Logo --}}
            <div>

                <a href="{{ url('/') }}" class="text-2xl font-bold text-indigo-500">
                    <img class="h-8 w-8" src="https://assets.laracasts.com/images/primary-logo-symbol.svg"
                        alt="">
                </a>
            </div>

            {{-- Links --}}
            <div class="flex items-center gap-3">

                <x-nav-link href="{{ url('/') }}" :active="request()->is('/')">
                    Home
                </x-nav-link>

                <x-nav-link href="{{ url('/about') }}" :active="request()->is('about')">
                    About
                </x-nav-link>

                <x-nav-link href="{{ url('/contact') }}" :active="request()->is('contact')">
                    Contact
                </x-nav-link>

            </div>
        </div>

        {{-- Lado direito --}}
        <div class="flex items-center gap-6">

            {{-- Notificação --}}
            <button type="button" class="text-gray-400 transition hover:text-white" aria-label="Notificações">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967
                           8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967
                           8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085
                           5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714
                           0m5.714 0a3 3 0 1 1-5.714 0" />
                </svg>
            </button>

            {{-- Avatar --}}
            <button type="button" class="h-9 w-9 overflow-hidden rounded-full bg-gray-300">
                <img src="https://ui-avatars.com/api/?name=User" alt="Usuário" class="h-full w-full object-cover">
            </button>

        </div>
    </nav>

    {{-- Título da página --}}
    <header class="border-b border-gray-200 px-7 py-7 shadow-sm">
        <h1 class="text-3xl font-bold tracking-tight">
            {{ $heading }}
        </h1>
    </header>

    {{-- Conteúdo --}}
    <main class="px-7 py-7">
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>

</body>

</html>
