<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Convir Ehitus') }}</title>
    @vite(['resources/css/app.css'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/7.1.0/css/flag-icons.min.css" rel="stylesheet">
</head>
<body class="bg-white">
<nav class="bg-gray-900">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <img src="{{ asset('images/konvirehitus-logo.png') }}" alt="Convir Ehitus Logo" class="h-12">
            </div>

            <!-- Main Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium">{{ __('messages.home') }}</a>
                <a href="{{ route('services') }}" class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium">{{ __('messages.services')}}</a>
{{--                <a href="{{ route('employee') }}" class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium">{{ __('messages.employee') }}</a>--}}
                <a href="{{ route('about') }}" class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium">{{ __('messages.about_us') }}</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 px-3 py-2 text-lg font-medium">{{ __('messages.contact') }}</a>
            </div>

            <!-- Language Switcher -->
            <div class="flex items-center relative">
                <form id="language-switcher" action="{{ route('language.switch') }}" method="POST" class="flex items-center">
                    @csrf
                    <select name="locale" onchange="this.form.submit()"
                            class="bg-transparent text-white border border-white rounded px-2 py-1 text-sm focus:outline-none appearance-none pr-8 cursor-pointer">
                        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>EN</option>
                        <option value="ru" {{ app()->getLocale() == 'ru' ? 'selected' : '' }}>RU</option>
                        <option value="lv" {{ app()->getLocale() == 'lv' ? 'selected' : '' }}>LV</option>
                        <option value="de" {{ app()->getLocale() == 'de' ? 'selected' : '' }}>DE</option>
                    </select>
                </form>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button p-2 rounded-md text-white hover:text-gray-200 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}" class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium">Home</a>
                <a href="{{ route('services') }}" class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium">Services</a>
                <a href="{{ route('employee') }}" class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium">Employee</a>
                <a href="{{ route('about') }}" class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium">About Us</a>
                <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 block px-3 py-2 text-base font-medium">Contacts</a>
            </div>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8">
            <!-- Logo -->
            <div>
                <img src="{{ asset('images/konvirehitus-circle-logo.png') }}" alt="Convir Ehitus Logo" class="h-24 mb-8">
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="font-bold mb-4">{{ __('messages.contacts') }}</h3>
                <p>(+371) 297 745 71</p>
                <p>(+49) 1512 0273 586</p>
                <p>info@personallosungen.eu</p>
                <p>Rīga, E.Birznieka Upīša 20A, LV-1050</p>
            </div>

            <!-- Company Info -->
            <div>
                <h3 class="font-bold mb-4">SIA "Konvir Ehitus"</h3>
                <p>Reģ.nr.: 42103111904</p>
                <p>PVN Reģ.Nr:LV42103111904</p>
                <p>Mārupes nov., Mārupe, Pētera iela 18, LV-2167</p>
                <p>Citadele bank</p>
                <p>LV96ZZZ42103111904</p>
            </div>

            <!-- Working Hours -->
            <div>
                <h3 class="font-bold mb-4">{{ __('messages.working_hours') }}</h3>
                <p>{{ __('messages.working_time') }}</p>
                <p>{{ __('messages.weekend_working_time') }}</p>
            </div>
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
