<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Inventario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container mt-4">
    <div class="jumbotron">
        <h1 class="display-4">¡Bienvenido al Sistema de Gestión de Inventario!</h1>
        <p class="lead">Este sistema te permite administrar tus productos y movimientos de inventario de manera eficiente.</p>
        <hr class="my-4">
        <p>Para comenzar, selecciona una opción del menú:</p>
        <button id="toggleMenu" class="btn btn-primary">Mostrar Menú</button>
    </div>

    <div id="menu" class="snackbar" style="display: none;">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ route('productos.index') }}">Productos</a></li>
            <li class="list-group-item"><a href="{{ route('movimientos.index') }}">Movimientos</a></li>
        </ul>
    </div>
</div>

<script>
    document.getElementById('toggleMenu').addEventListener('click', function() {
        var menu = document.getElementById('menu');
        menu.style.display = (menu.style.display === 'none') ? 'block' : 'none';
    });
</script>
</body>
</html>
