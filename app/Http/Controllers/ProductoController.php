<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //Para mostrar vista
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }
// para returna vista de crear
    public function create()
    {
        return view('productos.create');
    }
 //funcion para guardar

    public function store(Request $request)
    {
        $request->validate([
            'stockid' => [
                'required',
                'unique:productos', // El Stock ID debe ser único en la tabla
                'regex:/^[a-zA-Z0-9]+$/', // Solo letras y números
                function ($attribute, $value, $fail) {
                    if (preg_match('/\s/', $value)) {
                        $fail('El Stock ID no debe contener espacios en blanco.');
                    }
                    if (!preg_match('/^[a-zA-Z0-9]+$/', $value)) {
                        $fail('El Stock ID solo debe contener letras y números.');
                    }
                },
            ],
            'nombre' => 'required',
            'precio' => 'required|numeric|min:0',
            'costo' => 'required|numeric|min:0',
            'cantidad' => 'numeric|min:0',
        ]);

        $data = $request->except('_token');
        Producto::create($data);
        //Devolver vista
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente');
    }


    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    // app/Http/Controllers/ProductoController.php (método update)

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'stockid' => [
                'required',
                'regex:/^[a-zA-Z0-9]+$/',
                'unique:productos,stockid,' . $producto->id,
                function ($attribute, $value, $fail) { // Función de validación personalizada
                    if (preg_match('/\s/', $value)) { // Verifica si hay espacios en blanco
                        $fail('El Stock ID no debe contener espacios en blanco.');
                    }
                    if (!preg_match('/^[a-zA-Z0-9]+$/', $value)) { // Verifica si hay caracteres especiales
                        $fail('El Stock ID solo debe contener letras y números.');
                    }
                },
            ],
            'nombre' => 'required',
            'precio' => 'required|numeric|min:0',
            'costo' => 'required|numeric|min:0',
            'cantidad' => 'numeric|min:0',
        ]);

        $data = $request->except('_token');
        $producto->update($data);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente');
    }

    //ELiminacion de registro
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente');
    }
}
