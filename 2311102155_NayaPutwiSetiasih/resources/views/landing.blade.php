@extends('layouts.app')

@section('title', 'Naya Putwi Setiasih - Portfolio')

@section('content')
    <section class="py-8 mb-10">
        <h1 class="text-3xl font-bold">Naya Putwi Setiasih</h1>
        <p class="mt-2 text-gray-500">Creative Developer & Tech Enthusiast</p>
        <p class="mt-4 text-gray-600 max-w-2xl leading-relaxed">
            Hi! I'm Naya, a passionate learner who loves building web applications
            and exploring the latest in technology.
        </p>
        <div class="mt-6 flex gap-4">
            @auth
                <a href="{{ route('admin.skills.index') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Admin Panel</a>
            @else
                <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">Login</a>
            @endauth
            <a href="mailto:nayaputwi@gmail.com" class="px-4 py-2 border border-gray-300 text-sm rounded text-gray-600 hover:border-gray-400">nayaputwi@gmail.com</a>
        </div>
    </section>

    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4">Skills</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
            @forelse ($skills as $skill)
                <div class="bg-white border border-gray-200 rounded p-4 flex justify-between items-center">
                    <span class="font-medium">{{ $skill->name }}</span>
                    <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">{{ $skill->level }}</span>
                </div>
            @empty
                <p class="text-gray-400 text-sm col-span-full">No skills yet.</p>
            @endforelse
        </div>
    </section>

    <section class="mb-10">
        <h2 class="text-xl font-semibold mb-4">Achievements</h2>
        <div class="space-y-3">
            @forelse ($achievements as $achievement)
                <div class="bg-white border border-gray-200 rounded p-4">
                    <h3 class="font-medium">{{ $achievement->name }}</h3>
                    <p class="mt-1 text-sm text-gray-500">{{ $achievement->description }}</p>
                </div>
            @empty
                <p class="text-gray-400 text-sm">No achievements yet.</p>
            @endforelse
        </div>
    </section>
@endsection
