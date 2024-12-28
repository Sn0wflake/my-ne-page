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
            <h1 class="text-white text-5xl font-bold max-w-4xl">
                Konvir Ehitus provides professional employment and recruitment services
            </h1>
        </div>
    </div>
    <!-- LTRK Section -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-start">
                <div class="max-w-2xl">
                    <p class="text-lg mb-4">
                        SIA "Konvir Ehitus" is a member of the Latvian Chamber of Commerce and Industry (LTRK) with the identification number 8251.
                    </p>
                    <p class="text-lg">
                        LTRK, as the largest business association in Latvia, plays a significant role in the development of the business environment and the promotion of international competitiveness, and we are proud to be a part of this community.
                    </p>
                </div>
                <div>
                    <img src="{{ asset('images/ltrk-logo.png') }}" alt="LTRK Logo" class="w-48">
                </div>
            </div>
        </div>
    </div>

    <!-- services Section -->
    <div class="py-16">
        <h2 class="text-4xl font-bold text-center mb-12">Our Services</h2>
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-8">
            <!-- Service Cards -->
            <div class="bg-white rounded-lg p-6 shadow">
                <div class="text-red-600 mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Recruiting</h3>
                <p class="text-gray-600 mb-4">At Konvir Ehitus, our recruiting services aim to connect companies with the best available workers.</p>
                <a href="{{ route('services') }}"
                   class="text-red-600">READ MORE</a>
            </div>
            <div class="bg-white rounded-lg p-6 shadow">
                <div class="text-red-600 mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Recruiting</h3>
                <p class="text-gray-600 mb-4">At Konvir Ehitus, our recruiting services aim to connect companies with the best available workers.</p>
                <a href="{{ route('services') }}"
                   class="text-red-600">READ MORE</a>
            </div>
            <div class="bg-white rounded-lg p-6 shadow">
                <div class="text-red-600 mb-4">
                </div>
                <h3 class="text-xl font-bold mb-2">Recruiting</h3>
                <p class="text-gray-600 mb-4">At Konvir Ehitus, our recruiting services aim to connect companies with the best available workers.</p>
                <a href="{{ route('services') }}"
            </div>
            <!-- Repeat for other services -->
        </div>
    </div>

    <!-- Additional sections following the same pattern -->

    <!-- Call to Action -->
    <div class="bg-gray-900 text-white py-20 text-center">
        <h2 class="text-4xl font-bold mb-4">ASK FOR SERVICES!</h2>
        <p class="mb-8">Contact us and we will find the best solution for you</p>
        <a href="{{ route('contact') }}" class="bg-red-600 text-white px-8 py-3 rounded">CONTACTS</a>
    </div>
@endsection
