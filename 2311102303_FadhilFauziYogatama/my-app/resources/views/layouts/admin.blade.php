<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            width: 220px;
        }
        .sidebar a {
            padding: 10px;
            display: block;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .active-menu {
            background-color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-dark sidebar p-3">
        <h4 class="text-white mb-4">Admin Panel</h4>

        <a href="/dashboard" class="{{ request()->is('dashboard') ? 'active-menu' : '' }}">
            Dashboard
        </a>

        <a href="/skills" class="{{ request()->is('skills*') ? 'active-menu' : '' }}">
            Skills
        </a>

        <a href="/achievements" class="{{ request()->is('achievements*') ? 'active-menu' : '' }}">
            Achievement
        </a>
    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1">

        <!-- TOPBAR -->
        <nav class="navbar navbar-light bg-white shadow-sm px-4">
            <span class="navbar-brand mb-0 h5">Dashboard</span>

            <div>
                <a href="/" class="btn btn-outline-primary btn-sm">Lihat Website</a>
            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <div class="p-4">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>