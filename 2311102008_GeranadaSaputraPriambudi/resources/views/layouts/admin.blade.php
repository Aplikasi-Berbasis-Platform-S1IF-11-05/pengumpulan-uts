<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f0f2f5;
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
            transform: translate(-2px, -2px);
            box-shadow: 4px 4px 0px #000;
        }
        .flat-input {
            border: 3px solid #000;
            padding: 0.75rem;
            outline: none;
        }
        .flat-input:focus {
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="text-black">

    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r-4 border-black flex flex-col">
            <div class="p-8 border-b-4 border-black">
                <div class="text-xl font-black uppercase tracking-tighter">Admin Panel</div>
            </div>
            <nav class="flex-1 p-6 space-y-4">
                <a href="{{ route('admin.dashboard') }}" class="block p-4 font-bold uppercase tracking-widest text-sm hover:bg-black hover:text-white transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-black text-white' : '' }}">Dashboard</a>
                <a href="{{ route('admin.personal-info.index') }}" class="block p-4 font-bold uppercase tracking-widest text-sm hover:bg-black hover:text-white transition-colors {{ request()->routeIs('admin.personal-info.*') ? 'bg-black text-white' : '' }}">Personal Info</a>
                <a href="{{ route('admin.skills.index') }}" class="block p-4 font-bold uppercase tracking-widest text-sm hover:bg-black hover:text-white transition-colors {{ request()->routeIs('admin.skills.*') ? 'bg-black text-white' : '' }}">Skills</a>
                <a href="{{ route('admin.achievements.index') }}" class="block p-4 font-bold uppercase tracking-widest text-sm hover:bg-black hover:text-white transition-colors {{ request()->routeIs('admin.achievements.*') ? 'bg-black text-white' : '' }}">Achievements</a>
            </nav>
            <div class="p-6 border-t-4 border-black">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flat-btn bg-red-500 text-white py-3 font-bold uppercase text-xs tracking-widest">Logout</button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-12">
            <header class="flex justify-between items-center mb-12">
                <h1 class="text-4xl font-black uppercase tracking-tighter">@yield('title', 'Dashboard')</h1>
                <a href="/" target="_blank" class="font-bold uppercase text-xs tracking-widest border-b-2 border-black">View Site &rarr;</a>
            </header>

            @if(session('success'))
                <div class="mb-8 p-4 bg-green-400 border-4 border-black font-bold uppercase text-sm tracking-widest">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>

</body>
</html>
