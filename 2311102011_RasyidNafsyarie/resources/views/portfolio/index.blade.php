@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex flex-col justify-center px-8 pt-20">
    <div class="mb-12">
        <span class="uppercase text-xs tracking-[0.3em] font-semibold opacity-50">Developing the Future</span>
        <h1 class="text-huge font-black uppercase mt-4">
            {{ $profile->name ?? 'Your Name' }}
        </h1>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-end">
        <div class="md:col-span-4">
            <p class="text-xl leading-relaxed serif italic">
                "{{ $profile->bio ?? 'A brief, powerful statement about who you are.' }}"
            </p>
        </div>
        <div class="md:col-span-8 flex justify-end">
            <div class="w-full md:w-3/4 h-[600px] bg-black grayscale hover:grayscale-0 transition-all duration-700 overflow-hidden relative group">
                @if($profile && $profile->photo)
                    <img src="{{ asset('storage/' . $profile->photo) }}" alt="Profile" class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center text-white opacity-20 text-8xl font-black">IMAGE</div>
                @endif
                <div class="absolute bottom-8 left-8 text-white opacity-0 group-hover:opacity-100 transition-opacity">
                    <p class="text-xs uppercase tracking-widest">{{ $profile->address ?? 'Location Unknown' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-40 px-8 border-y-2 border-black">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
        <div>
            <h2 class="text-6xl uppercase mb-12">{{ $profile->about_title ?? 'The Vision' }}</h2>
        </div>
        <div>
            <p class="text-2xl leading-relaxed mb-8">
                {{ $profile->about_description ?? 'Describe your professional philosophy and approach.' }}
            </p>
            <div class="grid grid-cols-2 gap-8 text-sm uppercase tracking-widest font-bold">
                <div>
                    <p class="opacity-50 mb-2">Email</p>
                    <p>{{ $profile->email ?? 'N/A' }}</p>
                </div>
                <div>
                    <p class="opacity-50 mb-2">Phone</p>
                    <p>{{ $profile->phone ?? 'N/A' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="py-40 px-8">
    <h2 class="text-xs uppercase tracking-[0.5em] font-black mb-20 text-center">Expertise</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-1">
        @foreach($skills as $skill)
        <div class="stark-border p-12 hover:bg-black hover:text-white transition-stark flex flex-col justify-between aspect-square">
            <span class="text-xs opacity-50 uppercase tracking-widest">{{ $skill->category }}</span>
            <h3 class="text-4xl uppercase">{{ $skill->name }}</h3>
            <div class="flex items-end justify-between">
                <span class="text-6xl font-black">{{ $skill->level }}%</span>
                <div class="w-12 h-1 bg-current opacity-20"></div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Achievements Section -->
<section class="bg-black text-white py-40 px-8">
    <div class="flex justify-between items-end mb-20">
        <h2 class="text-8xl uppercase leading-none">Milestones</h2>
        <span class="text-xs uppercase tracking-widest opacity-50">Proven Results</span>
    </div>
    <div class="space-y-1">
        @foreach($achievements as $achievement)
        <div class="group border-t border-white/20 py-12 flex flex-col md:flex-row md:items-center justify-between hover:bg-white hover:text-black transition-stark px-4">
            <div class="flex items-center gap-12">
                <span class="text-xl font-bold opacity-30">{{ $achievement->year }}</span>
                <h3 class="text-5xl uppercase group-hover:italic transition-all">{{ $achievement->title }}</h3>
            </div>
            <p class="max-w-md text-sm uppercase tracking-widest opacity-50 group-hover:opacity-100 mt-4 md:mt-0">
                {{ $achievement->description }}
            </p>
        </div>
        @endforeach
    </div>
</section>
@endsection
