<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $personalInfo->name }} | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
        }
        .flat-card {
            border: 4px solid #000;
            background: #fff;
        }
        .flat-btn {
            border: 3px solid #000;
            transition: all 0.2s;
        }
        .flat-btn:hover {
            transform: translate(-4px, -4px);
            box-shadow: 4px 4px 0px #000;
        }
        .flat-section {
            border-bottom: 4px solid #000;
        }
        .skill-tag {
            border: 2px solid #000;
            font-weight: 700;
        }
    </style>
</head>
<body class="text-black overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white border-b-4 border-black px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-black tracking-tighter uppercase">GERA.NADA</div>
        <div class="hidden md:flex gap-8 font-bold uppercase text-sm tracking-widest">
            <a href="#about" class="hover:text-blue-600 transition-colors">About</a>
            <a href="#skills" class="hover:text-green-600 transition-colors">Skills</a>
            <a href="#projects" class="hover:text-amber-600 transition-colors">Projects</a>
            <a href="#contact" class="hover:text-purple-600 transition-colors">Contact</a>
        </div>
        @auth
            <a href="{{ route('admin.dashboard') }}" class="flat-btn bg-black text-white px-6 py-2 font-bold uppercase text-xs tracking-widest">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="flat-btn bg-black text-white px-6 py-2 font-bold uppercase text-xs tracking-widest">Admin</a>
        @endauth
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="min-h-screen pt-32 pb-20 px-6 md:px-20 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center bg-[#F1F5F9] flat-section">
        <div class="space-y-8">
            <div class="inline-block bg-blue-600 text-white px-4 py-1 text-sm font-black uppercase tracking-tighter">
                Undergraduate Student
            </div>
            <h1 class="text-6xl md:text-8xl font-black leading-tight tracking-tighter uppercase">
                {{ explode(' ', $personalInfo->name)[0] }} <br>
                <span class="text-blue-600">{{ explode(' ', $personalInfo->name)[1] ?? '' }}</span>
            </h1>
            <p class="text-xl font-medium leading-relaxed max-w-xl text-gray-700">
                {{ $personalInfo->bio }}
            </p>
            <div class="flex gap-4">
                <a href="#projects" class="flat-btn bg-blue-600 text-white px-8 py-4 font-black uppercase tracking-widest">View Projects</a>
                <a href="#about" class="flat-btn bg-white px-8 py-4 font-black uppercase tracking-widest border-4 border-black">About Me</a>
            </div>
        </div>
        <div class="relative">
            <div class="flat-card w-full aspect-square overflow-hidden">
                <img src="{{ asset('images/profile.png') }}" alt="Geranada" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500">
            </div>
            <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-amber-400 border-4 border-black -z-10"></div>
            <div class="absolute -top-6 -left-6 w-48 h-48 bg-green-400 border-4 border-black -z-10"></div>
        </div>
    </section>

    <!-- Stats/Bio Section -->
    <section id="about" class="py-20 px-6 md:px-20 grid grid-cols-1 md:grid-cols-3 gap-8 flat-section bg-white">
        <div class="flat-card p-10 bg-blue-50 space-y-4">
            <div class="text-4xl font-black">06</div>
            <div class="font-bold uppercase tracking-widest text-sm">Semesters in College</div>
            <p class="text-gray-600 font-medium italic">"Active contributor in web development projects."</p>
        </div>
        <div class="flat-card p-10 bg-green-50 space-y-4 md:col-span-2">
            <h2 class="text-3xl font-black uppercase tracking-tighter">Education Background</h2>
            <div class="space-y-6">
                <div class="flex gap-6">
                    <div class="w-12 h-12 bg-black flex-shrink-0"></div>
                    <div>
                        <div class="text-xl font-black">Telkom University</div>
                        <div class="font-bold text-gray-500">Bachelor of Informatics (2023 - Now)</div>
                        <div class="mt-2 inline-block bg-green-400 px-3 py-1 font-black text-sm border-2 border-black">GPA 3.72 / 4.00</div>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="w-12 h-12 bg-black flex-shrink-0"></div>
                    <div>
                        <div class="text-xl font-black">Telkom Purwokerto Vocational School</div>
                        <div class="font-bold text-gray-500">Access Network Engineering (2020 - 2023)</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 px-6 md:px-20 flat-section bg-[#FDF2F2]">
        <h2 class="text-5xl font-black uppercase tracking-tighter mb-16 text-center">My Specialty</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            @foreach($skills as $category => $skillList)
                <div class="space-y-6">
                    <h3 class="text-2xl font-black uppercase tracking-widest border-b-4 border-black inline-block pb-2">
                        {{ $category }}
                    </h3>
                    <div class="flex flex-wrap gap-3">
                        @foreach($skillList as $skill)
                            <div class="skill-tag px-6 py-3 bg-white text-sm uppercase tracking-widest hover:bg-black hover:text-white transition-colors cursor-default">
                                {{ $skill->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 px-6 md:px-20 flat-section bg-white">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <h2 class="text-5xl md:text-7xl font-black uppercase tracking-tighter leading-none">
                Selected <br><span class="text-amber-500">Achievements</span>
            </h2>
            <p class="max-w-md text-xl font-medium text-gray-600">
                A collection of professional certifications and projects that showcase my growth.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            @if(isset($achievements['project']))
                @foreach($achievements['project'] as $project)
                    <div class="flat-card group overflow-hidden">
                        <div class="h-64 bg-gray-200 border-b-4 border-black relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center text-8xl font-black opacity-10 uppercase select-none">Project</div>
                            <div class="absolute inset-0 bg-amber-500/0 group-hover:bg-amber-500/20 transition-all duration-300"></div>
                        </div>
                        <div class="p-8 space-y-4">
                            <div class="flex justify-between items-start">
                                <h3 class="text-2xl font-black uppercase tracking-tighter leading-tight">{{ $project->title }}</h3>
                                <span class="bg-black text-white px-3 py-1 text-xs font-black">{{ $project->date }}</span>
                            </div>
                            <p class="text-gray-600 font-medium">{{ $project->description }}</p>
                            <div class="flex items-center gap-2 font-black uppercase text-sm tracking-widest group-hover:gap-4 transition-all">
                                <span>Learn More</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Certifications Grid -->
        <div class="mt-20">
            <h3 class="text-3xl font-black uppercase tracking-tighter mb-8">Professional Certifications</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if(isset($achievements['certification']))
                    @foreach($achievements['certification'] as $cert)
                        <div class="flat-card p-8 hover:bg-blue-600 hover:text-white transition-colors group">
                            <div class="w-12 h-12 bg-black mb-6 group-hover:bg-white transition-colors"></div>
                            <h4 class="text-xl font-black uppercase leading-tight mb-4">{{ $cert->title }}</h4>
                            <div class="flex flex-col gap-1 text-sm font-bold uppercase tracking-widest opacity-60">
                                <span>{{ $cert->organization }}</span>
                                <span>{{ $cert->date }}</span>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Experience & Community -->
    <section class="py-20 px-6 md:px-20 grid grid-cols-1 lg:grid-cols-2 gap-20 flat-section bg-[#F1F5F9]">
        <div class="space-y-12">
            <h2 class="text-5xl font-black uppercase tracking-tighter">Work <br>Experience</h2>
            <div class="space-y-8">
                @if(isset($achievements['work_experience']))
                    @foreach($achievements['work_experience'] as $work)
                        <div class="relative pl-12 border-l-4 border-black py-4">
                            <div class="absolute -left-4 top-6 w-8 h-8 bg-black border-4 border-black"></div>
                            <div class="text-2xl font-black uppercase">{{ $work->title }}</div>
                            <div class="font-bold text-blue-600 mb-4">{{ $work->organization }} | {{ $work->date }}</div>
                            <p class="text-gray-600 font-medium leading-relaxed">{{ $work->description }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="space-y-12">
            <h2 class="text-5xl font-black uppercase tracking-tighter">Community <br>Engagement</h2>
            <div class="space-y-8">
                @if(isset($achievements['community']))
                    @foreach($achievements['community'] as $comm)
                        <div class="flat-card p-10 bg-white">
                            <div class="text-xl font-black uppercase mb-2">{{ $comm->title }}</div>
                            <div class="font-bold text-green-600 mb-4">{{ $comm->organization }} | {{ $comm->date }}</div>
                            <p class="text-gray-600 font-medium">{{ $comm->description }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Contact/Footer -->
    <footer id="contact" class="py-32 px-6 md:px-20 bg-black text-white">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-none mb-12">
                    Let's <br>Work <span class="text-blue-500">Together</span>
                </h2>
                <div class="space-y-6 text-xl font-bold">
                    <a href="mailto:{{ $personalInfo->email }}" class="block hover:text-blue-400 transition-colors">{{ $personalInfo->email }}</a>
                    <a href="tel:{{ $personalInfo->phone }}" class="block hover:text-blue-400 transition-colors">{{ $personalInfo->phone }}</a>
                    <a href="https://{{ $personalInfo->linkedin }}" class="block hover:text-blue-400 transition-colors uppercase tracking-widest">LinkedIn Profile</a>
                </div>
            </div>
            <div class="flat-card p-12 bg-white text-black space-y-8">
                <h3 class="text-3xl font-black uppercase tracking-tighter">Quick Inquiry</h3>
                <form class="space-y-6">
                    <div class="space-y-2">
                        <label class="font-black uppercase text-xs tracking-widest">Name</label>
                        <input type="text" class="w-full border-4 border-black p-4 focus:bg-blue-50 outline-none" placeholder="Your Name">
                    </div>
                    <div class="space-y-2">
                        <label class="font-black uppercase text-xs tracking-widest">Email</label>
                        <input type="email" class="w-full border-4 border-black p-4 focus:bg-blue-50 outline-none" placeholder="your@email.com">
                    </div>
                    <div class="space-y-2">
                        <label class="font-black uppercase text-xs tracking-widest">Message</label>
                        <textarea class="w-full border-4 border-black p-4 focus:bg-blue-50 outline-none h-32" placeholder="Tell me about your project"></textarea>
                    </div>
                    <button class="flat-btn bg-black text-white w-full py-4 font-black uppercase tracking-widest">Send Message</button>
                </form>
            </div>
        </div>
        <div class="mt-32 pt-12 border-t-4 border-white/20 flex flex-col md:flex-row justify-between gap-8 opacity-60 font-bold uppercase text-xs tracking-widest">
            <div>&copy; 2026 GERANADA SAPUTRA PRIAMBUDI. ALL RIGHTS RESERVED.</div>
            <div class="flex gap-8">
                <span>Made with Laravel</span>
                <span>Flat Design Philosophy</span>
            </div>
        </div>
    </footer>

</body>
</html>
