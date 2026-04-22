<!DOCTYPE html>
<html>
<head>
    <title>Skill</title>
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

        .progress {
            height: 10px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container">
        <span class="navbar-brand fw-bold">Skill</span>
        <div>
            <a href="/dashboard" class="btn btn-light me-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">💻 My Skills</h2>

    <!-- FORM -->
    <div class="card p-4 shadow mb-4 text-dark">
        <form method="POST" action="/skills">
            @csrf

            <label>Nama Skill</label>
            <input type="text" name="name" class="form-control mb-2" placeholder="Contoh: Laravel">

            <label>Level</label>
            <input type="text" name="level" class="form-control mb-2" placeholder="Contoh: 80%">

            <button class="btn btn-primary w-100">
                <i class="bi bi-plus-circle"></i> Tambah
            </button>
        </form>
    </div>

    <!-- DATA -->
    @foreach($skills as $skill)
        <div class="mb-4">
            <strong>{{ $skill->name }}</strong>

            <div class="progress">
                <div class="progress-bar bg-info" style="width: {{ $skill->level }}">
                    {{ $skill->level }}
                </div>
            </div>
        </div>
    @endforeach

</div>

</body>
</html>