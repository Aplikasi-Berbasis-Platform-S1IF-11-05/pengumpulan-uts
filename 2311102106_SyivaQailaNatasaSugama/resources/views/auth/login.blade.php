@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="neo-brutalism-card p-12 bg-white max-w-md w-full">
        <h1 class="text-4xl font-black mb-8 uppercase text-center">Admin Login</h1>
        
        @if ($errors->any())
            <div class="bg-red-custom text-white p-4 mb-6 neo-brutalism-button font-bold">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block font-black uppercase mb-2">Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full p-4 border-4 border-black focus:bg-yellow-custom outline-none font-bold" required>
            </div>
            <div>
                <label class="block font-black uppercase mb-2">Password</label>
                <input type="password" name="password" class="w-full p-4 border-4 border-black focus:bg-yellow-custom outline-none font-bold" required>
            </div>
            <button type="submit" class="w-full py-4 bg-blue-custom text-white font-black neo-brutalism-button text-xl uppercase">
                Access Dashboard
            </button>
        </form>
        
        <div class="mt-8 text-center font-bold text-sm opacity-50">
            SECURE ACCESS ONLY
        </div>
    </div>
</div>
@endsection
