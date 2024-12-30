@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative h-54 bg-orange-900">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
            <h1 class="text-5xl font-bold text-white">{{ __('messages.about_us') }}</h1>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Mission Section -->
        <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
            <div>
                <h2 class="text-3xl font-bold mb-4">{{ __('messages.at') }}</h2>
                <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                <p class="text-gray-700 leading-relaxed mb-6">
                    {{ __('messages.at_text') }}
                </p>
            </div>
            <div>
                <img src="{{ asset('images/team-meeting.jpg') }}" alt="Team Meeting" class="rounded-lg shadow-lg w-full h-[400px] object-cover">
            </div>
        </div>

        <!-- Services Description -->
        <div class="grid md:grid-cols-2 gap-12 mb-24">
            <div class="bg-orange-900 text-white p-8 rounded-lg">
                <img src="{{ asset('images/recruitment.jpg') }}" alt="Recruitment" class="w-full h-48 object-cover rounded mb-6">
                <p class="leading-relaxed">
                    {{ __('messages.our_recruitment') }}
                </p>
            </div>
            <div class="bg-gray-50 p-8 rounded-lg">
                <img src="{{ asset('images/employee-leasing.jpg') }}" alt="Employee Leasing" class="w-full h-48 object-cover rounded mb-6">
                <p class="leading-relaxed text-gray-700">
                    {{ __('messages.our_leasing') }}
                </p>
            </div>
        </div>

        <!-- Staffing Solutions -->
        <div class="mb-24">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        {{ __('messages.our_staffing') }}
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        {{ __('messages.at_at') }}
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/team-work.jpg') }}" alt="Team Work" class="rounded-lg shadow-lg w-full">
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-br from-gray-900 to-orange-900 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">{{ __('messages.ask') }}</h2>
            <p class="mb-8">{{ __('messages.asktext') }}</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg transition duration-300">
                CONTACTS
            </a>
        </div>
    </div>
@endsection
