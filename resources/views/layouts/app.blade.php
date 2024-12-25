<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
    <!-- Add Flag Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.1.0/css/flag-icons.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo/Brand -->
            <div class="flex-shrink-0 flex items-center">
                <div class="w-32 h-16">
                    <svg class="w-full h-full" viewBox="0 0 400 200" xmlns="http://www.w3.org/2000/svg">
                        <!-- Background shape -->
                        <rect x="50" y="40" width="300" height="120" rx="10" fill="#f8f8f8"/>

                        <!-- Abstract building/construction element -->
                        <path d="M90 120 L120 70 L150 120 L180 70 L210 120"
                              stroke="#2b4c7e"
                              stroke-width="6"
                              fill="none"/>

                        <!-- Company name -->
                        <text x="200" y="110"
                              font-family="Arial, sans-serif"
                              font-size="32"
                              font-weight="bold"
                              text-anchor="middle"
                              fill="#2b4c7e">KONVIR</text>

                        <text x="200" y="140"
                              font-family="Arial, sans-serif"
                              font-size="24"
                              text-anchor="middle"
                              fill="#666666">EHITUS</text>

                        <!-- Decorative line -->
                        <line x1="90" y1="130" x2="310" y2="130"
                              stroke="#2b4c7e"
                              stroke-width="2"/>
                    </svg>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-lg font-medium transition duration-150 ease-in-out">
                    {{ __('messages.Home') }}
                </a>
                <a href="{{ route('jobs') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-lg font-medium transition duration-150 ease-in-out">
                    {{ __('messages.Jobs') }}
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md text-lg font-medium transition duration-150 ease-in-out">
                    {{ __('messages.Contact') }}
                </a>
            </div>

            <!-- Language Switcher -->
            <div class="flex items-center relative">
                <form id="language-switcher" action="{{ route('language.switch') }}" method="POST" class="flex items-center">
                    @csrf
                    <select name="locale" onchange="this.form.submit()" class="bg-white border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 appearance-none pr-8 cursor-pointer">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>
                            <span class="flag-icon flag-icon-gb"></span> English
                        </option>
                        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>
                            <span class="flag-icon flag-icon-ru"></span> Русский
                        </option>
                        <option value="lv" {{ app()->getLocale() == 'lv' ? 'selected' : '' }}>
                            <span class="flag-icon flag-icon-lv"></span> Latviešu
                        </option>
                        <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>
                            <span class="flag-icon flag-icon-de"></span> Deutsch
                        </option>
                    </select>
                    <div class="pointer-events-none absolute right-2 top-1/2 transform -translate-y-1/2">
                        <svg class="h-4 w-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </form>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button p-2 rounded-md text-gray-700 hover:text-blue-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('messages.Home') }}
                </a>
                <a href="{{ route('jobs') }}" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('messages.Jobs') }}
                </a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 block px-3 py-2 rounded-md text-base font-medium">
                    {{ __('messages.Contact') }}
                </a>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-7xl mx-auto p-4">
    @yield('content')
</main>

<footer class="bg-gray-800 text-white p-2 mt-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <p>&copy; {{ date('Y') }} Konvir Ehitus. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    // Mobile menu toggle
    document.querySelector('.mobile-menu-button').addEventListener('click', function() {
        document.querySelector('.mobile-menu').classList.toggle('hidden');
    });
</script>
</body>
</html>
