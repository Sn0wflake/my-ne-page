@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-screen">
        <div class="absolute inset-0">
            <img
                src="{{ asset('images/hero-bg.jpg') }}"
                class="w-full h-full object-cover"
                alt="Professional woman working"
            >
        </div>
        <div class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-center">
            <h1 class="text-white text-5xl font-bold max-w-4xl">{{ __('messages.title') }}</h1>
        </div>
    </div>
    <!-- LTRK Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-start">
                <div class="max-w-2xl">
                    <p class="text-lg mb-4">
                        {{ __('messages.member') }}
                    </p>
                    <p class="text-lg">
                        {{ __('messages.membermeaning') }}
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/konvirehitus-circle-logo.png') }}" alt="LTRK Logo" class="w-48">
                </div>
            </div>
        </div>
    </div>

    <!-- services Section -->
    <div class="py-16">
        <h2 class="text-4xl font-bold text-center mb-12">{{ __('messages.ourservices') }}</h2>
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-6 shadow flex flex-col min-h-[250px]">
                <div class="text-red-600 mb-4"></div>
                <h3 class="text-xl font-bold mb-2">{{ __('messages.recruiting') }}</h3>
                <p class="text-gray-600 mb-4 flex-grow">{{ __('messages.recruitingservices') }}</p>
                <div>
                    <a href="{{ route('services') }}" class="text-red-600">{{ __('messages.read') }}</a>
                </div>
            </div>
            <div class="bg-white rounded-lg p-6 shadow flex flex-col min-h-[250px]">
                <div class="text-red-600 mb-4"></div>
                <h3 class="text-xl font-bold mb-2">{{ __('messages.leasing') }}</h3>
                <p class="text-gray-600 mb-4 flex-grow">{{ __('messages.leasing_text') }}</p>
                <div>
                    <a href="{{ route('services') }}" class="text-red-600">{{ __('messages.read') }}</a>
                </div>
            </div>
            <div class="bg-white rounded-lg p-6 shadow flex flex-col min-h-[250px]">
                <div class="text-red-600 mb-4"></div>
                <h3 class="text-xl font-bold mb-2">{{ __('messages.advantages') }}</h3>
                <p class="text-gray-600 mb-4 flex-grow">{{ __('messages.advatages_text') }}</p>
                <div>
                    <a href="{{ route('services') }}" class="text-red-600">{{ __('messages.read') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional sections following the same pattern -->

    <!-- Call to Action -->
    <div class="bg-gray-900 text-white py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">{{ __('messages.ask') }}</h2>
        <p class="mb-8">{{ __('messages.asktext') }}</p>
        <a href="{{ route('contact') }}" class="bg-red-600 text-white px-8 py-3 rounded">{{ __('messages.contacts2') }}</a>
    </div>
@endsection
