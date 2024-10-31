<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $rol = $user->roles->implode('name',', ');
        // dd($rol);

        switch($rol){
            case 'Admin':
                return view('menuAdmin.index', compact('rol'));
                break;

            case 'Comprador':
                return view('perfilUsu.index', compact('rol'));
                break;
        }

        return view('home', compact('rol'));

    }
}
