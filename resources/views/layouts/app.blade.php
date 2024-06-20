<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Inventario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Sistema de Inventario</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('productos.index') }}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('movimientos.index') }}">Movimientos</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
