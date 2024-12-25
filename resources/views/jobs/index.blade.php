@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-72 px-4">
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.Available Positions') }}</h1>

        <div class="grid gap-6">
            @foreach($jobs as $job)
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-2xl font-bold mb-2">{{ $job['title'][app()->getLocale()] }}</h2>
                    <p class="text-gray-600 mb-4">{{ $job['description'][app()->getLocale()] }}</p>
                    <div class="flex gap-4 text-sm text-gray-500">
                        <div>📍 {{ $job['location'][app()->getLocale()] }}</div>
                        <div>💼 {{ $job['type'][app()->getLocale()] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
