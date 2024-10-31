<div class="card">

    <div class="card-body text-white bg-dark">

        <h5 class="card-title">
            <h3>{{ $modo }} Productos</h3>
        </h5>

        <hr color="white">

        <p class="card-text">

        <div class="form-group">
            <label for="">Nombre del Producto: </label>
            <input type="text" class="form-control" name="Nombre"
                value="{{ isset($producto->Nombre) ? $producto->Nombre : '' }}" id="Nombre" required>
            <br>
        </div>

        <div class="form-group">
            <label for="">Descripcion del Producto: </label>
            <input type="text" class="form-control" name="Descripcion"
                value="{{ isset($producto->Descripcion) ? $producto->Descripcion : '' }}" id="Descripcion" required>
            <br>
        </div>

        <div class="form-group">
            <label for="">Precio del Producto: </label>
            <input type="text" class="form-control" name="Precio"
                value="{{ isset($producto->Precio) ? $producto->Precio : '' }}" id="Precio" required>
            <br>
        </div>


        <div class="form-group">
            <label for="">Cantidad del Producto: </label>
            <input type="text" class="form-control" name="Cantidad"
                value="{{ isset($producto->Cantidad) ? $producto->Cantidad : '' }}" id="Cantidad" required>
            <br>

        </div>

        <div class="form-group">
            <label for="">Estado del Producto: </label>
            <select name="estado" class="form-control" value="{{ isset($producto->Estado) ? $producto->Estado : '' }}">
                <option value="Disponible">Disponible</option>
                <option value="Proximamente">Proximamente</option>
                <option value="Agotado">Agotado</option>
            </select>
        </div>


        <div class="form-group">
            <label for="">Imagen del Producto: </label>
            {{-- {{ $producto->Imagen }} --}}
            <br>
            @if (@isset($producto->Imagen))
                <img src="{{ asset('storage' . '/' . $producto->Imagen) }}" width="150" alt="">
            @endif
            <br><br>
            <input type="file" class="form-control" name="Imagen" id="Imagen" value="" required>
        </div>

        <br><br>

        <input type="submit" value="{{ $modo }} Productos" class="btn btn-outline-primary">
        
        <a href="{{ url('producto/') }}" class="btn btn-outline-light">Regresar</a>

        </p>

    </div>

</div>
