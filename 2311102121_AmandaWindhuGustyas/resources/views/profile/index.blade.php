<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #3a3a5f);
            color: white;
        }

        .card {
            border-radius: 15px;
        }

        .navbar {
            background: rgba(0,0,0,0.6);
        }
    </style>
</head>
<body>

@php
    $profile = \App\Models\Profile::first();
@endphp

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container">
        <span class="navbar-brand fw-bold">Profile</span>
        <div>
            <a href="/dashboard" class="btn btn-light me-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    <h2 class="mb-4">👤 Data Diri</h2>

    <div class="card p-4 shadow">
        <form method="POST" action="/profile">
            @csrf

            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control mb-3"
                value="{{ $profile->name ?? '' }}" placeholder="Masukkan nama">

            <label class="form-label">Bio</label>
            <textarea name="bio" class="form-control mb-3" rows="3"
                placeholder="Masukkan bio">{{ $profile->bio ?? '' }}</textarea>

            <button class="btn btn-primary w-100">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>

</body>
</html>