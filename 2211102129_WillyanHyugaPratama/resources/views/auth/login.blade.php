<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .gradient-bg {
            background: radial-gradient(circle at top left, #6366f1 0%, #a855f7 100%);
        }
    </style>
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-4">
    <div class="max-w-md w-full">
        <div class="text-center mb-10">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-bg text-white shadow-lg shadow-indigo-200 mb-6">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            </div>
            <h1 class="text-3xl font-bold text-slate-900">Welcome Back</h1>
            <p class="text-slate-500 mt-2">Manage your digital presence</p>
        </div>

        <div class="bg-white p-10 rounded-[2.5rem] shadow-xl shadow-slate-200 border border-slate-100">
            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address</label>
                    <input type="email" name="email" class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all" placeholder="admin@willy.com" required>
                    @error('email') <span class="text-red-500 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Password</label>
                    <input type="password" name="password" class="w-full px-5 py-4 rounded-2xl bg-slate-50 border border-slate-200 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10 outline-none transition-all" placeholder="••••••••" required>
                </div>
                <button type="submit" class="w-full py-4 gradient-bg text-white rounded-2xl font-bold hover:opacity-90 transition-opacity shadow-lg shadow-indigo-200">
                    Sign In
                </button>
            </form>
        </div>
        
        <p class="text-center mt-8 text-slate-400 text-sm">
            &larr; <a href="/" class="text-indigo-600 font-semibold hover:underline">Back to Portfolio</a>
        </p>
    </div>
</body>
</html>
