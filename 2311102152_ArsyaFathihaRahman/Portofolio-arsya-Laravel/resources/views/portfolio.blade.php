<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Arsya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Poppins', sans-serif;
        }

        .navbar-custom {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.2);
            border-radius: 15px;
            padding: 10px 20px;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 8px 20px;
            font-weight: 500;
        }

        .btn-dark {
            background: linear-gradient(45deg, #333, #000);
        }

        .btn-danger {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
        }

        .card {
            border-radius: 20px;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.85);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .badge {
            margin: 5px;
            padding: 10px 15px;
            border-radius: 30px;
            font-size: 14px;
        }

        .title {
            font-weight: 700;
            letter-spacing: 1px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="container mt-4">

    <!-- NAVBAR -->
    <div class="d-flex justify-content-between align-items-center navbar-custom mb-4">
        <h5 class="text-white m-0">🌐 My Portfolio</h5>

        <div>
            <a href="/books" class="btn btn-dark btn-custom me-2">Dashboard</a>
            <a href="/logout" class="btn btn-danger btn-custom">Logout</a>
        </div>
    </div>

    <!-- HEADER -->
    <div class="text-center text-white mb-5">
        <h1 class="title">Arsya Fathiha Rahman </h1>
        <p>Mahasiswa Teknik Informatika</p>
    </div>

    <!-- CONTENT -->
    <div class="row">

        <!-- DATA DIRI -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h4>👤 Data Diri</h4>
                <p class="mt-3">
                    Nama: Arsya Fathiha Rahman <br>
                    Kampus: Telkom University <br>
                    Status: Mahasiswa
                </p>
            </div>
        </div>

        <!-- SKILL -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h4>Skill</h4>

                @forelse($data as $d)
                    <span class="badge bg-primary">
                        {{ $d->title }}
                    </span>
                @empty
                    <p>Tidak ada skill</p>
                @endforelse

            </div>
        </div>

        <!-- ACHIEVEMENT -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <h4>🏆 Achievement</h4>

                @forelse($data as $d)
                    <span class="badge bg-success">
                        {{ $d->type }}
                    </span>
                @empty
                    <p>Tidak ada achievement</p>
                @endforelse

            </div>
        </div>

    </div>

</div>

</body>
</html>