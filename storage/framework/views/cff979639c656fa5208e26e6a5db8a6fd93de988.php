<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            

            <div class="col-8">

                <h1>Dashboard</h1>

            </div>

            

            <div class="col-4">

                <div class="container">

                    
                    <div class="card" style="width: 18rem; ">
                        <img src="../resources/img/Per.png" class="card-img-top" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" align="center">
                                <a href=""><?php echo e(Auth::user()->name); ?></a>
                            </h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="<?php echo e(url('users')); ?>">
                                        <div class="icon">
                                            <i class="fa fa-users" aria-hidden="true"> Personal </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="<?php echo e(url('/CrearProductos')); ?>">
                                        <div class="icon">
                                            <i class="fa fa-gamepad" aria-hidden="true"> Productos </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="<?php echo e(url('ventas')); ?>">
                                        <div class="icon">
                                            <i class="fa fa-envelope" aria-hidden="true"> Notificaciones </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="item">
                                    <a href="<?php echo e(url('/Catalogo-Productos')); ?>">
                                        <div class="icon">
                                            <i class="fa fa-th" aria-hidden="true"> Catalogo de Productos </i>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body">
                            
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/menuAdmin/index.blade.php ENDPATH**/ ?>