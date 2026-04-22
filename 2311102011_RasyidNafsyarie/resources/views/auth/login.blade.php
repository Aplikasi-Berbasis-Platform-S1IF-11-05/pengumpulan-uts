@extends('layouts.app')

@section('content')
<section class="min-h-screen flex items-center justify-center px-8 bg-white">
    <div class="w-full max-w-lg">
        <div class="mb-12">
            <h1 class="text-6xl uppercase font-black">Secure <br>Access</h1>
            <p class="mt-4 text-sm uppercase tracking-widest opacity-50">Authorized Personnel Only</p>
        </div>

        @if($errors->any())
            <div class="mb-8 p-4 bg-black text-white text-xs uppercase tracking-widest">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-8">
            @csrf
            <div class="space-y-2">
                <label class="text-[10px] uppercase tracking-widest font-bold opacity-50">Email Address</label>
                <input type="email" name="email" required class="w-full bg-transparent border-b-2 border-black py-4 focus:outline-none focus:border-black/30 transition-all uppercase text-sm tracking-widest" placeholder="EMAIL@DOMAIN.COM">
            </div>
            <div class="space-y-2">
                <label class="text-[10px] uppercase tracking-widest font-bold opacity-50">Password</label>
                <input type="password" name="password" required class="w-full bg-transparent border-b-2 border-black py-4 focus:outline-none focus:border-black/30 transition-all uppercase text-sm tracking-widest" placeholder="••••••••">
            </div>
            <button type="submit" class="w-full bg-black text-white py-6 uppercase text-xs tracking-[0.3em] font-bold hover:bg-black/80 transition-all">
                Authenticate
            </button>
        </form>
        
        <div class="mt-12 pt-8 border-t border-black/10">
            <a href="/" class="text-[10px] uppercase tracking-widest font-bold hover:line-through">Return to Portfolio</a>
        </div>
    </div>
</section>
@endsection
