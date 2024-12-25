@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">{{ __('messages.Contact_us') }}</h1>

        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">{{ __('messages.our_details') }}</h2>
            <div class="space-y-3">
                <p><strong>{{ __('messages.address') }}:</strong> {{ __('messages.company_address') }}</p>
                <p><strong>{{ __('messages.email') }}:</strong> {{ __('messages.company_email') }}</p>
                <p><strong>{{ __('messages.phone') }}:</strong> {{ __('messages.company_phone') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-2xl font-bold mb-4">{{ __('messages.working_hours') }}</h2>
            <div class="space-y-2">
                <p><strong>{{ __('messages.monday_friday') }}:</strong> 9:00 AM - 6:00 PM</p>
                <p><strong>{{ __('messages.saturday') }}:</strong> 10:00 AM - 4:00 PM</p>
                <p><strong>{{ __('messages.sunday') }}:</strong> {{ __('messages.closed') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4">{{ __('messages.location') }}</h2>
            <div class="w-full h-96 rounded-lg overflow-hidden">
                <iframe
                    class="w-full h-full border-0"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=24.3383%2C56.8527%2C24.3583%2C56.8727&amp;layer=mapnik&amp;marker=56.86274367%2C24.34836426"
                    style="border: 1px solid #ddd;">
                </iframe>
                <div class="mt-2 text-sm text-gray-600">
                    <a href="https://www.openstreetmap.org/?mlat=56.86274367&amp;mlon=24.34836426#map=15/56.86274367/24.34836426"
                       target="_blank"
                       class="text-blue-600 hover:text-blue-800">
                        {{ __('messages.view_larger_map') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
