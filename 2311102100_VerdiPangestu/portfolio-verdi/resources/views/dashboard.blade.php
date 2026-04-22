<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-3">
            <div class="p-2 bg-indigo-100 rounded-lg">
                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
            </div>
            <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                {{ __('Dashboard Admin') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            @if(session('success'))
                <div class="flex items-center p-4 mb-4 text-sm text-emerald-800 border border-emerald-200 rounded-xl bg-emerald-50 shadow-sm animate-pulse" role="alert">
                    <svg class="flex-shrink-0 inline w-5 h-5 me-3" fill="currentColor" viewBox="0 0 20 20"><path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/></svg>
                    <span class="font-medium">Berhasil!</span> &nbsp; {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm border border-slate-200 sm:rounded-2xl">
                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                        <div class="p-2 bg-blue-50 text-blue-600 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800">Profil & Data Diri</h3>
                    </div>
                    
                    <form action="{{ route('admin.profile.update') }}" method="POST" class="space-y-5">
                        @csrf
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ $profile->name ?? '' }}" class="block w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-700 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Email</label>
                                <input type="email" name="email" value="{{ $profile->email ?? '' }}" class="block w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-700 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">No. WhatsApp / HP</label>
                                <input type="text" name="phone" value="{{ $profile->phone ?? '' }}" class="block w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-700 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Tentang Saya</label>
                            <textarea name="about" rows="4" class="block w-full rounded-xl border-slate-200 bg-slate-50 px-4 py-3 text-slate-700 focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors resize-none" required>{{ $profile->about ?? '' }}</textarea>
                        </div>
                        <div class="pt-2">
                            <button type="submit" class="inline-flex items-center px-6 py-3 bg-indigo-600 border border-transparent rounded-xl font-semibold text-white hover:bg-indigo-700 focus:bg-indigo-700 active:bg-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 shadow-sm">
                                Simpan Perubahan Profil
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                
                <div class="lg:col-span-5 bg-white shadow-sm border border-slate-200 sm:rounded-2xl p-6 sm:p-8 h-fit">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                        <div class="p-2 bg-amber-50 text-amber-500 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800">Kelola Skill</h3>
                    </div>
                    
                    <form action="{{ route('admin.skill.store') }}" method="POST" class="mb-6 flex gap-2">
                        @csrf
                        <input type="text" name="name" placeholder="Cth: React JS" class="block w-full rounded-xl border-slate-200 bg-slate-50 text-sm focus:bg-white focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                        <button type="submit" class="bg-slate-800 text-white px-5 py-2 rounded-xl text-sm font-semibold hover:bg-slate-700 transition">Tambah</button>
                    </form>

                    <ul class="space-y-3">
                        @foreach($skills as $skill)
                            <li class="flex justify-between items-center bg-white p-3 rounded-xl border border-slate-200 shadow-sm hover:border-indigo-200 transition-colors group">
                                <span class="font-semibold text-slate-700 text-sm flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                                    {{ $skill->name }}
                                </span>
                                <form action="{{ route('admin.skill.destroy', $skill->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="p-1.5 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" onclick="return confirm('Yakin hapus skill ini?')" title="Hapus">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="lg:col-span-7 bg-white shadow-sm border border-slate-200 sm:rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-slate-100">
                        <div class="p-2 bg-emerald-50 text-emerald-600 rounded-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-lg font-bold text-slate-800">Projek & Pengalaman</h3>
                    </div>
                    
                    <form action="{{ route('admin.achievement.store') }}" method="POST" class="mb-8 space-y-4 bg-slate-50 p-5 rounded-2xl border border-slate-200">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Nama Projek</label>
                                <input type="text" name="title" class="block w-full rounded-xl border-slate-200 bg-white text-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Tahun/Semester</label>
                                <input type="text" name="year" placeholder="Cth: 2024" class="block w-full rounded-xl border-slate-200 bg-white text-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1">Deskripsi Singkat</label>
                            <textarea name="description" rows="2" class="block w-full rounded-xl border-slate-200 bg-white text-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-colors resize-none" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-slate-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold hover:bg-slate-700 transition shadow-sm">Simpan Projek Baru</button>
                    </form>

                    <div class="space-y-4">
                        @foreach($achievements as $achievement)
                            <div class="bg-white p-5 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-shadow relative overflow-hidden group">
                                <div class="absolute top-0 left-0 w-1 h-full bg-indigo-500"></div>
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h4 class="font-bold text-slate-800 text-lg">{{ $achievement->title }}</h4>
                                        <span class="inline-block mt-1 text-xs font-bold bg-indigo-50 text-indigo-600 px-2.5 py-0.5 rounded-md border border-indigo-100">{{ $achievement->year }}</span>
                                    </div>
                                    <form action="{{ route('admin.achievement.destroy', $achievement->id) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="p-2 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-lg transition-colors" onclick="return confirm('Yakin hapus projek ini?')" title="Hapus Projek">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        </button>
                                    </form>
                                </div>
                                <p class="text-sm text-slate-600 mt-3 leading-relaxed">{{ $achievement->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>