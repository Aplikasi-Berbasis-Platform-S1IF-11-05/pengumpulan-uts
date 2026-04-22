@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex flex-col justify-center px-6 max-w-7xl mx-auto pt-20">
    <div class="space-y-6 max-w-4xl">
        <div class="inline-flex items-center space-x-2 px-3 py-1 rounded-full glass border border-white/10 text-xs font-medium text-blue-400">
            <span class="relative flex h-2 w-2">
                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
            </span>
            <span>Available for innovative industrial solutions</span>
        </div>
        
        <h1 class="text-6xl md:text-8xl font-bold tracking-tighter leading-tight">
            <span class="gradient-text">Architecting the</span><br>
            <span class="text-white">Future of Industry.</span>
        </h1>
        
        <p class="text-xl text-neutral-400 leading-relaxed max-w-2xl">
            {{ $profile->bio }}
        </p>

        <div class="flex flex-wrap gap-4 pt-4">
            <a href="#projects" class="px-8 py-3 bg-white text-black font-semibold rounded-full hover:bg-neutral-200 transition-all transform hover:scale-105">
                View Projects
            </a>
            <a href="#contact" class="px-8 py-3 glass text-white font-semibold rounded-full hover:bg-white/5 transition-all border border-white/10">
                Get in Touch
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-32 px-6 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="text-sm font-bold tracking-widest text-neutral-500 uppercase mb-4">The Vision</h2>
            <p class="text-3xl font-medium leading-snug">
                {{ $profile->about }}
            </p>
        </div>
        <div class="relative">
            <div class="aspect-square glass rounded-3xl overflow-hidden border border-white/5 flex items-center justify-center">
                @if($profile->photo)
                    <img src="{{ asset('storage/' . $profile->photo) }}" alt="{{ $profile->name }}" class="w-full h-full object-cover">
                @else
                    <div class="text-neutral-700 font-bold text-9xl">RA</div>
                @endif
            </div>
            <div class="absolute -bottom-6 -right-6 glass p-6 rounded-2xl border border-white/10">
                <p class="text-xs text-neutral-500 uppercase tracking-widest mb-1">Focus</p>
                <p class="font-bold text-blue-400">{{ $profile->focus }}</p>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-32 px-6 bg-white/[0.01] border-y border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-end mb-16">
            <div>
                <h2 class="text-sm font-bold tracking-widest text-neutral-500 uppercase mb-4">Selected Work</h2>
                <h3 class="text-5xl font-bold">Project Experience</h3>
            </div>
            <div class="text-neutral-500 hidden md:block">01 — 03</div>
        </div>

        <div class="grid md:grid-cols-1 gap-12">
            @foreach($projects as $project)
            <div class="group relative glass rounded-[2.5rem] p-8 md:p-12 border border-white/5 hover:border-white/10 transition-all overflow-hidden">
                <div class="grid md:grid-cols-2 gap-12 relative z-10">
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <span class="text-blue-500 font-mono text-sm">{{ $project->year }}</span>
                            <span class="h-px w-8 bg-neutral-800"></span>
                            <span class="text-neutral-500 text-sm uppercase tracking-widest">{{ $project->role }}</span>
                        </div>
                        <h4 class="text-3xl font-bold group-hover:text-blue-400 transition-colors">{{ $project->title }}</h4>
                        <p class="text-neutral-400 leading-relaxed">{{ $project->description }}</p>
                        
                        <div class="space-y-3">
                            @foreach(explode("\n", $project->highlights) as $highlight)
                                <div class="flex items-start space-x-3 text-sm text-neutral-300">
                                    <span class="text-blue-500 mt-1">▹</span>
                                    <span>{{ trim($highlight, '• ') }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="relative aspect-video rounded-2xl overflow-hidden glass border border-white/5">
                        @if($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="w-full h-full bg-neutral-900/50 flex items-center justify-center">
                                <svg class="w-12 h-12 text-neutral-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- Background Glow -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-600/5 blur-[100px] -mr-32 -mt-32 rounded-full group-hover:bg-blue-600/10 transition-colors"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-32 px-6 max-w-7xl mx-auto">
    <div class="text-center mb-20">
        <h2 class="text-sm font-bold tracking-widest text-neutral-500 uppercase mb-4">Technical Proficiency</h2>
        <h3 class="text-5xl font-bold">Skill Ecosystem</h3>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        @foreach($skills as $category => $items)
        <div class="glass p-8 rounded-3xl border border-white/5">
            <h4 class="text-xl font-bold mb-8 flex items-center">
                <span class="w-2 h-2 bg-blue-500 rounded-full mr-3"></span>
                {{ $category }}
            </h4>
            <div class="space-y-6">
                @foreach($items as $skill)
                <div class="space-y-2">
                    <div class="flex justify-between text-sm">
                        <span class="text-neutral-300 font-medium">{{ $skill->name }}</span>
                        <span class="text-neutral-500">{{ $skill->level }}%</span>
                    </div>
                    <div class="h-1 bg-neutral-900 rounded-full overflow-hidden">
                        <div class="h-full bg-blue-600 rounded-full w-0 transition-all duration-1000" style="width: {{ $skill->level }}%"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-32 px-6 max-w-7xl mx-auto">
    <div class="glass p-12 md:p-20 rounded-[3rem] border border-white/5 text-center relative overflow-hidden">
        <div class="relative z-10">
            <h3 class="text-5xl md:text-7xl font-bold mb-8">Let's build the<br><span class="gradient-text">next big thing.</span></h3>
            <p class="text-xl text-neutral-400 mb-12 max-w-xl mx-auto">
                Currently looking for opportunities in IoT development, AI integration, and Smart Farming architecture.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="mailto:{{ $profile->email }}" class="text-2xl font-bold hover:text-blue-400 transition-colors">
                    {{ $profile->email }}
                </a>
                <span class="hidden md:block text-neutral-800">•</span>
                <a href="tel:{{ $profile->phone }}" class="text-2xl font-bold hover:text-blue-400 transition-colors">
                    {{ $profile->phone }}
                </a>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/10 blur-[120px] rounded-full"></div>
        <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-purple-600/10 blur-[120px] rounded-full"></div>
    </div>
</section>
@endsection
