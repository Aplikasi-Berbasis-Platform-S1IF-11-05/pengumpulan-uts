<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Fadhil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Fadhil</a>

        <div>
            <a class="nav-link text-white d-inline" href="/">Home</a>
            <a class="nav-link text-white d-inline" href="/skills">Skills</a>
            <a class="nav-link text-white d-inline" href="/achievement">Achievement</a>
        </div>
    </div>
</nav>

<!-- CONTENT -->
<div class="container mt-5">
    @yield('content')
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>