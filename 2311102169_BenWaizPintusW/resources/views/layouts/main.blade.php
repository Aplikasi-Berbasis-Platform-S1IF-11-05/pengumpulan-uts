<!DOCTYPE html>
<html lang="en">
    <h1>TEST HOME</h1>
<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
<h1>TEST HOME</h1>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">Portofolionya Ben</a>

        <div>
            <a href="/" class="text-white me-3">Home</a>
            <a href="/skills" class="text-white me-3">Skill</a>
            <a href="/login" class="btn btn-light btn-sm">Admin</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>