<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-indigo-900 text-white flex-shrink-0">
            <div class="p-6">
                <span class="text-2xl font-bold">Admin Panel</span>
            </div>
            <nav class="mt-6">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center py-3 px-6 hover:bg-indigo-800 transition {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-800' : '' }}">
                    <i class="fas fa-home w-5 mr-3"></i> Dashboard
                </a>
                <a href="{{ route('admin.profile') }}" class="flex items-center py-3 px-6 hover:bg-indigo-800 transition {{ request()->routeIs('admin.profile') ? 'bg-indigo-800' : '' }}">
                    <i class="fas fa-user w-5 mr-3"></i> Profile
                </a>
                <a href="{{ route('admin.skills') }}" class="flex items-center py-3 px-6 hover:bg-indigo-800 transition {{ request()->routeIs('admin.skills') ? 'bg-indigo-800' : '' }}">
                    <i class="fas fa-code w-5 mr-3"></i> Skills
                </a>
                <a href="{{ route('admin.achievements') }}" class="flex items-center py-3 px-6 hover:bg-indigo-800 transition {{ request()->routeIs('admin.achievements') ? 'bg-indigo-800' : '' }}">
                    <i class="fas fa-trophy w-5 mr-3"></i> Achievements
                </a>
                <a href="{{ route('admin.password') }}" class="flex items-center py-3 px-6 hover:bg-indigo-800 transition {{ request()->routeIs('admin.password') ? 'bg-indigo-800' : '' }}">
                    <i class="fas fa-key w-5 mr-3"></i> Change Password
                </a>
                <div class="mt-10 px-6">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="w-full text-left flex items-center py-3 text-red-300 hover:text-red-100 transition">
                            <i class="fas fa-sign-out-alt w-5 mr-3"></i> Logout
                        </button>
                    </form>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow-sm py-4 px-8 flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">@yield('header')</h1>
                <a href="{{ route('portfolio') }}" target="_blank" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">
                    View Website <i class="fas fa-external-link-alt ml-1"></i>
                </a>
            </header>
            <main class="p-8">
                @if(session('success'))
                    <div class="mb-6 bg-green-100 border-l-4 border-green-500 text-green-700 p-4 shadow-sm" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
