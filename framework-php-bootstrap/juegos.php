<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="device-padding">
        <!-- Portfolio Section-->
        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3">Juegos</h1>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>

        <section class="section-padding">
            <div class="container-fluid mb-4 d-flex flex-column gap-5">
                <div class="row justify-content-between gap-5">
                    <article class="col-12 col-md-5 p-0">
                        <div class="card bg-light shadow border-0 rounded-3 m-0 juego-card">
                            <img src="./assets/assets_juego_miguel/portada.png" class="card-img-top img-fluid" alt="Tower Game">
                            <div class="card-body">
                                <h2 class="card-title">Tower Game</h2>
                                <p class="card-text">Intenta apilar cuantos puedas!</p>
                                <a href="tower.php" class="btn btn-primary rounded-3" target="_blank">Jugar</a>
                            </div>
                        </div>
                    </article>

                    <article class="col-12 col-md-5 p-0">
                        <div class="card bg-light shadow border-0 rounded-3 m-0 juego-card">
                            <img src="assets/assets_juego_angel/capturaSNAKE.png" class="card-img-top" alt="Snake en 3D">
                            <div class="card-body">
                                <h2 class="card-title">Snake en 3D</h2>
                                <p class="card-text">En este juego pasaras un buen rato intentando averiguar como hacer que la serpiente coma manzanas.</p>
                                <a href="snake.html" class="btn btn-primary rounded-3" target="_blank">Jugar</a>
                            </div>
                        </div>
                    </article>

                    <article class="col-12 col-md-5 p-0">
                        <div class="card bg-light shadow border-0 rounded-3 m-0 juego-card">
                            <img src="assets/assets_juego_adrian/bg.jpg" class="card-img-top" alt="El clásico juego de pong con un diseño novedoso con colores y luces de neón.">
                            <div class="card-body">
                                <h2 class="card-title">Pong Adrián</h2>
                                <p class="card-text">El clásico juego de pong con un diseño novedoso con colores y luces de neón.</p>
                                <p>Controles: J1: (W, S) J2: (Teclas de Dirección) </p>
                                <a href="pong_adrian.html" class="btn btn-primary rounded-3" target="_blank">Jugar</a>
                            </div>
                        </div>
                    </article>

                    <article class="col-12 col-md-5 p-0">
                        <div class="card bg-light shadow border-0 rounded-3 m-0 juego-card">
                            <img src="assets/assets_juego_marita/portada.png" class="card-img-top" alt="El clásico juego de pong">
                            <div class="card-body">
                                <h2 class="card-title">Pong Sencillo</h2>
                                <p class="card-text">El clásico juego de pong</p>
                                <a href="pong_marita.html" class="btn btn-primary rounded-3" target="_blank">Jugar</a>
                            </div>
                        </div>
                    </article>
                </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>