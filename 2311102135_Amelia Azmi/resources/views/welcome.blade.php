<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Amelia</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50">

<!-- HERO -->
<div class="text-center py-16 bg-gradient-to-r from-pink-400 to-pink-600 text-white shadow-lg">
    
    <!-- FOTO -->
    <img src="https://via.placeholder.com/120" 
         class="mx-auto rounded-full border-4 border-white mb-4">

    <!-- NAMA -->
    <h1 class="text-4xl font-bold">
        {{ optional($profile)->nama ?? 'Amelia Azmi' }}
    </h1>

    <!-- EMAIL -->
    <p class="mt-2">
        {{ optional($profile)->email ?? 'amelia@email.com' }}
    </p>

    <!-- DESKRIPSI -->
    <p class="mt-4 max-w-xl mx-auto">
        {{ optional($profile)->deskripsi ?? 'Mahasiswa Informatika yang sedang belajar Laravel dan Web Development' }}
    </p>
</div>

<!-- SKILLS -->
<div class="max-w-3xl mx-auto mt-10 px-6">
    <h2 class="text-2xl font-bold text-pink-600 mb-4 text-center">
        💻 Skills
    </h2>

    @forelse($skills ?? [] as $skill)
        <div class="bg-white p-4 mb-4 rounded-xl shadow hover:shadow-lg transition">

            <div class="flex justify-between mb-2">
                <span class="font-semibold">
                    {{ $skill->nama_skill ?? '-' }}
                </span>
                <span class="text-pink-500">
                    {{ $skill->level ?? 0 }}%
                </span>
            </div>

            <div class="w-full bg-pink-100 h-3 rounded">
                <div class="bg-pink-500 h-3 rounded"
                     style="width: {{ $skill->level ?? 0 }}%">
                </div>
            </div>

        </div>
    @empty
        <p class="text-center text-gray-400">Belum ada skill</p>
    @endforelse
</div>

<!-- ACHIEVEMENT -->
<div class="max-w-3xl mx-auto mt-10 px-6 mb-16">
    <h2 class="text-2xl font-bold text-pink-600 mb-4 text-center">
        🏆 Achievement
    </h2>

    @forelse($achievements ?? [] as $a)
        <div class="bg-white p-5 mb-4 rounded-xl shadow hover:shadow-lg transition">

            <h3 class="font-bold text-lg text-pink-500">
                {{ $a->judul ?? '-' }}
            </h3>

            <p class="text-gray-600 mt-1">
                {{ $a->deskripsi ?? '-' }}
            </p>

        </div>
    @empty
        <p class="text-center text-gray-400">Belum ada achievement</p>
    @endforelse
</div>

</body>
</html>