<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

    <div class="row">

        
        <div class="col-8">
            <div class="card text-center bg-dark border-info mb-3 text-white">
                <div class="card-header border-info mb-3">
                    <h3>Mi Perfil</h3>
                </div>
                <div class="card-body border-info mb-3">
                    <label for="inputEmail4">Correo Electronico</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    <br>
                    <label>Contraseña</label>
                    <div class="input-group">
                        <input ID="txtPassword" type="Password" Class="form-control">
                        <div class="input-group-append">
                            <button id="show_password" class="btn btn-primary" type="button"
                                onclick="mostrarPassword()">
                                <span class="fa fa-eye-slash icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted border-info mb-3">
                    <button type="submit" class="btn btn-info btn-block">Guardar</button>
                </div>
            </div>
        </div>

        
        <div class="col-4">
            <div class="container">
                
                <div class="card border-info bg-dark text-white mb-3" style="width: 18rem; ">
                    <img src="../resources/img/Per.png" class="card-img-top" alt="Card image cap">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item border-info bg-dark text-white  mb-3">
                            <div class="item">
                                <center>
                                    <a disabled><?php echo e(Auth::user()->name); ?></a>
                                </center>
                            </div>
                        </li>
                    </ul>
                    <div class="card-body border-info mb-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../resources/js/ContPerUsu.js"></script>
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/perfilUsu/index.blade.php ENDPATH**/ ?>