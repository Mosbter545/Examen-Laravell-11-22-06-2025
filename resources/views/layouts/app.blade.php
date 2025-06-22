<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/cursos') }}">Gestión de Cursos</a>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('contenido')
    </div>

    <footer class="text-center text-muted mt-5">
        <small>&copy; {{ date('Y') }} Gestión de Cursos - Laravel</small>
    </footer>
</body>
</html>
