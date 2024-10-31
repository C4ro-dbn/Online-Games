@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="row">

            {{-- menu lateral --}}

            <div class="col-8">
                <h3>Lista del Usuarios</h3>
                <hr color="white">
                @role('Admin')
                    <div class="from-control">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <a href="{{ url('users/create') }}" class="btn btn-outline-primary"> Crear Usuario </a>
                                <a class="navbar-brand"></a>
                                <form class="d-flex">
                                    <input type="text" class="form-control d-inline" placeholder="Ingrese el usuario a buscar"
                                        name="usu" value={{ $usu }}>
                                    <input type="submit" class="btn btn-outline-dark" value="Buscar Juego">
                                </form>
                            </div>
                        </nav>
                        <hr>
                        <div class="alert alert-primary alert-dismissible" role="alert">
                            @if (Session::has('mensaje'))
                                {{ Session::get('mensaje') }}
                            @endif
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <hr>
                    </div>
                    <br>
                    @if ($users->count())
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"> --- </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ url('/users/' . $user->id . '/edit') }}">Editar</a>
                                            <form action="{{ url('/users/' . $user->id) }}" method="post" class="d-inline">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <input type="submit" onclick="return confirm('¿Desea borrar este Usuario?')"
                                                    class="btn btn-outline-danger" value="Borrar">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $users->links() !!}
                    @else
                        <div class="Form-control">
                            <div class="alert alert-warning" role="alert">
                                No se encuentra esa persona
                            </div>
                        </div>
                    @endif
                @endrole
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
                                    <a href="{{ url('/menuAdmin') }}">
                                        <div class="icon">
                                            <i class="fa fa-bars" aria-hidden="true"> Dashboard </i>
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
