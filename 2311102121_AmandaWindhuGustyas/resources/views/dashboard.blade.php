<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #3a3a5f);
            color: white;
        }

        .navbar {
            background: rgba(0,0,0,0.6);
        }

        .card {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container d-flex justify-content-between">

        <span class="navbar-brand fw-bold">Admin Dashboard</span>

        <div>
            <!-- TOMBOL HOME -->
            <a href="/" class="btn btn-light me-2">
                <i class="bi bi-house"></i> Home
            </a>

            <!-- LOGOUT -->
            <a href="/logout" class="btn btn-danger">
                Logout
            </a>
        </div>

    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <h2 class="mb-4">👋 Selamat Datang</h2>

    <div class="row">

        <!-- PROFILE -->
        <div class="col-md-4">
            <div class="card p-4 shadow text-center text-dark">
                <i class="bi bi-person-circle fs-1 mb-2"></i>
                <h5>Profile</h5>
                <a href="/profile" class="btn btn-primary mt-2">Kelola</a>
            </div>
        </div>

        <!-- SKILL -->
        <div class="col-md-4">
            <div class="card p-4 shadow text-center text-dark">
                <i class="bi bi-code-slash fs-1 mb-2"></i>
                <h5>Skill</h5>
                <a href="/skills" class="btn btn-info mt-2">Kelola</a>
            </div>
        </div>

        <!-- ACHIEVEMENT -->
        <div class="col-md-4">
            <div class="card p-4 shadow text-center text-dark">
                <i class="bi bi-trophy fs-1 mb-2"></i>
                <h5>Achievement</h5>
                <a href="/achievements" class="btn btn-success mt-2">Kelola</a>
            </div>
        </div>

    </div>
</div>

</body>
</html>