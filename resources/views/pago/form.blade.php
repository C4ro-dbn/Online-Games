<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    {{-- Css --}}
    <link rel="stylesheet" href="../resources/css/pago.css">
</head>

<body>

    <div class="card text-white">

        <form action="" method="post">

            <div class="row">
                <img src="../resources/img/visa.png" class="logo-card">
                <img src="../resources/img/mastercard.png" class="logo-card" align="right">
            </div>

            <label class="text-white">Numero de tarjeta:</label>
            <input id="user" type="text" class="input cardnumber form-control" placeholder="1234 5678 9101 1121">

            <label class="text-white">Nombre:</label>
            <input class="input form-control" placeholder="Edgar Pérez">
            <br>

            <label class="toleft text-white">CCV:</label>
            <br>
            <input class="input toleft form-control" placeholder="321">
            <br><br>

            <label class="toleft text-white">Fecha:</label>
            <br>
            <input class="input toleft form-control" placeholder="MM/YY">
            <br><br>
            @role('Comprador')
            <input type="button" class="btn btn-outline-light btn-block alerta2" value="Enviar">
            @endrole
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script>
        document.querySelector(".alerta2").addEventListener('click', function() {
            Swal.fire("Garcias por su compra", "Su producto estara listo dentro de 12 Horas", "success");
        });    
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

</body>

</html>
