<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 p-4 md:p-8">

    <div class="max-w-2xl mx-auto">
        
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Admin Dashboard</h1>
            <a href="/" class="text-blue-600 hover:underline font-medium">Kembali ke Website</a>
        </div>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 mb-4 rounded border border-green-300">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="bg-red-200 text-red-800 p-3 mb-4 rounded border border-red-300">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white p-6 rounded shadow mb-6">
            <h2 class="text-lg font-bold border-b pb-2 mb-4">Update Identitas Diri</h2>
            
            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-4">
                    <label class="block font-medium mb-1">Foto Profil</label>
                    @if($profile && $profile->photo)
                        <img src="{{ asset('storage/' . $profile->photo) }}" class="w-20 h-20 object-cover mb-2 border rounded">
                    @endif
                    <input type="file" name="photo" class="w-full border p-2 rounded bg-gray-50">
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="w-full border p-2 rounded bg-gray-50" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Role / Bidang</label>
                    <input type="text" name="role" value="{{ $profile->role ?? '' }}" class="w-full border p-2 rounded bg-gray-50" required>
                </div>

                <div class="mb-4">
                    <label class="block font-medium mb-1">Deskripsi Bio</label>
                    <textarea name="description" rows="4" class="w-full border p-2 rounded bg-gray-50" required>{{ $profile->description ?? '' }}</textarea>
                </div>

                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full font-bold">Simpan Profil</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded shadow mb-10">
            <h2 class="text-lg font-bold border-b pb-2 mb-4">Manajemen Skill</h2>
            
            <form action="{{ route('admin.skill.add') }}" method="POST" class="mb-6">
                @csrf
                <div class="flex gap-4 mb-4">
                    <div class="flex-1">
                        <label class="block font-medium mb-1">Nama Skill</label>
                        <input type="text" name="name" placeholder="Contoh: Laravel" class="w-full border p-2 rounded bg-gray-50" required>
                    </div>
                    <div class="w-1/3">
                        <label class="block font-medium mb-1">Persen (%)</label>
                        <input type="number" name="percentage" min="1" max="100" placeholder="90" class="w-full border p-2 rounded bg-gray-50" required>
                    </div>
                </div>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 w-full font-bold">Tambah Skill</button>
            </form>

            <div class="bg-gray-50 p-4 rounded border">
                <h3 class="font-bold mb-2 text-sm text-gray-600 uppercase">Daftar Skill Saat Ini:</h3>
                @if(count($skills) > 0)
                    <ul class="list-disc pl-5">
                        @foreach($skills as $skill)
                            <li class="mb-1">{{ $skill->name }} - <strong>{{ $skill->percentage }}%</strong></li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-gray-500 text-sm italic">Belum ada skill yang ditambahkan.</p>
                @endif
            </div>
        </div>

    </div>

</body>
</html>