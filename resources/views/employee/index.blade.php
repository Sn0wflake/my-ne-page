@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative  bg-orange-900">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
            <h1 class="text-5xl font-bold text-white">{{ __('messages.employee') }}</h1>
        </div>
    </div>

    <!-- Welcome Section -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-4">{{ __('messages.welcome_message') }}</h2>
                <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                <p class="text-gray-700 leading-relaxed">
                    {{ __('messages.welcome_text') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('images/team.jpg') }}" alt="Team" class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">{{ __('messages.reason') }}</h2>

            <div class="grid md:grid-cols-4 gap-8">
                <!-- Reliable and Trustworthy -->
                <div class="text-center">
                    <div class="text-blue-orange mb-4 flex justify-center">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ __('messages.reliable') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.reliable_text') }}
                    </p>
                </div>

                <!-- Flexible Employment Options -->
                <div class="text-center">
                    <div class="text-orange-900 mb-4 flex justify-center">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ __('messages.flexible') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.flexible_text') }}
                    </p>
                </div>

                <!-- Comprehensive Support -->
                <div class="text-center">
                    <div class="text-orange-900 mb-4 flex justify-center">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ __('messages.support') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.support_text') }}
                    </p>
                </div>

                <!-- Personalized Job Matching -->
                <div class="text-center">
                    <div class="text-orange-900 mb-4 flex justify-center">
                        <svg class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">{{ __('messages.personalized') }}</h3>
                    <p class="text-gray-600">
                        {{ __('messages.personalized_text') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="relative py-16">
        <div class="absolute inset-0">
            <img src="{{ asset('images/worker-bg.jpg') }}" alt="Worker" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-orange-900 bg-opacity-75"></div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">{{ __('messages.join') }}</h2>
            <p class="mb-8 max-w-2xl mx-auto">
                {{ __('messages.join_text') }}
            </p>
            <a href="{{ route('contact') }}" class="inline-block bg-red-700 hover:bg-red-800 text-white px-8 py-3 rounded-lg">
                {{__('messages.contacts3')}}
            </a>
        </div>
    </div>
@endsection
