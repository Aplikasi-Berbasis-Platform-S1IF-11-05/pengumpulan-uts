<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | {{ $profile->name ?? 'User' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-5 py-4 flex justify-between items-center">
            <div class="font-bold text-xl text-indigo-600">MyPortofolio.</div>
            <a href="/login" class="text-sm font-semibold text-slate-600 hover:text-indigo-600 transition">Admin Panel &rarr;</a>
        </div>
    </nav>

    <header class="bg-gradient-to-br from-indigo-900 to-slate-800 text-white py-20 px-5 text-center">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-5xl font-extrabold tracking-tight mb-4 text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">
                {{ $profile->name ?? 'Nama Belum Diatur' }}
            </h1>
            <p class="text-xl text-indigo-200 font-medium mb-2">{{ $profile->major ?? 'Jurusan' }}</p>
            <p class="text-md text-slate-400 mb-8">{{ $profile->university ?? 'Universitas' }} • {{ $profile->nim ?? 'NIM' }}</p>
            
            <div class="bg-white/10 backdrop-blur-md p-6 rounded-2xl border border-white/20 shadow-xl">
                <p class="text-lg text-slate-100 leading-relaxed italic">
                    "{{ $profile->about ?? 'Deskripsi tentang diri saya belum ditambahkan.' }}"
                </p>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto py-16 px-5 grid grid-cols-1 md:grid-cols-12 gap-10">
        
        <section class="md:col-span-4">
            <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-2">
                <span class="w-8 h-1 bg-indigo-500 rounded"></span> Technical Skills
            </h2>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                <div class="flex flex-wrap gap-3">
                    @forelse($skills as $skill)
                        <div class="bg-indigo-50 text-indigo-700 px-4 py-2 rounded-full text-sm font-medium border border-indigo-100 shadow-sm hover:scale-105 transition-transform cursor-default">
                            {{ $skill->skill_name }}
                            <span class="block text-xs text-indigo-400 mt-0.5">{{ $skill->category }}</span>
                        </div>
                    @empty
                        <p class="text-slate-500 text-sm">Belum ada skill yang ditambahkan.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="md:col-span-8">
            <h2 class="text-2xl font-bold text-slate-800 mb-6 flex items-center gap-2">
                <span class="w-8 h-1 bg-blue-500 rounded"></span> Projects & Achievements
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                @forelse($achievements as $ach)
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-bold text-lg text-slate-800 leading-tight">{{ $ach->title }}</h3>
                            <span class="bg-blue-100 text-blue-700 text-xs font-bold px-2 py-1 rounded">{{ $ach->year }}</span>
                        </div>
                        <p class="text-slate-600 text-sm leading-relaxed">{{ $ach->description }}</p>
                    </div>
                @empty
                    <p class="text-slate-500 text-sm col-span-2">Belum ada pencapaian yang ditambahkan.</p>
                @endforelse
            </div>
        </section>

    </main>

    <footer class="bg-slate-900 text-slate-400 text-center py-6 text-sm">
        <p>&copy; {{ date('Y') }} {{ $profile->name ?? 'Portofolio' }}. Built with Laravel & Tailwind CSS.</p>
    </footer>

</body>
</html>