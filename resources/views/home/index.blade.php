@extends('layouts.app')

@section('content')
    <div class="py-8 max-w-3xl mx-auto"> <!-- Added max-w-3xl to reduce width -->
        <h1 class="text-4xl font-bold mb-12">{{ __('messages.welcome') }}</h1>

        <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
            <h2 class="text-3xl font-bold mb-6">{{ __('messages.about_us') }}</h2>
            <p class="text-xl">{{ __('messages.about_text') }}</p>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6">{{ __('messages.our_services') }}</h2>
            <ul class="space-y-4 text-xl">
                <li>{{ __('messages.service_1') }}</li>
                <li>{{ __('messages.service_2') }}</li>
                <li>{{ __('messages.service_3') }}</li>
            </ul>
        </div>
    </div>
@endsection
