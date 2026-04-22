<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Reza Alvonzo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
    </style>
</head>
<body class="bg-slate-50">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-slate-900 text-white flex-shrink-0">
            <div class="p-6">
                <h1 class="text-xl font-bold tracking-tight">ALVONZO <span class="text-blue-500">ADMIN</span></h1>
            </div>
            <nav class="mt-6 px-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.dashboard') ? 'bg-slate-800 text-blue-400' : 'text-slate-400' }}">
                    <span class="mr-3">📊</span> Dashboard
                </a>
                <a href="{{ route('admin.profile') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.profile') ? 'bg-slate-800 text-blue-400' : 'text-slate-400' }}">
                    <span class="mr-3">👤</span> Profile
                </a>
                <a href="{{ route('admin.skills') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.skills') ? 'bg-slate-800 text-blue-400' : 'text-slate-400' }}">
                    <span class="mr-3">🛠️</span> Skills
                </a>
                <a href="{{ route('admin.projects') }}" class="flex items-center px-4 py-3 rounded-lg hover:bg-slate-800 {{ request()->routeIs('admin.projects') ? 'bg-slate-800 text-blue-400' : 'text-slate-400' }}">
                    <span class="mr-3">💼</span> Experience
                </a>
            </nav>
            
            <div class="absolute bottom-0 w-64 p-4 border-t border-slate-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-slate-400 hover:text-white transition-colors">
                        <span class="mr-3">🚪</span> Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 overflow-y-auto">
            <header class="bg-white border-b border-slate-200 h-16 flex items-center justify-between px-8">
                <h2 class="text-sm font-medium text-slate-500 uppercase tracking-widest">@yield('page_title', 'Dashboard')</h2>
                <a href="{{ route('portfolio') }}" target="_blank" class="text-xs font-bold text-blue-600 hover:text-blue-700 uppercase tracking-widest">
                    View Website ↗
                </a>
            </header>
            
            <div class="p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-xl flex items-center">
                        <span class="mr-3">✅</span> {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
