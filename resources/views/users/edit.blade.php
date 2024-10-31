@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center">Asignar un rol al usuario</h3>
        <hr>
        <form action="{{ url('/users/' . $usuario->id) }}" method="post">
            @csrf
            {{ method_field('PATCH') }}
            @include('users.form')
        </form>
    </div>
@endsection
