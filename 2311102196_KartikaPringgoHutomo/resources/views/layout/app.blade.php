<!DOCTYPE html>
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary px-4">
    <span class="navbar-brand">Portfolio</span>
    <a href="/admin" class="btn btn-light">Login</a>
</nav>

<div class="container mt-4">
    @if(session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif
    @yield('content')
</div>
<a href="/logout" class="btn btn-danger">Logout</a>

</body>
</html>