<?php

namespace App\Http\Controllers;

use App\Models\MenuAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuAdminController extends Controller
{

    public function index()
    {
        //
        return view('menuAdmin.index');
    }
}