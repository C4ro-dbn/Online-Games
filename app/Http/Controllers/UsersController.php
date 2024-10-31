<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        /* Filtro */
        $usu = trim($request->get('usu'));
     
        $traerusuarios = \DB::table('users')
        ->select('users.id',
        'users.name',
        'users.email',
        'users.password')
        ->where('name','LIKE','%'.$usu.'%')
        ->orderby('users.id','DESC')
        ->paginate(5);

        return view('users.index', ['users'=>$traerusuarios], compact('usu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roles = Role ::all()->pluck('name','id');
        return view('users.create', compact('roles'));
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
        $datosEmpleados = request()->except('_token');
        user::insert($datosEmpleados);
        return redirect('users')->with('mensaje','Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $usuario = user::findOrFail($id);
        return view('users.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleados = request()->except(['_token','_method']);
        user::where('id','=',$id)->update($datosEmpleados);

        $usuario = user::findOrFail($id);
        // return view('users', compact('usuario'));
        return redirect('users')->with('mensaje','Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        user::destroy($id);
        return redirect('/users')->with('mensaje','Usuario eliminado exitosamente'); 
    }
}
