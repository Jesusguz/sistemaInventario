@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Producto</h1>
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="stockid">Stock ID</label>
                <input type="text" name="stockid" id="stockid" class="form-control" value="{{ old('stockid') }}" required>
                @error('stockid')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" id="cantidad" class="form-control" value="0">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="costo">Costo</label>
                <input type="number" name="costo" id="costo" class="form-control" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection
