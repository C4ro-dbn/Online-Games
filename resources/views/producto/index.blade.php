@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>lista de productos</h3>

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

        <a href="{{ url('/menuAdmin') }}">Regresar al tablero inicial</a>
        @role('Admin')
        <a href="{{ url('producto/create') }}" class="btn btn-link">Crear Productos</a>
        @endrole
        
        <hr>

        @role('Admin')
        <table class="table table-striped table-hover table-dark">
            <thead>
                <th>#</th>
                <th>Imagen del juego</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Estado</th>
                <th>Precio</th>
                <th> --- </th>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="{{ asset('storage' . '/' . $producto->Imagen) }}"
                                width="250" alt="">
                        </td>
                        <td>{{ $producto->Nombre }}</td>
                        <td>{{ $producto->Descripcion }}</td>
                        <td>{{ $producto->Cantidad }}</td>
                        <td>{{ $producto->Estado }}</td>
                        <td>{{ $producto->Precio }}</td>
                        <td>
                            <a href="{{ url('/producto/' . $producto->id . '/edit') }}" class="btn btn-outline-primary">
                                Editar
                            </a>
                            &nbsp
                            <form action="{{ url('/producto/' . $producto->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('¿Desea borrar este registro?')"
                                    class="btn btn-outline-danger" value="Borrar" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $productos->links() !!}
        @endrole
    </div>
    
@endsection
