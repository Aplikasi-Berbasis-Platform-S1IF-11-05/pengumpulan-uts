<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800 font-sans">

    <nav class="bg-indigo-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-5 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Admin Dashboard</h1>
            <div class="flex items-center gap-4">
                <a href="/" target="_blank" class="text-sm bg-indigo-700 hover:bg-indigo-600 px-4 py-2 rounded-lg transition">Lihat Web</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-sm bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition shadow-md">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto p-5 md:p-10">
        
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-8 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 mb-8">
            <h2 class="text-2xl font-bold mb-6 text-slate-800 border-b pb-4">📝 Update Data Diri</h2>
            <form action="/admin/profile/update" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Nama Lengkap</label>
                        <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="w-full border border-slate-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">NIM</label>
                        <input type="text" name="nim" value="{{ $profile->nim ?? '' }}" class="w-full border border-slate-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Jurusan</label>
                        <input type="text" name="major" value="{{ $profile->major ?? '' }}" class="w-full border border-slate-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-600 mb-1">Universitas</label>
                        <input type="text" name="university" value="{{ $profile->university ?? '' }}" class="w-full border border-slate-300 p-2.5 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none">
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-slate-600 mb-1">Tentang Saya (About)</label>
                    <textarea name="about" class="w-full border border-slate-300 p-3 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none" rows="3">{{ $profile->about ?? '' }}</textarea>
                </div>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-6 py-2.5 rounded-lg transition shadow-md">Simpan Perubahan</button>
            </form>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                <h2 class="text-xl font-bold mb-6 text-slate-800 border-b pb-4">🛠 Kelola Skill</h2>
                
                <form action="/admin/skill/store" method="POST" class="mb-8 bg-slate-50 p-4 rounded-xl border border-slate-200">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="text" name="skill_name" class="flex-1 border border-slate-300 p-2 rounded-lg outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Nama Skill (Cth: Laravel)" required>
                        <input type="text" name="category" class="flex-1 border border-slate-300 p-2 rounded-lg outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Kategori (Cth: Web Dev)">
                        <button type="submit" class="bg-slate-800 hover:bg-slate-900 text-white px-5 py-2 rounded-lg transition">Tambah</button>
                    </div>
                </form>

                <div class="space-y-3">
                    @foreach($skills as $skill)
                    <div class="flex justify-between items-center bg-white border border-slate-200 p-3 rounded-lg shadow-sm">
                        <div>
                            <p class="font-semibold text-slate-800">{{ $skill->skill_name }}</p>
                            <p class="text-xs text-slate-500">{{ $skill->category }}</p>
                        </div>
                        <form action="/admin/skill/{{ $skill->id }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-sm bg-red-100 text-red-600 hover:bg-red-200 px-3 py-1 rounded-md transition" onclick="return confirm('Yakin hapus skill ini?')">Hapus</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                <h2 class="text-xl font-bold mb-6 text-slate-800 border-b pb-4">🏆 Kelola Project & Achievement</h2>
                
                <form action="/admin/achievement/store" method="POST" class="mb-8 bg-slate-50 p-4 rounded-xl border border-slate-200 space-y-3">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-3">
                        <input type="text" name="title" class="flex-[3] border border-slate-300 p-2 rounded-lg outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Judul Project" required>
                        <input type="text" name="year" class="flex-[1] border border-slate-300 p-2 rounded-lg outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Tahun (Cth: 2026)">
                    </div>
                    <textarea name="description" class="w-full border border-slate-300 p-2 rounded-lg outline-none focus:ring-2 focus:ring-indigo-500" rows="2" placeholder="Deskripsi singkat..."></textarea>
                    <button type="submit" class="w-full sm:w-auto bg-slate-800 hover:bg-slate-900 text-white px-5 py-2 rounded-lg transition">Tambah Achievement</button>
                </form>

                <div class="space-y-3">
                    @foreach($achievements as $ach)
                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white border border-slate-200 p-4 rounded-lg shadow-sm gap-4">
                        <div class="flex-1">
                            <h4 class="font-bold text-slate-800">{{ $ach->title }} <span class="text-xs font-normal bg-indigo-100 text-indigo-700 px-2 py-0.5 rounded ml-2">{{ $ach->year }}</span></h4>
                            <p class="text-sm text-slate-600 mt-1">{{ $ach->description }}</p>
                        </div>
                        <form action="/admin/achievement/{{ $ach->id }}" method="POST" class="self-end sm:self-center">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-sm bg-red-100 text-red-600 hover:bg-red-200 px-3 py-1 rounded-md transition" onclick="return confirm('Yakin hapus achievement ini?')">Hapus</button>
                        </form>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>