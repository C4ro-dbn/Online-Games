<div class="card">

    <div class="card-body text-white bg-dark">

        <h5 class="card-title">
            <h3><?php echo e($modo); ?> Productos</h3>
        </h5>

        <hr color="white">

        <p class="card-text">

        <div class="form-group">
            <label for="">Nombre del Producto: </label>
            <input type="text" class="form-control" name="Nombre"
                value="<?php echo e(isset($producto->Nombre) ? $producto->Nombre : ''); ?>" id="Nombre" required>
            <br>
        </div>

        <div class="form-group">
            <label for="">Descripcion del Producto: </label>
            <input type="text" class="form-control" name="Descripcion"
                value="<?php echo e(isset($producto->Descripcion) ? $producto->Descripcion : ''); ?>" id="Descripcion" required>
            <br>
        </div>

        <div class="form-group">
            <label for="">Precio del Producto: </label>
            <input type="text" class="form-control" name="Precio"
                value="<?php echo e(isset($producto->Precio) ? $producto->Precio : ''); ?>" id="Precio" required>
            <br>
        </div>


        <div class="form-group">
            <label for="">Cantidad del Producto: </label>
            <input type="text" class="form-control" name="Cantidad"
                value="<?php echo e(isset($producto->Cantidad) ? $producto->Cantidad : ''); ?>" id="Cantidad" required>
            <br>

        </div>

        <div class="form-group">
            <label for="">Estado del Producto: </label>
            <select name="estado" class="form-control" value="<?php echo e(isset($producto->Estado) ? $producto->Estado : ''); ?>">
                <option value="Disponible">Disponible</option>
                <option value="Proximamente">Proximamente</option>
                <option value="Agotado">Agotado</option>
            </select>
        </div>


        <div class="form-group">
            <label for="">Imagen del Producto: </label>
            
            <br>
            <?php if(@isset($producto->Imagen)): ?>
                <img src="<?php echo e(asset('storage' . '/' . $producto->Imagen)); ?>" width="150" alt="">
            <?php endif; ?>
            <br><br>
            <input type="file" class="form-control" name="Imagen" id="Imagen" value="" required>
        </div>

        <br><br>

        <input type="submit" value="<?php echo e($modo); ?> Productos" class="btn btn-outline-primary">
        
        <a href="<?php echo e(url('producto/')); ?>" class="btn btn-outline-light">Regresar</a>

        </p>

    </div>

</div>
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/producto/form.blade.php ENDPATH**/ ?>