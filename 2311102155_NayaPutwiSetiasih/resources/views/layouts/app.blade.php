<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Portfolio Admin')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen flex flex-col text-gray-800">
    <nav class="bg-blue-600">
        <div class="max-w-5xl mx-auto px-6 flex justify-between items-center h-14">
            <a href="{{ url('/') }}" class="text-white font-semibold text-lg">Naya Putwi</a>
            <div class="flex items-center gap-6">
                @auth
                    <a href="{{ route('admin.skills.index') }}"
                        class="text-sm {{ request()->routeIs('admin.skills.*') ? 'text-white font-medium' : 'text-blue-200 hover:text-white' }}">
                        Skills
                    </a>
                    <a href="{{ route('admin.achievements.index') }}"
                        class="text-sm {{ request()->routeIs('admin.achievements.*') ? 'text-white font-medium' : 'text-blue-200 hover:text-white' }}">
                        Achievements
                    </a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-sm text-blue-200 hover:text-white">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-blue-200 hover:text-white">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-1 max-w-5xl w-full mx-auto px-6 py-8">
        @if (session('success'))
            <div class="mb-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded text-sm">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>
</body>

</html>
