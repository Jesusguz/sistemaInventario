@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movimientos</h1>
        <a href="{{ route('movimientos.create') }}" class="btn btn-primary mb-3">Registrar Movimiento</a>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Producto</th>
                <th>Tipo</th>
                <th>Cantidad</th>
                <th>Fecha</th>
                <th>Costo/Precio</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($movimientos as $movimiento)
                <tr>
                    <td>{{ $movimiento->producto->nombre }}</td>
                    <td>{{ $movimiento->tipo }}</td>
                    <td>{{ $movimiento->cantidad }}</td>
                    <td>{{ $movimiento->fecha }}</td>
                    <td>{{ $movimiento->tipo === 'entrada' ? $movimiento->costo : $movimiento->precio }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
