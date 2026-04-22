<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | {{ $profile->name ?? 'Verdi Pangestu' }}</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-indigo-500 selection:text-white">

    <nav class="fixed w-full z-50 bg-slate-900/70 backdrop-blur-lg border-b border-slate-800 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <div class="text-xl md:text-2xl font-bold text-white tracking-tight flex items-center gap-3">
                    <span class="bg-indigo-500 w-3 h-3 rounded-full animate-pulse"></span>
                    {{ $profile->name ?? 'Portofolio' }}<span class="text-indigo-500">.</span>
                </div>
                
                <div>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="group inline-flex items-center justify-center px-5 py-2.5 text-sm font-semibold text-white transition-all duration-200 bg-indigo-600 border border-transparent rounded-full hover:bg-indigo-700 hover:shadow-lg hover:shadow-indigo-500/30">
                                Dashboard Admin
                                <svg class="w-4 h-4 ml-2 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="group inline-flex items-center justify-center px-5 py-2 text-sm font-medium text-slate-300 transition-all duration-200 border border-slate-700 rounded-full hover:text-white hover:bg-slate-800 hover:border-slate-500">
                                Login Admin 
                                <span class="ml-2 transition-transform duration-200 group-hover:translate-x-1">&rarr;</span>
                            </a>
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <header class="relative bg-slate-900 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden min-h-[90vh] flex items-center border-b border-slate-800">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-indigo-600/20 blur-[120px]"></div>
            <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-blue-600/20 blur-[120px]"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsIDI1NSwgMjU1LCAwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] opacity-50"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <div class="lg:col-span-7 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm font-semibold mb-6">
                        <span class="relative flex h-2.5 w-2.5">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-indigo-500"></span>
                        </span>
                        Frontend Web Developer
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight mb-6 leading-tight">
                        Halo, Saya <br class="hidden lg:block" />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">
                            {{ $profile->name }}
                        </span>
                    </h1>
                    
                    <p class="text-base sm:text-lg text-slate-400 leading-relaxed mb-8 max-w-2xl mx-auto lg:mx-0">
                        {{ $profile->about }}
                    </p>
                    
                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                        <a href="mailto:{{ $profile->email }}" class="flex items-center gap-2 px-6 py-3.5 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-xl transition-all shadow-lg shadow-indigo-500/25 group">
                            <svg class="w-5 h-5 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            {{ $profile->email }}
                        </a>
                        <div class="flex items-center gap-2 px-6 py-3.5 bg-slate-800/50 border border-slate-700 text-slate-300 font-medium rounded-xl cursor-default">
                            <svg class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            {{ $profile->phone }}
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 relative hidden md:block">
                    <div class="absolute inset-0 bg-gradient-to-tr from-indigo-500 to-cyan-500 rounded-3xl transform rotate-3 scale-105 opacity-20 blur-xl"></div>
                    
                    <div class="relative bg-slate-800/90 backdrop-blur-xl border border-slate-700 rounded-2xl p-6 shadow-2xl">
                        <div class="flex gap-2 mb-6 border-b border-slate-700 pb-4">
                            <div class="w-3 h-3 rounded-full bg-rose-500"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-500"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                        </div>
                        
                        <div class="font-mono text-sm leading-relaxed overflow-hidden">
                            <div class="text-slate-400"><span class="text-pink-400 font-bold">const</span> <span class="text-blue-400">developer</span> <span class="text-cyan-400">=</span> {</div>
                            <div class="pl-6 text-slate-300 mt-1">
                                <span class="text-blue-300">name:</span> <span class="text-amber-300">'{{ $profile->name }}'</span>,
                            </div>
                            <div class="pl-6 text-slate-300 mt-1">
                                <span class="text-blue-300">role:</span> <span class="text-amber-300">'Frontend Developer'</span>,
                            </div>
                            <div class="pl-6 text-slate-300 mt-1">
                                <span class="text-blue-300">tools:</span> [
                                <span class="text-amber-300">'Laravel'</span>, <span class="text-amber-300">'Tailwind'</span>
                                ],
                            </div>
                            <div class="pl-6 text-slate-300 mt-1">
                                <span class="text-blue-300">location:</span> <span class="text-amber-300">'Purwokerto'</span>,
                            </div>
                            <div class="pl-6 text-slate-300 mt-1">
                                <span class="text-blue-300">status:</span> <span class="text-emerald-400 font-bold">"Open to Work"</span>
                            </div>
                            <div class="text-slate-400 mt-1">};</div>
                        </div>
                    </div>
                    
                    <div class="absolute -bottom-6 -left-8 bg-slate-800 border border-slate-700 rounded-2xl p-4 shadow-xl flex items-center gap-4 animate-bounce" style="animation-duration: 3s;">
                        <div class="p-3 bg-indigo-500/20 text-indigo-400 rounded-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <div>
                            <div class="text-white font-bold text-sm">Clean Code</div>
                            <div class="text-xs text-slate-400">Enthusiast</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-24 space-y-24">
        
        <section>
            <div class="flex items-center gap-4 mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight">Keahlian & Teknologi</h2>
                <div class="flex-grow h-px bg-slate-200"></div>
            </div>
            
            <div class="flex flex-wrap gap-3">
                @foreach($skills as $skill)
                    <div class="group px-5 py-2.5 bg-white border border-slate-200 rounded-xl shadow-sm hover:shadow-md hover:border-indigo-300 hover:-translate-y-1 transition-all duration-200 cursor-default flex items-center gap-2">
                        <div class="w-2 h-2 rounded-full bg-indigo-500 group-hover:animate-pulse"></div>
                        <span class="font-medium text-slate-700">{{ $skill->name }}</span>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="flex items-center gap-4 mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight">Projek & Pengalaman</h2>
                <div class="flex-grow h-px bg-slate-200"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                @foreach($achievements as $achievement)
                    <div class="bg-white rounded-2xl p-6 md:p-8 border border-slate-200 shadow-sm hover:shadow-xl hover:ring-1 hover:ring-indigo-500/50 transition-all duration-300 flex flex-col h-full group relative overflow-hidden">
                        
                        <div class="absolute top-0 right-0 w-24 h-24 bg-gradient-to-br from-indigo-100 to-transparent rounded-bl-full opacity-50 group-hover:scale-110 transition-transform"></div>
                        
                        <div class="inline-flex items-center px-3 py-1 rounded-full bg-indigo-50 text-indigo-700 text-xs font-bold tracking-wide mb-4 w-fit border border-indigo-100">
                            {{ $achievement->year }}
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-indigo-600 transition-colors">
                            {{ $achievement->title }}
                        </h3>
                        
                        <p class="text-slate-600 leading-relaxed flex-grow text-sm md:text-base">
                            {{ $achievement->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <footer class="bg-white border-t border-slate-200 pt-10 pb-8">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <p class="text-slate-500 text-sm font-medium">
                &copy; {{ date('Y') }} {{ $profile->name }}. All rights reserved.
            </p>
            <div class="flex gap-4">
                <span class="text-sm font-medium text-slate-400 bg-slate-100 px-3 py-1 rounded-full">Dibuat dengan Laravel & Tailwind CSS</span>
            </div>
        </div>
    </footer>

</body>
</html>