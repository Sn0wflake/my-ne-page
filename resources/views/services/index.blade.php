@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="relative  bg-orange-900">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-900 to-orange-800"></div>
        <div class="relative z-10 max-w-7xl mx-auto px-4 py-16">
            <h1 class="text-5xl font-bold text-white">{{ __('messages.servicestitle') }}</h1>
        </div>
    </div>

    <!-- Services Content -->
    <div class="max-w-7xl mx-auto px-4 py-16">
        <!-- Recruiting Section -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-24">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">{{ __('messages.servicesrecruitment') }}</h2>
                <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                <p class="text-gray-700 leading-relaxed">
                    {{ __('messages.recruitingtext') }}
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/recruiting.jpg') }}" alt="Recruiting"
                     class="rounded-lg shadow-lg w-full h-[400px] object-cover">
            </div>
        </div>

        <!-- employee Leasing Section -->
        <div class="flex flex-col-reverse md:flex-row items-center gap-12 mb-24">
            <div class="md:w-1/2">
                <img src="{{ asset('images/employee-leasing.jpg') }}" alt="{{ __('messages.lisingtitle') }}"
                     class="rounded-lg shadow-lg w-full h-[400px] object-cover">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Employee Leasing</h2>
                <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                <p class="text-gray-700 leading-relaxed">
                    Our employee leasing services give companies the flexibility to scale their
                    workforce to meet their needs. Employee leasing through HRMC allows you
                    to access workers without the long-term commitment and administrative
                    complexities of traditional hiring. We take care of payroll processing,
                    benefits and compliance, allowing you to focus on your core operations
                    while having a workforce that can adapt to the changing needs of your business.
                </p>
            </div>
        </div>

        <!-- Staffing Section -->
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">Staffing</h2>
                <div class="w-16 h-1 bg-orange-900 mb-6"></div>
                <p class="text-gray-700 leading-relaxed">
                    HRMC's recruitment services offer comprehensive solutions for both
                    temporary and permanent staffing needs. Whether you need temporary
                    staff to cover peak periods or long-term employees to fill key roles,
                    our recruitment experts work closely with you to understand your requirements
                    and offer customised recruitment solutions that increase productivity and
                    drive business success.
                </p>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/staffing.jpg') }}" alt="Staffing"
                     class="rounded-lg shadow-lg w-full h-[400px] object-cover">
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gradient-to-br from-gray-900 to-orange-900 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold mb-4">ASK FOR SERVICES!</h2>
            <p class="mb-8 text-lg">Contact us and we will find the best solution for you</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg transition duration-300">
                CONTACTS
            </a>
        </div>
    </div>
@endsection
