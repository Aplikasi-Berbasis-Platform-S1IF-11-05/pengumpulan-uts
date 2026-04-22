<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Portfolio' }} | Rasyid Nafsyarie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fff;
            color: #000;
        }
        h1, h2, h3, .serif {
            font-family: 'Playfair Display', serif;
        }
        .stark-border {
            border: 2px solid #000;
        }
        .stark-bg {
            background-color: #000;
            color: #fff;
        }
        .text-huge {
            font-size: clamp(3rem, 10vw, 8rem);
            line-height: 0.9;
            letter-spacing: -0.05em;
        }
        .transition-stark {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hover-invert:hover {
            background-color: #000;
            color: #fff;
        }
    </style>
</head>
<body class="antialiased selection:bg-black selection:text-white">
    <nav class="fixed top-0 left-0 w-full z-50 mix-blend-difference px-8 py-6 flex justify-between items-center text-white">
        <a href="/" class="text-xl font-bold tracking-tighter uppercase">RN.Portfolio</a>
        <div class="flex gap-8 uppercase text-xs tracking-widest font-semibold">
            @auth
                <a href="{{ route('admin.dashboard') }}" class="hover:line-through">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:line-through">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="hover:line-through">Admin Access</a>
            @endauth
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-black text-white py-20 px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            <div>
                <h2 class="text-4xl mb-8">Let's build something <br>unapologetically bold.</h2>
                <p class="opacity-50 max-w-xs">Available for collaboration and high-end digital architecture.</p>
            </div>
            <div class="flex flex-col gap-4 text-sm uppercase tracking-widest">
                <a href="#" class="hover:opacity-50">Twitter</a>
                <a href="#" class="hover:opacity-50">LinkedIn</a>
                <a href="#" class="hover:opacity-50">GitHub</a>
                <div class="mt-auto pt-8 opacity-30 text-[10px]">
                    &copy; {{ date('Y') }} Rasyid Nafsyarie. All Rights Reserved.
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
