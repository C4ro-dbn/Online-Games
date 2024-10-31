<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class CarritoController extends Controller
{

    public function index(){

        $producto = Producto::all();
        return view('carrito.index',compact('producto'));

    }
}