<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $traerproductos = \DB::table('productos')
        ->select('productos.id',
        'productos.Nombre',
        'productos.Descripcion',
        'productos.Precio',
        'productos.Cantidad',
        'productos.Imagen',
        'productos.Estado')
        ->orderby('productos.id','DESC')
        ->paginate(5);

        return view('producto.index', ['productos'=>$traerproductos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $DatosProducto = request()->except('_token');

        if($request->hasfile('Imagen')){
            $DatosProducto['Imagen']=$request->file('Imagen')->store('uploads','public');
        }
        
        Producto::insert($DatosProducto);

        // return response()->json($DatosProducto);
        return redirect('producto')->with('mensaje','Producto agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $DatosProducto = request()->except(['_token','_method']);

        if($request->hasfile('Imagen')){
            $producto = Producto::findOrFail($id);
            storage::delete('public/'.$producto->Imagen);
            $DatosProducto['Imagen']=$request->file('Imagen')->store('uploads','public');
        }

        Producto::where('id','=',$id)->update($DatosProducto);

        $producto = Producto::findOrFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::findOrFail($id);

        if( storage::delete('public/'.$producto->Imagen )){
            Producto::destroy($id);
        }

        return redirect('producto')->with('mensaje','Producto Borrado exitosamente');
    }

}
