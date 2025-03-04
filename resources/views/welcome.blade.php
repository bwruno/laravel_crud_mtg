
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-color: #212121;">
    <div class="card p-4" style="box-shadow: 0 0 5px #475151; background-color: #222; border-color: #555; width: 400px;">
        <h2 class="text-center mb-4" style="color: #fff;">Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}" style="color: #bebebe;">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Usuario</label>
                <input style="background-color: #333; border-color: #555; color: #fff;" type="text" name="user" id="user" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input style="background-color: #333; border-color: #555; color: #fff;" type="password" name="password" id="password" class="form-control" required>
            </div>
            <button style="background-color: darkcyan; border-color: #056161;" type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>

        @if(session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error de autenticación',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif
    </div>
</body>
</html>
