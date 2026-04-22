<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RozhakDev') - Rozhak</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            font-family: 'Inter', sans-serif;
            background-color: #fafafa; 
            color: #111;
        }
        .navbar {
            background: #fff;
            border-bottom: 1px solid #eaeaea;
        }
        .navbar-brand { font-weight: 700; letter-spacing: -0.02em; color: #000 !important; }
        .nav-link { color: #666 !important; font-weight: 500; font-size: 0.9rem; }
        .nav-link:hover { color: #000 !important; }
        
        /* Vercel Card Style */
        .v-card {
            background: #fff;
            border: 1px solid #eaeaea;
            border-radius: 8px;
            padding: 24px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }
        .v-card:hover {
            border-color: #000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        
        .btn-dark {
            background: #000;
            border: 1px solid #000;
            border-radius: 6px;
            font-weight: 500;
            padding: 8px 16px;
            font-size: 0.9rem;
        }
        .btn-dark:hover {
            background: #fff;
            color: #000;
        }
        
        footer { padding: 40px 0; border-top: 1px solid #eaeaea; margin-top: 80px; }
    </style>
    @yield('styles')
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">RozhakDev</a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link px-3" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-dark ms-2">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item"><a class="btn btn-dark ms-2" href="{{ route('login') }}">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @if(session('success'))
            <div class="alert alert-success border-0 shadow-sm mb-4">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>

    <footer class="text-center text-muted">
        <div class="container">
            <p class="small mb-0">&copy; {{ date('Y') }} Rozhak. Built with Laravel.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
