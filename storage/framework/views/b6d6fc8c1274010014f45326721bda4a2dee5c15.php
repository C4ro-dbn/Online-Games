<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Contenido -->

<header>
    
</header>

<div class="container mt-5" id="container">

    <hr color="white">

    <h3 align="center" class="text-white">Destacado</h3>
    <br>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="../resources/img/mortal kombat 11.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Mortal kombat 11</h5>
                <p class="card-text">
                    Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y publicado
                    por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada de
                    Unreal Engine 3, ​ es la undécima entrega principal de la serie Mortal Kombat y una secuela
                    de 2015 Mortal Kombat X...
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal" data-target="#exampleModal">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/mortal kombat 11.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Mortal Kombat 11 es un videojuego de lucha desarrollado por NetherRealm Studios y
                                    publicado
                                    por Warner Bros. Interactive Entertainment. Se ejecuta en una versión muy modificada
                                    de
                                    Unreal Engine 3, ​ es la undécima entrega principal de la serie Mortal Kombat y una
                                    secuela
                                    de 2015 Mortal Kombat X.

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>Xbox ONE, PS4, PC,</td>
                                            <td>Historia y Multijugador</td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../resources/img/outriders.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Outriders</h5>
                <p class="card-text">
                    Outriders es un videojuego de acción cooperativa en tercera persona desarrollado por People
                    Can Fly y publicado por la filial europea de Square Enix. Fue lanzado el 1 de abril de 2021
                    para Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X / S y Stadia.
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal" data-target="#exampleModal2">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/outriders.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Outriders es un videojuego de acción cooperativa en tercera persona desarrollado por
                                    People
                                    Can Fly y publicado por la filial europea de Square Enix. Fue lanzado el 1 de abril
                                    de 2021
                                    para Microsoft Windows, PlayStation 4, PlayStation 5, Xbox One, Xbox Series X / S y
                                    Stadia.

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>
                                                Xbox ONE, Xbox Series X/S,
                                                <br>
                                                PS4, PS5,
                                                <br>
                                                Microsoft Windows, Stadia
                                            </td>
                                            <td>
                                                Solo (Un jugador)
                                                <br>
                                                Coopetativo en linea
                                                <br>
                                                Multijugador multiplataforma
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../resources/img/titanfall.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">TitanFall</h5>
                <p class="card-text">
                    Titanfall es una serie de videojuegos que presenta principalmente juegos de disparos en
                    primera persona. La serie fue creada por Respawn Entertainment y debutó como exclusiva de
                    Xbox; se ha expandido a otras consolas y plataformas.
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal" data-target="#exampleModal3">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/titanfall.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Titanfall es una serie de videojuegos que presenta principalmente juegos de disparos
                                    en
                                    primera persona. La serie fue creada por Respawn Entertainment y debutó como
                                    exclusiva de
                                    Xbox; se ha expandido a otras consolas y plataformas.

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>
                                                Microsoft Windows,
                                                <br>
                                                Xbox 360,
                                                <br>
                                                Xbox One
                                            </td>
                                            <td>
                                                CJC en linea
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="../resources/img/assassins creed valhalla.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Assassin's Creed: Valhalla</h5>
                <p class="card-text">
                    Assassin's Creed Valhalla es un videojuego desarrollado por Ubisoft Montreal y publicado por
                    Ubisoft. Es el decimosegundo en importancia y el vigesimosegundo lanzado dentro de la saga
                    de Assassin Creed, y sucesor al juego del 2018 Assassin's Creed Odyssey.
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal"
                    data-target="#exampleModal4">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/assassins creed valhalla.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Assassin's Creed Valhalla es un videojuego desarrollado por Ubisoft Montreal y
                                    publicado por
                                    Ubisoft. Es el decimosegundo en importancia y el vigesimosegundo lanzado dentro de
                                    la saga
                                    de Assassin Creed, y sucesor al juego del 2018 Assassin's Creed Odyssey.

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>
                                                Xbox ONE, Xbox Series X/S,
                                                <br>
                                                PS4, PS5,
                                                <br>
                                                PC
                                            </td>
                                            <td>
                                                Solo (Un jugador)
                                                <br>
                                                Tercera persona
                                                <br>
                                                Historia
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../resources/img/Marvels-Spider-Man.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Spider-Man</h5>
                <p class="card-text">
                    Marvel's Spider-Man es un videojuego de acción y aventura basado en el popular superhéroe
                    hómonimo de la editorial Marvel Comics.​ Fue desarrollado por Insomniac Games y publicado
                    por Sony Interactive Entertainment en exclusiva para la consola PlayStation 4.​
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal"
                    data-target="#exampleModal5">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/Marvels-Spider-Man.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Marvel's Spider-Man es un videojuego de acción y aventura basado en el popular
                                    superhéroe
                                    hómonimo de la editorial Marvel Comics.​ Fue desarrollado por Insomniac Games y
                                    publicado
                                    por Sony Interactive Entertainment en exclusiva para la consola PlayStation 4.​

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>
                                                PS4, PS5
                                            </td>
                                            <td>
                                                Historia
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../resources/img/Assassins-Creed-Odyssey.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Assassin's Creed: Odyssey</h5>
                <p class="card-text">
                    Assassin's Creed: Odyssey es un videojuego desarrollado por Ubisoft Quebec y publicado por
                    Ubisoft. Es el decimoprimer juego de mayor importancia y el vigesimoprimero en general
                    dentro de la saga Assassin's Creed, siendo posterior al juego Assassin's Creed: Origins, se
                    trataría de una precuela.
                </p>
                <button type="button" class="btn btn-dark btn-block " data-toggle="modal"
                    data-target="#exampleModal6">
                    Saber mas..
                </button>

                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="../resources/img/Assassins-Creed-Odyssey.jpg" width="470px">
                            </div>
                            <div class="modal-body" align="center">
                                <h4>Ya se encuentra Disponible</h4>
                                <hr>
                                <p>
                                    Assassin's Creed: Odyssey es un videojuego desarrollado por Ubisoft Quebec y
                                    publicado por
                                    Ubisoft. Es el decimoprimer juego de mayor importancia y el vigesimoprimero en
                                    general
                                    dentro de la saga Assassin's Creed, siendo posterior al juego Assassin's Creed:
                                    Origins, se
                                    trataría de una precuela.

                                <table class="table table-light">
                                    <thead align="center">
                                        <th>Plataformas</th>
                                        <th>Modos</th>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>
                                                Xbox ONE, Xbox Series X/S,
                                                <br>
                                                PS4, PS5
                                            </td>
                                            <td>
                                                Solo (Un jugador)
                                                <br>
                                                Tercera Persona
                                                <br>
                                                Historia
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-dark btn-block" href="<?php echo e(url('/CatalogoProductos')); ?>">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="" align="center">
        <br>
        <a class="nav-item nav-link active text-light" href="<?php echo e(url('/CatalogoProductos')); ?>">Saber más ...</a>
    </div>
    <br>
</div>

<section class="dos">
    
</section>

<div class="container mt-5" id="container">

    <hr color="white">

    <div class="card-body" id="card-body">

        <div class="card-columns">

            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/eFootball PES 2021.jpg" alt="Card image cap">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/Days Gone.jpg" alt="Card image cap">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/COD Modern Warfare.jpg" alt="Card image cap">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/Mafia Remake.jpg" alt="Card image cap">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/Resident evil Village.jpg" alt="Card image cap">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/COD Cold War.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/csgo.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img//EFT.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/fifa 21.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/God of war.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/GTA V.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/phasmophobia.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/rust.jpg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/DBZ Kakarot.jpeg" alt="Card image">
            </div>
            <div class="card p-1">
                <img class="card-img-top" src="../resources/img/Hitman lll.jpg" alt="Card image">
            </div>

        </div>

        <div class="" align="center">
            <br>
            <a class="nav-item nav-link active text-light" href="<?php echo e(url('/CatalogoProductos')); ?>">Saber más ...</a>
        </div>
    </div>
    <br>
</div>

<section class="tres">
    
</section>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\onlinegames\resources\views/catalogo/index.blade.php ENDPATH**/ ?>