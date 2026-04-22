<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brian Farrel Evandhika</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        blue: {
                            50: '#f3f6fc',
                            100: '#e1e8f7',
                            200: '#c5d5ef',
                            300: '#9dbce3',
                            600: '#233e85',
                            700: '#1A2C68',
                            800: '#142252',
                            900: '#1E3A8A',
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-800 antialiased font-sans">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <span class="font-extrabold text-2xl text-blue-900 tracking-tight">Portfolio</span>
                </div>
                <div class="flex items-center gap-6">
                    <div class="hidden md:flex gap-6 font-bold text-sm">
                        <a href="#" class="text-blue-600">About</a>
                    </div>
                    @if (Route::has('login'))
                        <div class="ml-4 md:border-l pl-4 border-gray-200">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-sm font-bold text-gray-400 hover:text-blue-600 transition">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm font-bold text-gray-400 hover:text-blue-600 transition">Log in</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-white overflow-hidden">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pt-10 pb-20">
            <div class="flex flex-col-reverse md:flex-row items-center gap-12">
                <div class="w-full md:w-1/2 z-10 text-left">
                    <p class="text-blue-600 font-bold text-lg mb-2">Hi, I'm {{ $profile->name ?? 'John Doe' }}</p>
                    <h1 class="text-4xl lg:text-5xl font-extrabold text-blue-600 leading-tight mb-4 pr-4">{{ $profile->role ?? 'Developer' }}</h1>
                    <p class="text-gray-400 text-base mb-8 leading-relaxed max-w-lg font-medium text-justify">
                        {{ $profile->about ?? 'Deskripsi singkat belum ditambahkan.' }}
                    </p>
                    <div class="flex flex-wrap gap-4 mb-8">
                        <a href="{{ $profile->email ? 'mailto:'.$profile->email : '#' }}" class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-3 px-8 rounded shadow-lg shadow-blue-200 transition text-sm">Email</a>
                    </div>
                    <div class="flex gap-4 text-gray-400 text-xl">
                        @if($profile->linkedin)<a href="{{ $profile->linkedin }}" class="hover:text-blue-600 transition"><i class="fab fa-linkedin"></i></a>@endif
                        @if($profile->github)<a href="{{ $profile->github }}" class="hover:text-blue-600 transition"><i class="fab fa-github"></i></a>@endif
                        @if($profile->telegram)<a href="{{ $profile->telegram }}" class="hover:text-blue-600 transition"><i class="fab fa-telegram"></i></a>@endif
                        @if($profile->web)<a href="{{ $profile->web }}" class="hover:text-blue-600 transition"><i class="fas fa-globe"></i></a>@endif
                        @if($profile->whatsapp)<a href="{{ $profile->whatsapp }}" class="hover:text-blue-600 transition"><i class="fab fa-whatsapp"></i></a>@endif
                    </div>
                </div>
                <div class="w-full md:w-1/2 relative flex justify-center items-center h-80 lg:h-96">
                    <div class="absolute w-80 h-80 lg:w-96 lg:h-96 bg-blue-100 rounded-full top-0 right-0 -translate-y-4 translate-x-12 z-0 scale-125 opacity-70 blur-2xl"></div>
                    <div class="relative w-72 h-72 lg:w-80 lg:h-80 rounded-full overflow-hidden z-10 shadow-[0_10px_30px_rgba(30,58,138,0.4)] block border-4 border-white">
                        <img src="{{ asset('images/profile.jpeg') }}" onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name=Brian+Farrel&background=1e3a8a&color=fff&size=500'" alt="Brian Farrel" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="absolute w-12 h-12 bg-blue-900 rounded-full top-4 left-4 lg:left-12 shadow-lg shadow-blue-300 z-20" style="background: linear-gradient(135deg, #4a75c4, #1E3A8A);"></div>
                    <div class="absolute w-24 h-24 bg-blue-200 rounded-full opacity-80 bottom-0 left-0 lg:left-8 -ml-4 z-20 mix-blend-multiply"></div>
                    <div class="absolute w-16 h-16 bg-blue-900 rounded-full right-0 lg:-right-4 top-1/2 z-20 opacity-90 shadow-lg shadow-blue-300"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="mb-20">
            <h3 class="text-3xl font-extrabold text-blue-900 mb-8">Pengalaman & Proyek</h3>
            
            <div class="space-y-6">
                @forelse($experiences as $experience)
                <div class="{{ !$loop->first ? 'border-t pt-6' : '' }}">
                    <div class="flex justify-between items-center mb-1">
                        <h4 class="text-lg font-bold text-gray-800">{{ $experience->company }}</h4>
                        <span class="text-sm font-semibold text-gray-500">{{ $experience->year }}</span>
                    </div>
                    <p class="text-blue-600 font-medium mb-2">{{ $experience->role }}</p>
                    <p class="text-sm text-gray-500 mb-2 text-justify">{{ $experience->description }}</p>
                    @if($experience->tech_stack)
                    <p class="text-xs font-semibold bg-blue-50 text-blue-700 px-3 py-1 rounded-full inline-block border border-blue-100">Tech Stack: {{ $experience->tech_stack }}</p>
                    @endif
                </div>
                @empty
                <p class="text-gray-500 italic">Belum ada pengalaman yang ditambahkan.</p>
                @endforelse
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mb-20">
            <div>
                <h3 class="text-3xl font-extrabold text-blue-900 mb-8">Informasi Pribadi</h3>
                <ul class="space-y-3 text-sm text-gray-600 mb-8 border-b pb-6">
                    <li class="flex justify-between"><span class="font-bold text-gray-400">NIM</span> <span>{{ $profile->nim ?? '-' }}</span></li>
                    <li class="flex justify-between"><span class="font-bold text-gray-400">Program Studi</span> <span>{{ $profile->program_studi ?? '-' }}</span></li>
                    <li class="flex justify-between"><span class="font-bold text-gray-400">Universitas</span> <span class="text-right">{{ $profile->universitas ?? '-' }}</span></li>
                    <li class="flex justify-between"><span class="font-bold text-gray-400">IPK</span> <span class="font-semibold text-blue-600">{{ $profile->ipk ?? '-' }}</span></li>
                </ul>

                <h3 class="text-xl font-extrabold text-blue-900 mb-4 border-b pb-2">Sertifikasi</h3>
                <ul class="space-y-4 text-sm text-gray-600 text-justify mb-8">
                    @forelse($certifications as $cert)
                    <li class="{{ !$loop->first ? 'pt-4 border-t' : '' }}"><strong class="text-gray-800">{{ $cert->name }}</strong> @if($cert->year) ({{ $cert->year }}) @endif</li>
                    @empty
                    <li><span class="italic text-gray-500">Belum ada data sertifikasi.</span></li>
                    @endforelse
                </ul>

                <h3 class="text-xl font-extrabold text-blue-900 mb-4 border-b pb-2">Organisasi</h3>
                <ul class="space-y-4 text-sm text-gray-600 text-justify">
                    @forelse($organizations as $org)
                    <li class="{{ !$loop->first ? 'pt-4 border-t' : '' }}"><strong class="text-gray-800">{{ $org->name }}</strong> @if($org->year) ({{ $org->year }}) @endif</li>
                    @empty
                    <li><span class="italic text-gray-500">Belum ada data organisasi.</span></li>
                    @endforelse
                </ul>
            </div>
            <div>
                <h3 class="text-3xl font-extrabold text-blue-900 mb-8">My Skills</h3>
                <ul id="skills-list" class="grid grid-cols-1 gap-4 mb-8">
                    <li class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex justify-between items-center transition hover:shadow-md hover:border-blue-300">
                        <span class="font-bold text-gray-800">Web Development</span>
                        <span class="text-sm font-extrabold bg-blue-200 text-blue-800 py-1 px-3 rounded-full">92%</span>
                    </li>
                    <li class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex justify-between items-center transition hover:shadow-md hover:border-blue-300">
                        <span class="font-bold text-gray-800">AI & Automation</span>
                        <span class="text-sm font-extrabold bg-blue-200 text-blue-800 py-1 px-3 rounded-full">86%</span>
                    </li>
                    <li class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex justify-between items-center transition hover:shadow-md hover:border-blue-300">
                        <span class="font-bold text-gray-800">UI/UX Design</span>
                        <span class="text-sm font-extrabold bg-blue-200 text-blue-800 py-1 px-3 rounded-full">74%</span>
                    </li>
                    <li class="bg-blue-50 border border-blue-100 rounded-2xl p-4 flex justify-between items-center transition hover:shadow-md hover:border-blue-300">
                        <span class="font-bold text-gray-800">Database Management</span>
                        <span class="text-sm font-extrabold bg-blue-200 text-blue-800 py-1 px-3 rounded-full">71%</span>
                    </li>
                </ul>

                <h3 class="text-xl font-extrabold text-blue-900 mb-4 border-b pb-2">Tools & Software</h3>
                <div class="flex flex-wrap gap-2 text-sm font-semibold text-gray-600">
                    <span class="bg-white px-5 py-2 rounded-full border border-gray-200 shadow-sm hover:text-blue-600 hover:border-blue-300 transition cursor-default">Figma</span>
                    <span class="bg-white px-5 py-2 rounded-full border border-gray-200 shadow-sm hover:text-blue-600 hover:border-blue-300 transition cursor-default">Adobe Suite</span>
                    <span class="bg-white px-5 py-2 rounded-full border border-gray-200 shadow-sm hover:text-blue-600 hover:border-blue-300 transition cursor-default">VS Code</span>
                    <span class="bg-white px-5 py-2 rounded-full border border-gray-200 shadow-sm hover:text-blue-600 hover:border-blue-300 transition cursor-default">Git</span>
                    <span class="bg-white px-5 py-2 rounded-full border border-gray-200 shadow-sm hover:text-blue-600 hover:border-blue-300 transition cursor-default">n8n / Zapier</span>
                </div>
            </div>
        </div>
        <div class="mb-20">
            <h3 class="text-3xl font-extrabold text-blue-900 mb-8">Problem Solving & Target</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm">
                    <h4 class="font-extrabold text-blue-700 mb-4 flex items-center gap-2">
                        Problem Solving
                    </h4>
                    <ul class="list-disc list-outside ml-4 space-y-3 text-sm text-gray-600">
                        <li><strong>Partisipasi:</strong> Pengingat personal & variasi kegiatan agar hidup.</li>
                        <li><strong>Komunikasi:</strong> Pertemuan berkala & transparansi informasi.</li>
                        <li><strong>Manajemen Waktu:</strong> Perencanaan prioritas & to-do list terstruktur.</li>
                        <li><strong>Konflik:</strong> Diskusi terbuka & musyawarah via voting.</li>
                    </ul>
                </div>
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 shadow-sm">
                    <h4 class="font-extrabold text-blue-700 mb-4 flex items-center gap-2">
                        Target & Visi Karier
                    </h4>
                    <ul class="space-y-4 text-sm text-gray-600">
                        <li class="flex border-b border-gray-200 pb-3"><strong class="w-24 shrink-0 text-gray-800">Pendek:</strong> <span>Lulus cumlaude, mendalami Full Stack & AI via kursus riil.</span></li>
                        <li class="flex border-b border-gray-200 pb-3"><strong class="w-24 shrink-0 text-gray-800">Menengah:</strong> <span>Berkarier di Full Stack Engineer & Integrasi Fitur AI (Sertifikasi).</span></li>
                        <li class="flex pt-1"><strong class="w-24 shrink-0 text-gray-800">Panjang:</strong> <span>Membangun ekosistem AI inklusi keuangan Indonesia.</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
