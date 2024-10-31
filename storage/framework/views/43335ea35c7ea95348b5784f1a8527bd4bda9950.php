<link rel="stylesheet" href="../resources/css/cardspro.css">

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<h3 class="text-white" align="center">Metodos de pago</h3>

<hr color="white">

<div class="container p-5">

    <div class="row">
        <div class="container">
            <div class="card">
                <div class="imgBOX">
                    <img src="../resources/img/Efecty.jpeg" width="185px">
                </div>
                <div class="content">
                    <div class="card text-white">
                        <h5>Efecty</h5>
                        <h6 style="color: #FFEE58">Paga en algunos de nuestros aliados.</h6>
                        <form action="" method="post">

                            <h6>Nombre</h6>
                            <input class="form-control" type="text" name="" value="" placeholder="Duban">
                            <br>

                            <h6>Apellido</h6>
                            <input class="form-control" type="text" name="" value="" placeholder="Caro">
                            <br>

                            <h6>Numero de identificacion</h6>
                            <input class="form-control" type="text" name="" value="" placeholder="12 3456 7890">
                            <br>
                            <?php if(auth()->check() && auth()->user()->hasRole('Comprador')): ?>
                            <input type="button" class="btn btn-outline-warning btn-block alerta" value="Enviar">
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgBOX">
                    <img src="../resources/img/Tarjetas.jpg" width="185px">
                </div>
                <div class="content text-white">
                    <h5>Tarjetas de Credito</h5>
                    <p>
                        <?php echo $__env->make('pago.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgBOX">
                    <img src="../resources/img/Paypal.png" width="185px">
                </div>
                <div class="content text-white">
                    <h5>Paypal</h5>
                    <hr color="white">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="XYMQXCUAED7G6">
                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif"
                            border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                        <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1"
                            height="1">
                    </form>
                </div>
            </div>
            <div class="row mt-2 p-5">
                <center>
                    <div class="alert alert-danger" role="alert">
                        <center>
                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                            NOTA: Solo para compras en efectivo.
                        </center>
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <center>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            Tienes 48h para completar el pago.
                        </center>
                    </div>

                    <div class="alert alert-warning" role="alert">
                        <center>
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                            Importante: Por favor ten en cuenta que los productos de este vendedor no serán
                            reservados mientras se procesa el pago. El producto podría quedar fuera de stock antes
                            de
                            que el pago nos llegue. Si no obtienes la clave, por favor contacta con nuestro soporte.
                        </center>
                    </div>
                    <h6>
                        <div class="alert alert-success" role="alert">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            Después de un pago con éxito, se necesita todavía una confirmación del proveedor, este
                            proceso
                            puede tardar varias horas. La clave llegará a su correo electrónico de forma automática.
                        </div>
                    </h6>
                    </p>
                </center>
            </div>

        </div>
    </div>
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    
    document.querySelector(".alerta").addEventListener('click', function() {
        Swal.fire("Garcias por su compra", "Su producto estara listo dentro de 12 Horas", "success");
    });

</script>
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/pago/index.blade.php ENDPATH**/ ?>