@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            {{-- menu lateral --}}

            <div class="col-8">

                <h1>Dashboard</h1>

            </div>

            {{-- contenido --}}

            <div class="col-4">

                <div class="container">

                    {{-- Menu --}}
                    <div class="card" style="width: 18rem; ">
                        <img src="../resources/img/Per.png" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" align="center">
                                <a href="">{{ Auth::user()->name }}</a>
                            </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="{{ url('users') }}">
                                        <div class="icon">
                                            <i class="fa fa-users" aria-hidden="true"> Personal </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="{{ url('/CrearProductos') }}">
                                        <div class="icon">
                                            <i class="fa fa-gamepad" aria-hidden="true"> Productos </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="{{ url('ventas') }}">
                                        <div class="icon">
                                            <i class="fa fa-envelope" aria-hidden="true"> Notificaciones </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="{{ url('/Catalogo-Productos') }}">
                                        <div class="icon">
                                            <i class="fa fa-th" aria-hidden="true"> Catalogo de Productos </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
