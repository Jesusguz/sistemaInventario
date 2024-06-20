<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Vista de bienvenida
    public function index()
    {
        return view('welcome');
    }
}
