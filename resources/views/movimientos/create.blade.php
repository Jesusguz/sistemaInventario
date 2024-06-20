@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Registrar Movimiento</h1>
        <form action="{{ route('movimientos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="producto_id">Producto</label>
                <select name="producto_id" id="producto_id" class="form-control" required>
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option value="entrada">Entrada</option>
                    <option value="salida">Salida</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" min="1" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div id="costoPrecioGroup" class="form-group">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
