@extends('layouts.app')

@section('content')
<section class="min-h-screen pt-32 pb-40 px-8 bg-white">
    <div class="mb-20 flex justify-between items-end">
        <div>
            <h1 class="text-6xl uppercase font-black">Dashboard</h1>
            <p class="text-sm uppercase tracking-widest opacity-50 mt-4">Manage Portfolio Content</p>
        </div>
        @if(session('success'))
            <div class="p-4 bg-black text-white text-xs uppercase tracking-widest animate-pulse">
                {{ session('success') }}
            </div>
        @endif
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-20">
        <!-- Profile Section -->
        <div class="lg:col-span-12 border-b-2 border-black pb-20">
            <h2 class="text-xs uppercase tracking-[0.5em] font-black mb-12">01. Profile</h2>
            <form action="{{ route('admin.profile.update') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-12">
                @csrf
                <div class="space-y-8">
                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold">Full Name</label>
                        <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="w-full border-b border-black py-2 focus:outline-none uppercase text-sm">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold">Email</label>
                        <input type="email" name="email" value="{{ $profile->email ?? '' }}" class="w-full border-b border-black py-2 focus:outline-none text-sm">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold">Bio Statement</label>
                        <textarea name="bio" rows="2" class="w-full border-b border-black py-2 focus:outline-none text-sm italic">{{ $profile->bio ?? '' }}</textarea>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold">About Title</label>
                        <input type="text" name="about_title" value="{{ $profile->about_title ?? '' }}" class="w-full border-b border-black py-2 focus:outline-none uppercase text-sm">
                    </div>
                    <div class="space-y-2">
                        <label class="text-[10px] uppercase tracking-widest font-bold">About Description</label>
                        <textarea name="about_description" rows="4" class="w-full border-b border-black py-2 focus:outline-none text-sm">{{ $profile->about_description ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="w-full bg-black text-white py-4 uppercase text-[10px] tracking-widest font-bold hover:invert transition-stark">Update Profile</button>
                </div>
            </form>
        </div>

        <!-- Skills Section -->
        <div class="lg:col-span-6 border-r-0 lg:border-r-2 border-black pr-0 lg:pr-20">
            <h2 class="text-xs uppercase tracking-[0.5em] font-black mb-12">02. Skills</h2>
            
            <!-- Add Skill Form -->
            <form action="{{ route('admin.skills.store') }}" method="POST" class="mb-12 p-8 bg-black/5">
                @csrf
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <input type="text" name="name" placeholder="SKILL NAME" required class="bg-transparent border-b border-black py-2 text-xs uppercase focus:outline-none">
                    <input type="text" name="category" placeholder="CATEGORY" class="bg-transparent border-b border-black py-2 text-xs uppercase focus:outline-none">
                </div>
                <div class="flex items-center gap-4">
                    <input type="number" name="level" placeholder="LEVEL %" min="0" max="100" required class="bg-transparent border-b border-black py-2 text-xs uppercase focus:outline-none w-24">
                    <button type="submit" class="bg-black text-white px-8 py-2 uppercase text-[10px] tracking-widest font-bold ml-auto">Add</button>
                </div>
            </form>

            <div class="space-y-8">
                @foreach($skills as $skill)
                <div class="p-6 border border-black/10 group relative">
                    <form action="{{ route('admin.skills.update', $skill) }}" method="POST" class="space-y-4">
                        @csrf @method('PUT')
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="name" value="{{ $skill->name }}" class="bg-transparent border-b border-black/20 py-1 text-xs uppercase focus:border-black focus:outline-none">
                            <input type="text" name="category" value="{{ $skill->category }}" class="bg-transparent border-b border-black/20 py-1 text-xs uppercase focus:border-black focus:outline-none">
                        </div>
                        <div class="flex items-center gap-4">
                            <input type="number" name="level" value="{{ $skill->level }}" class="bg-transparent border-b border-black/20 py-1 text-xs uppercase focus:border-black focus:outline-none w-20">
                            <button type="submit" class="text-[10px] uppercase font-black hover:invert bg-black text-white px-4 py-1">Save</button>
                        </div>
                    </form>
                    <form action="{{ route('admin.skills.delete', $skill) }}" method="POST" class="absolute top-6 right-6">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-[10px] uppercase font-black hover:line-through opacity-20 hover:opacity-100 transition-opacity">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Achievements Section -->
        <div class="lg:col-span-6">
            <h2 class="text-xs uppercase tracking-[0.5em] font-black mb-12">03. Milestones</h2>
            
            <!-- Add Achievement Form -->
            <form action="{{ route('admin.achievements.store') }}" method="POST" class="mb-12 p-8 bg-black/5">
                @csrf
                <div class="space-y-4">
                    <input type="text" name="title" placeholder="ACHIEVEMENT TITLE" required class="w-full bg-transparent border-b border-black py-2 text-xs uppercase focus:outline-none">
                    <input type="text" name="year" placeholder="YEAR" class="w-full bg-transparent border-b border-black py-2 text-xs uppercase focus:outline-none">
                    <textarea name="description" placeholder="DESCRIPTION" rows="2" class="w-full bg-transparent border-b border-black py-2 text-xs focus:outline-none uppercase"></textarea>
                    <button type="submit" class="w-full bg-black text-white py-2 uppercase text-[10px] tracking-widest font-bold">Log Milestone</button>
                </div>
            </form>

            <div class="space-y-8">
                @foreach($achievements as $achievement)
                <div class="p-6 border border-black/10 group relative">
                    <form action="{{ route('admin.achievements.update', $achievement) }}" method="POST" class="space-y-4">
                        @csrf @method('PUT')
                        <input type="text" name="title" value="{{ $achievement->title }}" class="w-full bg-transparent border-b border-black/20 py-1 text-xs uppercase font-bold focus:border-black focus:outline-none">
                        <input type="text" name="year" value="{{ $achievement->year }}" class="w-full bg-transparent border-b border-black/20 py-1 text-xs uppercase focus:border-black focus:outline-none">
                        <textarea name="description" class="w-full bg-transparent border-b border-black/20 py-1 text-[10px] uppercase focus:border-black focus:outline-none">{{ $achievement->description }}</textarea>
                        <button type="submit" class="text-[10px] uppercase font-black hover:invert bg-black text-white px-4 py-1">Save Changes</button>
                    </form>
                    <form action="{{ route('admin.achievements.delete', $achievement) }}" method="POST" class="absolute top-6 right-6">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-[10px] uppercase font-black hover:line-through opacity-20 hover:opacity-100 transition-opacity">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
