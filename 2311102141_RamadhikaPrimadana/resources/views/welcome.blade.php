<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 text-gray-200 font-sans antialiased selection:bg-cyan-500 selection:text-white">

    <nav class="bg-gray-800/80 backdrop-blur-md border-b border-gray-700 p-5 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 drop-shadow-[0_0_10px_rgba(34,211,238,0.8)]">
                MyPortfolio.
            </h1>
            <a href="{{ route('login') }}" class="text-cyan-400 hover:text-cyan-300 hover:drop-shadow-[0_0_8px_rgba(34,211,238,0.8)] transition-all font-medium">
                Login Admin
            </a>
        </div>
    </nav>

    <section class="p-16 text-center mt-10">
        <h2 class="text-5xl font-extrabold mb-4 text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.2)]">
            {{ $profile->nama_lengkap ?? 'Ramadhika Primadana' }}
        </h2>
        <p class="text-lg text-gray-400 max-w-2xl mx-auto leading-relaxed">
            {{ $profile->deskripsi ?? 'Deskripsi portofolio belum diisi. Silakan tambahkan melalui Dashboard Admin.' }}
        </p>
    </section>

    <section class="p-10 bg-gray-800/30 border-y border-gray-800">
        <h3 class="text-3xl font-bold mb-8 text-center text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Technical Skills</h3>
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            @forelse($skills ?? [] as $skill)
            <div class="bg-gray-800 p-5 rounded-xl border border-gray-700 shadow-lg hover:border-cyan-500/50 transition-colors">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold text-gray-200">{{ $skill->nama_skill }}</span>
                    <span class="text-cyan-400 font-bold">{{ $skill->persentase }}%</span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-3">
                    <div class="bg-gradient-to-r from-cyan-500 to-blue-600 h-3 rounded-full shadow-[0_0_10px_rgba(34,211,238,0.8)]" style="width: {{ $skill->persentase }}%"></div>
                </div>
            </div>
            @empty
            <p class="text-gray-500 col-span-2 text-center italic">Data skill kosong.</p>
            @endforelse
        </div>
    </section>

    <section class="p-10 mb-20">
        <h3 class="text-3xl font-bold mb-8 text-center text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Achievements & Projects</h3>
        <div class="max-w-4xl mx-auto space-y-6">
            @forelse($achievements ?? [] as $ach)
            <div class="p-6 bg-gray-800 shadow-lg rounded-xl border-l-4 border-cyan-500 hover:shadow-[0_0_15px_rgba(34,211,238,0.2)] transition-all">
                <h4 class="font-bold text-xl text-white">{{ $ach->judul }} <span class="text-sm text-cyan-400 font-normal ml-2">({{ $ach->tahun }})</span></h4>
                <p class="text-gray-400 mt-3">{{ $ach->deskripsi }}</p>
            </div>
            @empty
            <p class="text-gray-500 text-center italic">Data achievement kosong.</p>
            @endforelse
        </div>
    </section>

</body>
</html>