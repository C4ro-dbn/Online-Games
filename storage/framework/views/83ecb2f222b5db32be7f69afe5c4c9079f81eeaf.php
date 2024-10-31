<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #273746; color: #fff">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img class="disabled" src="../resources/img/logo.png" width="40" height="35">
        </a>
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <?php echo e(config('app.name', 'OlineGames')); ?>

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?php echo e(url('/Catalogo-Productos')); ?>">Tienda</a>
                    <a class="nav-item nav-link active" href="<?php echo e(url('/Carrito')); ?>">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        <?php if(count(Cart::getContent())): ?>
                            <a href="<?php echo e(route('cart.checkout')); ?>">
                                <span class="badge badge-danger"><?php echo e(count(Cart::getContent())); ?></span>
                            </a>
                        <?php endif; ?>
                    </a>
                    <a class="nav-item nav-link active" href="<?php echo e(url('/Soporte')); ?>">Soporte</a>
                </div>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <?php if(auth()->guard()->guest()): ?>
                    <?php if(Route::has('login')): ?>
                        <ul class="nav-item">
                            <a class="nav-link active" href="<?php echo e(route('login')); ?>">
                                <?php echo e(__('Iniciar Sesion')); ?>

                                <i class="fa fa-door-open"></i>
                            </a>
                        </ul>
                    <?php endif; ?>

                    <?php if(Route::has('register')): ?>
                        <ul class="nav-item">
                            <a class="nav-link active" href="<?php echo e(route('register')); ?>">
                                <?php echo e(__('Registrarse')); ?>

                                <i class="fa fa-sign-in-alt"></i>
                            </a>
                        </ul>
                    <?php endif; ?>
                <?php else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(url('perfilUsu')); ?>">Perfil</a>
                            <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                            <a class="dropdown-item" href="<?php echo e(url('menuAdmin')); ?>">Dashboard</a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                <?php echo e(__('Cerrar Sesion')); ?>

                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<hr color="white">
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/layouts/menu.blade.php ENDPATH**/ ?>