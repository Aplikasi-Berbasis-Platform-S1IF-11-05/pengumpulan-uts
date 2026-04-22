<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Arsya</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Poppins', sans-serif;
        }

        .navbar-custom {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 10px 20px;
        }

        .card-custom {
            border-radius: 20px;
            background: rgba(255,255,255,0.9);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card-custom:hover {
            transform: translateY(-10px);
        }

        .title {
            font-weight: 600;
            color: #333;
        }

        .badge-skill {
            background: linear-gradient(45deg, #ff6f91, #ff9671);
            margin: 5px;
            padding: 10px 15px;
            border-radius: 30px;
        }

        .badge-ach {
            background: linear-gradient(45deg, #6a67ce, #43cea2);
            margin: 5px;
            padding: 10px 15px;
            border-radius: 30px;
        }

        .btn-custom {
            border-radius: 30px;
            padding: 8px 20px;
        }

        .btn-dark {
            background: linear-gradient(45deg, #333, #000);
        }

        .btn-danger {
            background: linear-gradient(45deg, #ff416c, #ff4b2b);
            border: none;
        }
    </style>
</head>

<body>

<div class="container mt-4">

    <!-- NAVBAR -->
    <div class="d-flex justify-content-between align-items-center navbar-custom mb-4">
        <h5 class="text-white m-0"> My Portfolio</h5>

        <div>
            <a href="/books" class="btn btn-dark btn-custom me-2">Dashboard</a>
            <a href="/logout" class="btn btn-danger btn-custom">Logout</a>
        </div>
    </div>

    <!-- HEADER TANPA FOTO -->
    <div class="text-center text-white mb-5">
        <div style="font-size:60px;">✨</div>
        <h1>Arsya Fathiha Rahman</h1>
        <p>Mahasiswa Teknik Informatika</p>
    </div>

    <div class="row">

        <!-- DATA DIRI -->
        <div class="col-md-4 mb-4">
            <div class="card card-custom p-4 text-center">
                <h4 class="title">Data Diri</h4>
                <p class="mt-3">
                    Nama: Arsya Fathiha Rahman <br>
                    Kampus: Telkom University <br>
                    Status: Mahasiswa
                </p>
            </div>
        </div>

        <!-- SKILL -->
        <div class="col-md-4 mb-4">
            <div class="card card-custom p-4 text-center">
                <h4 class="title">Skill</h4>

                @forelse($data as $d)
                    <span class="badge text-white badge-skill">
                        {{ $d->title }}
                    </span>
                @empty
                    <p>Tidak ada skill</p>
                @endforelse

            </div>
        </div>

        <!-- ACHIEVEMENT -->
        <div class="col-md-4 mb-4">
            <div class="card card-custom p-4 text-center">
                <h4 class="title">Achievement</h4>

                @forelse($data as $d)
                    <span class="badge text-white badge-ach">
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