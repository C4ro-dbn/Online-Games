<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<hr>
<div class="container">
    <h2 class="text-white">Soporte de OnlineGames</h2>
    <h3 class="text-white">¿En qué podemos ayudarte?</h3>
    <br>
    <div class="alert alert-primary " role="alert">
        <i class="fa fa-long-arrow-alt-right"></i>
        <a href="">Compras</a>
    </div>
    <div class="alert alert-primary " role="alert">
        <i class="fa fa-long-arrow-alt-right"></i>
        <a href="">Juegos</a>
    </div>
    <div class="alert alert-primary " role="alert">
        <i class="fa fa-long-arrow-alt-right"></i>
        <a href="">Mi cuenta</a>
    </div>
</div>
<hr>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\onlinegames-laravel\resources\views/catalogo/soporte.blade.php ENDPATH**/ ?>