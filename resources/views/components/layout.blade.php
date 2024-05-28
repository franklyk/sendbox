<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/icon/favicon.ico" type="image/x-icon">

    @vite('resources/css/app.css')

    <title>{{ env('APP_NAME') }}</title>

</head>

<body class="h-full">

    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">

                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="h-8 w-auto" src="/images/logo/logo.png" alt="">
                    </div>
                    <div class="hidden sm:ml-6 sm:block">
                        <div class="flex space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                            <x-nav-link href="/task" :active="request()->is('task')">Tasks</x-nav-link>

                        </div>
                    </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>

                    @endguest

                    @auth
                        <form action="/logout" method="POST">
                            @csrf

                            <x-form-button>Log out</x-form-button>

                        </form>
                    @endauth

                </div>
            </div>
        </div>


    </nav>

    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            <x-button href="/task-create">Create Task</x-button>
        </div>
    </header>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

            {{ $slot }}
        </div>
    </main>


</body>

</html>
