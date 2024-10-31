@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Crear Usuario</h3>
        <hr>
        <form action="{{ url('/users') }}" method="post">
            @csrf
            @include('users.form')
        </form>

    </div>
@endsection
