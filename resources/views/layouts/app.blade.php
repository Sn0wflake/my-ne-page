<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body class="bg-gray-100">
<nav class="bg-blue-600 text-white p-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center">
            <div class="flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-blue-200">{{ __('Home') }}</a>
                <a href="{{ route('jobs') }}" class="text-white hover:text-blue-200">{{ __('Jobs') }}</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-blue-200">{{ __('Contact') }}</a>
            </div>
            <div class="flex items-center">
                <form id="language-switcher" action="{{ route('language.switch') }}" method="POST">
                    @csrf
                    <select name="locale" onchange="this.form.submit()" class="bg-gray-700 text-white rounded px-2 py-1">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
                        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>Русский</option>
                        <option value="lv" {{ app()->getLocale() == 'lv' ? 'selected' : '' }}>Latviešu</option>
                        <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>Deutsch</option>
                    </select>
                </form>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-7xl mx-auto p-4">
    @yield('content')
</main>

<footer class="bg-gray-800 text-white p-4 mt-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>
