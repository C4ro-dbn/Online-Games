<link rel="stylesheet" href="../resources/css/cardspro.css">

@include('layouts.header')

@include('layouts.menu')

<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex">
            <input type="text" class="form-control d-inline" placeholder="Busca tu juego favorito" name="pro"
                value={{ $pro }}>
            <input type="submit" class="btn btn-outline-light" value="Buscar Juego">
        </form>
    </div>
</nav>

<hr color="white">

<div class="container" id="container">
    @foreach ($productos as $producto)
        <div class="card-group">
            <div class="card">
                <div class="imgBOX text-white">
                    <img src="{{ asset('storage' . '/' . $producto->Imagen) }}" width="185px">
                </div>
                <div class="content">
                    <p class="text-white">{{ $producto->Nombre }}</p>
                    <p class="text-white">Precio: $ {{ $producto->Precio }}</p>
                    <h6 style="color: #22ABF0">{{ $producto->Estado }}</h6>

                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                        <button type="submit" name="btn" class="btn btn-outline-light">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

<br>

<div class="container">
    {!! $productos->links() !!}
</div>

<br>

@include('layouts.footer')
