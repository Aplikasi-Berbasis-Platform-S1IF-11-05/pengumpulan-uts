<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #1e1e2f, #3a3a5f);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            background: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .login-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3 class="login-title">🔐 Login Admin</h3>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" class="form-control mb-3" placeholder="Email">

        <input type="password" name="password" class="form-control mb-3" placeholder="Password">

        <button class="btn btn-dark w-100">Login</button>
    </form>
</div>

</body>
</html>