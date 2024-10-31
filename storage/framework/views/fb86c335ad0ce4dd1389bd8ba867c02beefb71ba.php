<link rel="stylesheet" href="../resources/css/cardspro.css">

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand"></a>
        <form class="d-flex">
            <input type="text" class="form-control d-inline" placeholder="Busca tu juego favorito" name="pro"
                value=<?php echo e($pro); ?>>
            <input type="submit" class="btn btn-outline-light" value="Buscar Juego">
        </form>
    </div>
</nav>

<hr color="white">

<div class="container" id="container">
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card-group">
            <div class="card">
                <div class="imgBOX text-white">
                    <img src="<?php echo e(asset('storage' . '/' . $producto->Imagen)); ?>" width="185px">
                </div>
                <div class="content">
                    <p class="text-white"><?php echo e($producto->Nombre); ?></p>
                    <p class="text-white">Precio: $ <?php echo e($producto->Precio); ?></p>
                    <h6 style="color: #22ABF0"><?php echo e($producto->Estado); ?></h6>

                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" name="producto_id" value="<?php echo e($producto->id); ?>">
                        <button type="submit" name="btn" class="btn btn-outline-light">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<br>

<div class="container">
    <?php echo $productos->links(); ?>

</div>

<br>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/CatalogoProductos/index.blade.php ENDPATH**/ ?>