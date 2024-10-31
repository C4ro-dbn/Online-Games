<link rel="stylesheet" href="../resources/css/cardspro.css">

@include('layouts.header')

@include('layouts.menu')

<h3 class="text-white" align="center">Carrito</h3>

<hr color="white">

<div class="container p-5 text-white" id="container">
    <div class="col-md-8">
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="imgBOX">
                        <img src="https://cdn-products.eneba.com/resized-products/bwF96S6ImbL-4l9gRyo8Nvd-oWcbGItWyfaMC_0A7sk_350x200_1x-0.jpeg"
                            width="185px">
                    </div>
                    <div class="content">
                        <h5 class="text-white">Days Gone</h5>
                        <p class="text-white">246000</p>
                        <p style="color: #22ABF0">Disponible</p>
                        <button type="submit" name="btn" class="btn btn-outline-light">Comprar</button>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBOX">
                        <img src="https://cdn-products.eneba.com/resized-products/ONMyr8VDJTG1SnBqIEdr8r-ApDIteikekIvtORORVbw_350x200_1x-0.jpeg"
                            width="185px">
                    </div>
                    <div class="content">
                        <h5 class="text-white">Resident Evil Village 8</h5>
                        <p class="text-white">87000</p>
                        <p style="color: #22ABF0">Disponible</p>
                        <button type="submit" name="btn" class="btn btn-outline-light">Comprar</button>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBOX">
                        <img src="https://cdn-products.eneba.com/resized-products/ZCAbdpbW65hZWPJWNWAIYzn2Kyia2OXv3E5Oy9SPPc8_350x200_1x-0.jpeg"
                            width="185px">
                    </div>
                    <div class="content">
                        <h5 class="text-white">Escape From Tarcov</h5>
                        <p class="text-white">423000</p>
                        <p style="color: #22ABF0">Disponible</p>
                        <button type="submit" name="btn" class="btn btn-outline-light">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 text-light">
        @if (count(Cart::getContent()))
            <table class="table table-dark table-striped table-hover text-light">
                <thead>
                    <th align="center">#</th>
                    <th>Nombre</th>
                    <th align="center">Precio</th>
                    <th align="center">Cantidad</th>
                    <th align="center"> --- </th>
                </thead>
                <tbody>
                    @foreach (Cart::getContent() as $item)
                        <tr>
                            <td align="center">{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td align="center">{{ $item->price }}</td>
                            <td align="center">{{ $item->quantity }}</td>
                            <td align="center">
                                <form action="{{ route('cart.removeitem') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr color="white">
            <p align="center">
                Al hacer clic en "Continuar", admito que he leído y aceptado los Términos y condiciones incluida la
                Política de privacidad y los Cookies.
            </p>
            <hr color="white">
            <form action="" method="" align="center">

                <a href="{{ url('/Catalogo-Productos') }}" class="btn btn-dark">Agregar mas</a>

                <a href="{{ url('/Pago') }}" class="btn btn-warning">Continuar con la compra</a>

            </form>
        @else

            <div class="alert alert-light" role="alert">
                <center>
                    <p>El carrito se encuentra vacio</p>
                </center>
            </div>
        @endif
    </div>
</div>

@include('layouts.footer')
