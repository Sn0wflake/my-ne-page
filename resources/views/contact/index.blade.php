@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">Contact Us</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name"
                           class="w-full px-3 py-2 border rounded-lg @error('name') border-red-500 @enderror"
                           value="{{ old('name') }}">
                    @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" name="email" id="email"
                           class="w-full px-3 py-2 border rounded-lg @error('email') border-red-500 @enderror"
                           value="{{ old('email') }}">
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Message</label>
                    <textarea name="message" id="message" rows="4"
                              class="w-full px-3 py-2 border rounded-lg @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                    @error('message')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </div>

        <div class="mt-8 bg-white rounded-lg shadow p-6">
            <h2 class="text-2xl font-bold mb-4">Our Details</h2>
            <div class="space-y-2">
                <p><strong>Address:</strong> Your Company Address</p>
                <p><strong>Email:</strong> info@yourcompany.com</p>
                <p><strong>Phone:</strong> +371 12345678</p>
            </div>
        </div>
    </div>
@endsection
