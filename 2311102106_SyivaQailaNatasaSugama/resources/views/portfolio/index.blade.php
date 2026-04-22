@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 pt-20">
    <!-- Hero Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
        <div>
            <div class="inline-block px-4 py-2 bg-red-custom text-white font-bold neo-brutalism-button mb-6">
                HELLO, I AM
            </div>
            <h1 class="text-6xl lg:text-8xl font-black uppercase leading-none mb-8 tracking-tighter">
                {{ $profile->name }}
            </h1>
            <p class="text-2xl font-bold text-gray-700 mb-8 border-l-8 border-blue-custom pl-6">
                {{ $profile->role }}
            </p>
            <div class="flex gap-4">
                <a href="#achievements" class="px-8 py-4 bg-yellow-custom font-black neo-brutalism-button">VIEW PROJECTS</a>
                <a href="#about" class="px-8 py-4 bg-white font-black neo-brutalism-button">ABOUT ME</a>
            </div>
        </div>
        <div class="relative">
            <div class="neo-brutalism-card bg-blue-custom w-full aspect-square overflow-hidden">
                @if($profile->photo)
                    <img src="{{ asset('storage/' . $profile->photo) }}" class="w-full h-full object-cover" alt="{{ $profile->name }}">
                @else
                    <div class="w-full h-full flex items-center justify-center text-white text-9xl font-black">SQ</div>
                @endif
            </div>
            <!-- Decorative Elements -->
            <div class="absolute -top-10 -right-10 w-32 h-32 bg-yellow-custom rounded-full border-4 border-black z-[-1]"></div>
            <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-red-custom border-4 border-black z-[-1]"></div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="mb-32">
        <div class="neo-brutalism-card p-12 bg-white">
            <h2 class="text-4xl font-black mb-8 uppercase border-b-4 border-black pb-4 inline-block">Professional Bio</h2>
            <p class="text-xl leading-relaxed font-medium">
                {{ $profile->bio }}
            </p>
        </div>
    </div>

    <!-- Skills Section -->
    <div id="skills" class="mb-32">
        <h2 class="text-5xl font-black mb-12 uppercase text-center">Core Expertise</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($skills as $skill)
                <div class="neo-brutalism-card p-6 flex flex-col justify-between hover:bg-yellow-custom group">
                    <span class="text-sm font-bold opacity-50 uppercase mb-2">{{ $skill->category }}</span>
                    <h3 class="text-2xl font-black uppercase group-hover:scale-110 transition-transform">{{ $skill->name }}</h3>
                    <div class="mt-4 h-2 bg-black w-full"></div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Achievements Section -->
    <div id="achievements" class="mb-32">
        <h2 class="text-5xl font-black mb-12 uppercase text-center">Key Achievements</h2>
        <div class="space-y-12">
            @foreach($achievements as $achievement)
                <div class="neo-brutalism-card p-8 bg-white hover:bg-blue-custom hover:text-white transition-colors">
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-6">
                        <div>
                            <span class="px-3 py-1 bg-black text-white text-sm font-bold mb-2 inline-block">{{ $achievement->year }}</span>
                            <h3 class="text-3xl font-black uppercase">{{ $achievement->title }}</h3>
                        </div>
                        <div class="mt-4 lg:mt-0 px-4 py-2 border-2 border-black font-bold uppercase">
                            {{ $achievement->role }}
                        </div>
                    </div>
                    <p class="text-lg font-medium opacity-90 mb-6">
                        {{ $achievement->description }}
                    </p>
                    <div class="font-bold italic">
                        @ {{ $achievement->company }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
