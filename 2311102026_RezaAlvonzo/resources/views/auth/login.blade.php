@extends('layouts.app')

@section('title', 'Login | Admin Access')

@section('content')
<div class="min-h-screen flex items-center justify-center px-6">
    <div class="w-full max-w-md">
        <div class="glass p-10 rounded-[2.5rem] border border-white/5 relative overflow-hidden">
            <div class="relative z-10">
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold tracking-tight mb-2">Admin Portal</h1>
                    <p class="text-neutral-500 text-sm uppercase tracking-widest">Authorized Access Only</p>
                </div>

                <form action="{{ route('login') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-xs font-bold text-neutral-500 uppercase tracking-widest mb-2 ml-1">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required 
                            class="w-full bg-white/[0.03] border border-white/10 rounded-2xl px-5 py-4 focus:outline-none focus:border-blue-500/50 transition-colors text-white">
                        @error('email')
                            <p class="text-red-500 text-xs mt-2 ml-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-neutral-500 uppercase tracking-widest mb-2 ml-1">Password</label>
                        <input type="password" name="password" required 
                            class="w-full bg-white/[0.03] border border-white/10 rounded-2xl px-5 py-4 focus:outline-none focus:border-blue-500/50 transition-colors text-white">
                    </div>

                    <button type="submit" class="w-full py-4 bg-white text-black font-bold rounded-2xl hover:bg-neutral-200 transition-all transform active:scale-[0.98]">
                        Authenticate
                    </button>
                </form>
            </div>

            <!-- Background light -->
            <div class="absolute -top-12 -right-12 w-32 h-32 bg-blue-600/20 blur-3xl rounded-full"></div>
        </div>
        
        <div class="mt-8 text-center">
            <a href="{{ route('portfolio') }}" class="text-neutral-500 hover:text-white transition-colors text-sm">
                ← Return to Portfolio
            </a>
        </div>
    </div>
</div>
@endsection
