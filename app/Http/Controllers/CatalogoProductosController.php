<?php

namespace App\Http\Controllers;

use App\Models\CatalogoProductos;
use Illuminate\Http\Request;

use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class CatalogoProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $pro=trim($request->get('pro'));

        $traerproductos = \DB::table('productos')
        ->select('productos.id',
        'productos.Nombre',
        'productos.Descripcion',
        'productos.Precio',
        'productos.Cantidad',
        'productos.Imagen', 
        'productos.Estado')
        ->where('Nombre','LIKE','%'.$pro.'%')
        ->orderby('productos.id','DESC')
        ->paginate(12);

        return view('CatalogoProductos.index',['productos'=>$traerproductos], compact('pro'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CatalogoProductos  $catalogoProductos
     * @return \Illuminate\Http\Response
     */
    public function show(CatalogoProductos $catalogoProductos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CatalogoProductos  $catalogoProductos
     * @return \Illuminate\Http\Response
     */
    public function edit(CatalogoProductos $catalogoProductos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CatalogoProductos  $catalogoProductos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CatalogoProductos $catalogoProductos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CatalogoProductos  $catalogoProductos
     * @return \Illuminate\Http\Response
     */
    public function destroy(CatalogoProductos $catalogoProductos)
    {
        //
    }
}
