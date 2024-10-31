<?php $__env->startSection('content'); ?>

    <div class="container">

        <h3>lista de productos</h3>

        <hr>

        <div class="alert alert-primary alert-dismissible" role="alert">
            <?php if(Session::has('mensaje')): ?>
                <?php echo e(Session::get('mensaje')); ?>

            <?php endif; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <hr>

        <a href="<?php echo e(url('/menuAdmin')); ?>">Regresar al tablero inicial</a>
        <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
        <a href="<?php echo e(url('producto/create')); ?>" class="btn btn-link">Crear Productos</a>
        <?php endif; ?>
        
        <hr>

        <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
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
                <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($producto->id); ?></td>
                        <td>
                            <img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage' . '/' . $producto->Imagen)); ?>"
                                width="250" alt="">
                        </td>
                        <td><?php echo e($producto->Nombre); ?></td>
                        <td><?php echo e($producto->Descripcion); ?></td>
                        <td><?php echo e($producto->Cantidad); ?></td>
                        <td><?php echo e($producto->Estado); ?></td>
                        <td><?php echo e($producto->Precio); ?></td>
                        <td>
                            <a href="<?php echo e(url('/producto/' . $producto->id . '/edit')); ?>" class="btn btn-outline-primary">
                                Editar
                            </a>
                            &nbsp
                            <form action="<?php echo e(url('/producto/' . $producto->id)); ?>" method="post" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo e(method_field('DELETE')); ?>

                                <input type="submit" onclick="return confirm('¿Desea borrar este registro?')"
                                    class="btn btn-outline-danger" value="Borrar" >
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php echo $productos->links(); ?>

        <?php endif; ?>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/producto/index.blade.php ENDPATH**/ ?>