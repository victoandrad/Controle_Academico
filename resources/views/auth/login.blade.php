<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center bg-light">

<div class="card shadow p-4" style="min-width: 350px;">
    <h4 class="mb-4 text-center fw-bold">Login</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro:</strong> {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required autofocus placeholder="Email">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary w-100">Confirm</button>
    </form>
</div>

</body>
</html>
