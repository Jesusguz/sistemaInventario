<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use App\Models\Producto;
use Illuminate\Http\Request;

class MovimientoController extends Controller
{
    //Controlador de crear y vista de index
    public function index()
    {
        $movimientos = Movimiento::with('producto')->get(); // Cargar productos relacionados
        return view('movimientos.index', compact('movimientos'));
    }
    //returnar vista con los productos
    public function create()
    {
        $productos = Producto::all();
        return view('movimientos.create', compact('productos'));
    }
//Registrar movimiento
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'tipo' => 'required|in:entrada,salida',
            'cantidad' => 'required|integer|min:1',
            'fecha' => 'required|date',
            'costo' => 'nullable|numeric|min:0|required_if:tipo,entrada',
            'precio' => 'nullable|numeric|min:0|required_if:tipo,salida',
        ]);
        $data = $request->except('_token');
        Movimiento::create($data); // O $producto->update($data);
       // Movimiento::create($request->all());

        return redirect()->route('movimientos.index')->with('success', 'Movimiento registrado exitosamente');
    }
}
