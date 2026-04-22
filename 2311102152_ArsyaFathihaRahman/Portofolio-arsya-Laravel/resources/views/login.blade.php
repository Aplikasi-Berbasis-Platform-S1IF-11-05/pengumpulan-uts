<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 350px;
            padding: 30px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            color: #fff;
        }

        .login-title {
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 15px;
            border: none;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .btn-login {
            border-radius: 30px;
            background: linear-gradient(45deg, #000, #333);
            border: none;
            transition: 0.3s;
        }

        .btn-login:hover {
            transform: scale(1.05);
        }

        .alert {
            border-radius: 10px;
            font-size: 14px;
        }

        .logo {
            text-align: center;
            font-size: 40px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="login-card">

    <div class="logo">🔐</div>
    <h3 class="login-title">Login Admin</h3>

    @if(session('error'))
        <div class="alert alert-danger text-center">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

        <button class="btn btn-login w-100 text-white">Login</button>
    </form>

</div>

</body>
</html>