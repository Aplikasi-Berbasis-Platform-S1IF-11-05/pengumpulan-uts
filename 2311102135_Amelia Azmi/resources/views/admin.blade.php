<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="flex">

    <!-- Sidebar -->
    <div class="w-64 bg-gradient-to-b from-pink-500 to-pink-700 text-white min-h-screen p-6">
        <h2 class="text-2xl font-bold mb-8">Admin</h2>

        <ul class="space-y-4">
            <li><a href="/dashboard" class="hover:underline">Dashboard</a></li>
            <li><a href="/profile" class="hover:underline">Profile</a></li>
            <li><a href="/skill" class="hover:underline">Skill</a></li>
            <li><a href="/achievement" class="hover:underline">Achievement</a></li>
        </ul>

        <form method="POST" action="{{ route('logout') }}" class="mt-10">
            @csrf
            <button class="bg-white text-pink-600 px-4 py-2 rounded w-full">
                Logout
            </button>
        </form>
    </div>

    <!-- Content -->
    <div class="flex-1 p-8">
        @yield('content')
    </div>

</div>

</body>
</html>