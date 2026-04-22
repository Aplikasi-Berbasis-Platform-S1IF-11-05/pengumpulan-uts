@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="max-w-sm mx-auto mt-16">
        <h2 class="text-xl font-semibold mb-6">Login</h2>

        @if (session('error'))
            <div class="mb-4 bg-red-50 border border-red-200 text-red-600 px-4 py-3 rounded text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('email') border-red-400 @enderror"
                    value="{{ old('email') }}" autofocus>
                @error('email')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500 @error('password') border-red-400 @enderror">
                @error('password')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Remember me</label>
            </div>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm font-medium">
                Sign In
            </button>
        </form>
    </div>
@endsection
