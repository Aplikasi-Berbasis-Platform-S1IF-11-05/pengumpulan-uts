<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio' }} | Syiva Qaila</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #f0f0f0;
            color: #000;
        }
        .neo-brutalism-card {
            background: white;
            border: 4px solid black;
            box-shadow: 8px 8px 0px 0px rgba(0,0,0,1);
            transition: all 0.2s ease;
        }
        .neo-brutalism-card:hover {
            transform: translate(-2px, -2px);
            box-shadow: 12px 12px 0px 0px rgba(0,0,0,1);
        }
        .neo-brutalism-button {
            border: 3px solid black;
            box-shadow: 4px 4px 0px 0px rgba(0,0,0,1);
            transition: all 0.1s ease;
        }
        .neo-brutalism-button:active {
            transform: translate(2px, 2px);
            box-shadow: 0px 0px 0px 0px rgba(0,0,0,1);
        }
        .bg-red-custom { background-color: #FF0000; }
        .bg-blue-custom { background-color: #0000FF; }
        .bg-yellow-custom { background-color: #FFFF00; }
        
        .shape {
            position: fixed;
            z-index: -1;
            opacity: 0.1;
        }
    </style>
</head>
<body class="overflow-x-hidden">
    <!-- Decorative Shapes -->
    <div class="shape top-10 left-10 w-32 h-32 rounded-full bg-red-custom"></div>
    <div class="shape top-40 right-20 w-48 h-48 bg-blue-custom rotate-12"></div>
    <div class="shape bottom-20 left-1/4 w-24 h-24 bg-yellow-custom -rotate-12"></div>
    <div class="shape top-1/2 right-1/3 w-16 h-16 rounded-full bg-red-custom"></div>

    <nav class="sticky top-0 z-50 bg-white border-b-4 border-black px-6 py-4">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-2xl font-black uppercase tracking-tighter">SYIVA.QAILA</a>
            <div class="flex gap-8 font-bold">
                <a href="#about" class="hover:underline">ABOUT</a>
                <a href="#skills" class="hover:underline">SKILLS</a>
                <a href="#achievements" class="hover:underline">ACHIEVEMENTS</a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-blue-600">DASHBOARD</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600">LOGOUT</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="px-4 py-1 neo-brutalism-button bg-yellow-custom">LOGIN</a>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-black text-white py-12 mt-20">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-6 uppercase">Let's Connect</h2>
            <div class="flex justify-center gap-6 mb-8">
                @if(isset($profile))
                    <a href="{{ $profile->linkedin }}" class="text-xl hover:text-yellow-custom">LINKEDIN</a>
                    <a href="{{ $profile->github }}" class="text-xl hover:text-yellow-custom">GITHUB</a>
                    <a href="mailto:{{ $profile->email }}" class="text-xl hover:text-yellow-custom">EMAIL</a>
                @endif
            </div>
            <p class="opacity-50">© 2025 Syiva Qaila Natasa Sugama. Built with Neo-Brutalism.</p>
        </div>
    </footer>
</body>
</html>
