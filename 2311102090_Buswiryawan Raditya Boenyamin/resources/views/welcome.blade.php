@extends('layouts.app')

@section('content')
<nav class="bg-white dark:bg-gray-800 shadow-sm sticky top-0 z-50 border-b dark:border-gray-700">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="text-xl font-bold text-indigo-600 dark:text-indigo-400">Portfolio.</div>
            <div class="flex items-center space-x-6">
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">About</a>
                    <a href="#skills" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">Skills</a>
                    <a href="#achievements" class="text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">Achievements</a>
                </div>
                
                <!-- Theme Toggle Button -->
                <button onclick="toggleTheme()" class="p-2 rounded-lg bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 transition">
                    <i class="fas fa-sun dark:hidden"></i>
                    <i class="fas fa-moon hidden dark:block"></i>
                </button>

                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition">Login</a>
            </div>
        </div>
    </div>
</nav>

<header class="bg-white dark:bg-gray-800 border-b dark:border-gray-700 overflow-hidden">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-2/3">
                <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Hi, I'm <span class="text-indigo-600 dark:text-indigo-400">{{ $profile->name ?? 'John Doe' }}</span>
                </h1>
                <p class="mt-4 text-xl text-gray-600 dark:text-gray-400">
                    {{ $profile->about_me ?? 'Software Engineer & Web Developer' }}
                </p>
                <div class="mt-8 flex space-x-4">
                    <a href="mailto:{{ $profile->email }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600">
                        Contact Me
                    </a>
                </div>
            </div>
            <div class="md:w-1/3 mt-12 md:mt-0 flex justify-center">
                <div class="w-64 h-64 rounded-full bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center border-4 border-indigo-200 dark:border-indigo-700 overflow-hidden">
                    @if($profile->profile_picture)
                        <img src="{{ asset('storage/' . $profile->profile_picture) }}" class="w-full h-full object-cover">
                    @else
                        <i class="fas fa-user text-8xl text-indigo-300 dark:text-indigo-500"></i>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <!-- About Section -->
    <section id="about" class="mb-20">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white border-b-2 border-indigo-600 dark:border-indigo-400 inline-block mb-8 pb-2">Personal Data</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white dark:bg-gray-800 p-8 rounded-xl shadow-sm border border-gray-100 dark:border-gray-700">
            <div>
                <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Email</p>
                <p class="mt-1 text-lg text-gray-900 dark:text-gray-200">{{ $profile->email ?? '-' }}</p>
            </div>
            <div>
                <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Phone</p>
                <p class="mt-1 text-lg text-gray-900 dark:text-gray-200">{{ $profile->phone ?? '-' }}</p>
            </div>
            <div class="md:col-span-2">
                <p class="text-sm font-semibold text-gray-500 dark:text-gray-400 uppercase tracking-wider">Address</p>
                <p class="mt-1 text-lg text-gray-900 dark:text-gray-200">{{ $profile->address ?? '-' }}</p>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="mb-20">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white border-b-2 border-indigo-600 dark:border-indigo-400 inline-block mb-8 pb-2">Skills</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
            @foreach($skills as $skill)
            <div>
                <div class="flex justify-between mb-2">
                    <span class="text-lg font-medium text-gray-700 dark:text-gray-300">{{ $skill->name }}</span>
                    <span class="text-indigo-600 dark:text-indigo-400 font-semibold">{{ $skill->level }}%</span>
                </div>
                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5">
                    <div class="bg-indigo-600 dark:bg-indigo-500 h-2.5 rounded-full" style="width: {{ $skill->level }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Achievements Section -->
    <section id="achievements">
        <h2 class="text-3xl font-bold text-gray-900 dark:text-white border-b-2 border-indigo-600 dark:border-indigo-400 inline-block mb-8 pb-2">Achievements</h2>
        <div class="space-y-8">
            @foreach($achievements as $achievement)
            <div class="flex">
                <div class="flex-shrink-0 mt-1">
                    <div class="w-10 h-10 bg-indigo-100 dark:bg-indigo-900 rounded-lg flex items-center justify-center">
                        <i class="fas fa-trophy text-indigo-600 dark:text-indigo-400"></i>
                    </div>
                </div>
                <div class="ml-6">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">{{ $achievement->title }}</h3>
                    <p class="text-sm text-indigo-600 dark:text-indigo-400 font-medium mb-2">{{ \Carbon\Carbon::parse($achievement->date)->format('F Y') }}</p>
                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">{{ $achievement->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>

<footer class="bg-gray-900 dark:bg-black text-white py-12 mt-20">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-gray-400">&copy; {{ date('Y') }} {{ $profile->name ?? 'John Doe' }}. All rights reserved.</p>
    </div>
</footer>
@endsection
