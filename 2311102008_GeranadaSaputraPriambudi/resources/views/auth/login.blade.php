<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #F8FAFC;
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
            transform: translate(-4px, -4px);
            box-shadow: 4px 4px 0px #000;
        }
        .flat-input {
            border: 3px solid #000;
            padding: 0.75rem;
            outline: none;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen p-6">

    <div class="flat-card p-10 max-w-md w-full relative">
        <div class="absolute -top-6 -right-6 w-20 h-20 bg-blue-600 border-4 border-black -z-10"></div>
        <div class="absolute -bottom-6 -left-6 w-16 h-16 bg-amber-400 border-4 border-black -z-10"></div>

        <div class="text-center mb-8">
            <h1 class="text-3xl font-black uppercase tracking-tighter">Admin Login</h1>
            <p class="font-bold text-gray-500 uppercase text-xs tracking-widest mt-2">Manage your professional presence</p>
        </div>

        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 border-2 border-red-600 text-red-700 font-bold text-sm">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label for="email" class="font-black uppercase text-[10px] tracking-widest">Email Address</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full flat-input" placeholder="admin@example.com">
            </div>
            <div class="space-y-2">
                <label for="password" class="font-black uppercase text-[10px] tracking-widest">Password</label>
                <input type="password" id="password" name="password" required class="w-full flat-input" placeholder="••••••••">
            </div>
            <div class="pt-2">
                <button type="submit" class="w-full flat-btn bg-black text-white py-4 font-black uppercase tracking-widest">Access Dashboard</button>
            </div>
        </form>

        <div class="mt-8 text-center">
            <a href="/" class="text-xs font-bold uppercase tracking-widest border-b-2 border-black hover:text-blue-600 transition-colors">&larr; Back to Portfolio</a>
        </div>
    </div>

</body>
</html>
