@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Productos</h1>
        <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Stock ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->stockid }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
