<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Wisnu Rananta</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<nav class="bg-white shadow-sm border-b sticky top-0 z-50">
    <div class="max-w-4xl mx-auto px-6 py-4 flex justify-between items-center">
        <span class="font-bold text-xl text-slate-800">Portfolio</span>
        <a href="{{ route('admin.index') }}" class="text-sm font-semibold bg-blue-50 text-blue-600 px-4 py-2 rounded-lg hover:bg-blue-600 hover:text-white transition">
            Admin Login
        </a>
    </div>
</nav>
<body class="bg-slate-50 text-slate-900">

    <div class="max-w-4xl mx-auto py-20 px-6">
        <div class="bg-white rounded-2xl shadow-xl p-10 mb-10 text-center border border-slate-100">
            <div id="photo-container" class="mb-6">
                </div>
            
            <h1 id="profile-name" class="text-4xl font-extrabold mb-2 text-slate-800 italic">Memuat nama...</h1>
            <h2 id="profile-role" class="text-xl text-blue-600 font-bold mb-6 tracking-wide uppercase"></h2>
            
            <div class="max-w-2xl mx-auto">
                <p id="profile-desc" class="text-slate-600 leading-relaxed text-lg italic">
                    Memuat deskripsi diri...
                </p>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl p-10 border border-slate-100">
            <h3 class="text-2xl font-bold mb-8 text-slate-800 border-b-2 border-blue-500 inline-block">Technical Skills</h3>
            <div id="skills-container" class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-6">
                </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/portfolio-data')
                .then(response => response.json())
                .then(data => {
                    const profile = data.profile;
                    const skills = data.skills;

                    // 1. Tampilkan Foto
                    const photoBox = document.getElementById('photo-container');
                    if (profile.photo) {
                        photoBox.innerHTML = `<img src="/storage/${profile.photo}" class="w-44 h-44 rounded-full mx-auto shadow-2xl object-cover border-4 border-white ring-4 ring-blue-50">`;
                    }

                    // 2. Tampilkan Info Profil
                    document.getElementById('profile-name').innerText = profile.name || 'Nama Belum Diatur';
                    document.getElementById('profile-role').innerText = profile.role || 'Web Developer';
                    document.getElementById('profile-desc').innerText = profile.description || 'Deskripsi belum diisi melalui dashboard admin.';

                    // 3. Tampilkan Skills
                    const sc = document.getElementById('skills-container');
                    sc.innerHTML = '';
                    skills.forEach(s => {
                        sc.innerHTML += `
                            <div>
                                <div class="flex justify-between mb-2">
                                    <span class="font-bold text-slate-700">${s.name}</span>
                                    <span class="text-blue-600 font-semibold">${s.percentage}%</span>
                                </div>
                                <div class="w-full bg-slate-100 rounded-full h-3">
                                    <div class="bg-blue-500 h-3 rounded-full transition-all duration-1000" style="width: ${s.percentage}%"></div>
                                </div>
                            </div>
                        `;
                    });
                })
                .catch(err => {
                    console.error(err);
                    document.getElementById('profile-name').innerText = "Gagal mengambil data.";
                });
        });
    </script>
</body>
</html>