<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #273746; color: #fff">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="disabled" src="../resources/img/logo.png" width="40" height="35">
        </a>
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'OlineGames') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="{{ url('/Catalogo-Productos') }}">Tienda</a>
                    <a class="nav-item nav-link active" href="{{ url('/Carrito') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        @if (count(Cart::getContent()))
                            <a href="{{ route('cart.checkout') }}">
                                <span class="badge badge-danger">{{ count(Cart::getContent()) }}</span>
                            </a>
                        @endif
                    </a>
                    <a class="nav-item nav-link active" href="{{ url('/Soporte') }}">Soporte</a>
                </div>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <ul class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">
                                {{ __('Iniciar Sesion') }}
                                <i class="fa fa-door-open"></i>
                            </a>
                        </ul>
                    @endif

                    @if (Route::has('register'))
                        <ul class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">
                                {{ __('Registrarse') }}
                                <i class="fa fa-sign-in-alt"></i>
                            </a>
                        </ul>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('perfilUsu') }}">Perfil</a>
                            @role('Admin')
                            <a class="dropdown-item" href="{{ url('menuAdmin') }}">Dashboard</a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar Sesion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<hr color="white">
