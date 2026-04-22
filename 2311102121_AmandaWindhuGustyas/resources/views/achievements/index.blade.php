<!DOCTYPE html>
<html>
<head>
    <title>Achievement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1e1e2f, #3a3a5f);
            color: white;
        }

        .card {
            border-radius: 15px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .navbar {
            background: rgba(0,0,0,0.6);
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark">
    <div class="container">
        <span class="navbar-brand fw-bold">Achievement</span>
        <div>
            <a href="/dashboard" class="btn btn-light me-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="mb-4">🏆 My Achievements</h2>

    <!-- FORM -->
    <div class="card p-4 shadow mb-4 text-dark">
        <form method="POST" action="/achievements">
            @csrf

            <label>Judul</label>
            <input type="text" name="title" class="form-control mb-2" placeholder="Contoh: Sertifikat BNSP">

            <label>Deskripsi</label>
            <textarea name="description" class="form-control mb-2" placeholder="Deskripsi"></textarea>

            <button class="btn btn-success w-100">
                <i class="bi bi-plus-circle"></i> Tambah
            </button>
        </form>
    </div>

    <!-- DATA -->
    <div class="row">
        @foreach($achievements as $a)
            <div class="col-md-4">
                <div class="card p-3 mb-4 shadow text-dark">
                    <h5>{{ $a->title }}</h5>
                    <p>{{ $a->description }}</p>

                    <form action="/achievements/{{ $a->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</div>

</body>
</html>