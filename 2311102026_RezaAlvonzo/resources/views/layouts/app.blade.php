<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Reza Alvonzo | Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #030303;
            color: #e5e5e5;
            overflow-x: hidden;
        }
        .glow-blob {
            position: fixed;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, rgba(37, 99, 235, 0) 70%);
            filter: blur(80px);
            border-radius: 50%;
            z-index: -1;
            pointer-events: none;
            animation: blob-float 20s infinite alternate;
        }
        @keyframes blob-float {
            0% { transform: translate(0, 0) scale(1); }
            100% { transform: translate(100px, 50px) scale(1.1); }
        }
        .spotlight {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle 400px at var(--x) var(--y), rgba(255,255,255,0.03), transparent 80%);
            z-index: 10;
            pointer-events: none;
        }
        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .gradient-text {
            background: linear-gradient(to right, #fff, #a3a3a3);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="selection:bg-blue-500/30">
    <div class="glow-blob top-[-100px] left-[-100px] bg-blue-600/10"></div>
    <div class="glow-blob bottom-[-100px] right-[-100px] bg-purple-600/10" style="animation-delay: -5s;"></div>
    <div class="spotlight" id="spotlight"></div>

    <nav class="fixed top-0 w-full z-50 glass border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="{{ route('portfolio') }}" class="text-xl font-bold tracking-tighter gradient-text">ALVONZO</a>
            <div class="hidden md:flex space-x-8 text-sm font-medium text-neutral-400">
                <a href="#about" class="hover:text-white transition-colors">About</a>
                <a href="#projects" class="hover:text-white transition-colors">Projects</a>
                <a href="#skills" class="hover:text-white transition-colors">Skills</a>
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-blue-400 hover:text-blue-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="hover:text-white transition-colors">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 text-center text-neutral-500 text-sm">
            <p>&copy; {{ date('Y') }} Reza Alvonzo. Precision Engineered Solutions.</p>
        </div>
    </footer>

    <script>
        const spotlight = document.getElementById('spotlight');
        window.addEventListener('mousemove', e => {
            spotlight.style.setProperty('--x', e.clientX + 'px');
            spotlight.style.setProperty('--y', e.clientY + 'px');
        });
    </script>
</body>
</html>
