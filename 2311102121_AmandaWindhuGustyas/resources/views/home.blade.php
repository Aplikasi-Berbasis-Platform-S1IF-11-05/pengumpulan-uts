<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #3a3a5f);
            color: white;
        }

        .navbar {
            background: rgba(0,0,0,0.6) !important;
            backdrop-filter: blur(10px);
        }

        .hero {
            padding: 100px 0;
        }

        .card {
            border-radius: 15px;
            background: #ffffff;
            color: #000;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .progress {
            height: 10px;
        }
    </style>
</head>
<body>

@php
    $profile = \App\Models\Profile::first();
    $skills = \App\Models\Skill::all();
    $achievements = \App\Models\Achievement::all();
@endphp

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container">
        <span class="navbar-brand fw-bold">My Portfolio</span>
        <a href="/login" class="btn btn-light">Admin</a>
    </div>
</nav>

<!-- HERO -->
<div class="container text-center hero">
    <h1 class="fw-bold display-4">{{ $profile->name ?? 'Nama Kamu' }}</h1>
    <p class="text-light">{{ $profile->bio ?? 'Isi bio kamu di dashboard' }}</p>
</div>

<!-- SKILLS -->
<div class="container mt-5">
    <h3 class="mb-4">💻 My Skills</h3>

    @foreach($skills as $skill)
        <div class="mb-3">
            <strong>{{ $skill->name }}</strong>
            <div class="progress">
                <div class="progress-bar bg-info" style="width: {{ $skill->level }}"></div>
            </div>
        </div>
    @endforeach
</div>

<!-- ACHIEVEMENTS -->
<div class="container mt-5">
    <h3 class="mb-4">🏆 My Achievements</h3>

    <div class="row">
        @foreach($achievements as $a)
            <div class="col-md-4">
                <div class="card p-3 mb-4 shadow">
                    <h5>{{ $a->title }}</h5>
                    <p>{{ $a->description }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>