<?php $__env->startSection('content'); ?>

    <div class="container">

        <div class="row">

            

            <div class="col-8">
                <h3>Lista del Usuarios</h3>
                <hr color="white">
                <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                    <div class="from-control">
                        <nav class="navbar">
                            <div class="container-fluid">
                                <a href="<?php echo e(url('users/create')); ?>" class="btn btn-outline-primary"> Crear Usuario </a>
                                <a class="navbar-brand"></a>
                                <form class="d-flex">
                                    <input type="text" class="form-control d-inline" placeholder="Ingrese el usuario a buscar"
                                        name="usu" value=<?php echo e($usu); ?>>
                                    <input type="submit" class="btn btn-outline-dark" value="Buscar Juego">
                                </form>
                            </div>
                        </nav>
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
                    </div>
                    <br>
                    <?php if($users->count()): ?>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col"> --- </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($user->id); ?></th>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/users/' . $user->id . '/edit')); ?>">Editar</a>
                                            <form action="<?php echo e(url('/users/' . $user->id)); ?>" method="post" class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <?php echo e(method_field('DELETE')); ?>

                                                <input type="submit" onclick="return confirm('¿Desea borrar este Usuario?')"
                                                    class="btn btn-outline-danger" value="Borrar">
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo $users->links(); ?>

                    <?php else: ?>
                        <div class="Form-control">
                            <div class="alert alert-warning" role="alert">
                                No se encuentra esa persona
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
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
                                    <a href="<?php echo e(url('/menuAdmin')); ?>">
                                        <div class="icon">
                                            <i class="fa fa-bars" aria-hidden="true"> Dashboard </i>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/users/index.blade.php ENDPATH**/ ?>