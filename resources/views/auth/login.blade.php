@extends('layouts.app')

<link rel="stylesheet" href="../resources/css/login.css">

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="login-box">
                <div class="card-header" align="center">
                    <h3>{{ __('Iniciar Sesion') }}</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        <img src="../resources/img/logo.png" alt="" class="avatar">
                        @csrf
                        <div class="row">
                            <label for="email"
                                class=" col-form-label text-md-right">{{ __('Correo Electronico') }}</label>

                            <div class="">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-danger btn-block">
                                {{ __('Iniciar Sesion') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

<style>
    
    body {
        background: rgba(0, 0, 0, 0.878);
        margin: 0;
        padding: 0;
        background: url('../resources/img/wallp1.jpg') no-repeat center top;
        background-size: cover;
        font-family: Arial, Helvetica, sans-serif;
        height: 100vh;
    }

</style>
