@extends('layouts.app')

@section('content')
    <div>
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.welcome') }}</h1>

        <div class="space-y-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-4">{{ __('messages.about_us') }}</h2>
                <p>{{ __('messages.about_text') }}</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold mb-4">{{ __('messages.our_services') }}</h2>
                <ul class="list-disc pl-5">
                    <li>{{ __('messages.service_1') }}</li>
                    <li>{{ __('messages.service_2') }}</li>
                    <li>{{ __('messages.service_3') }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
