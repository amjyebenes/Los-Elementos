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
    <main class="py-lg-5 container-fluid d-flex justify-content-center flex-column">

        <section class="position-relative mt-lg-5 mb-0 pt-lg-3">
            <div class="container">
                <h1 class="text-center text-black m-0">Boris Brejcha · Barcelona · Brunch In The Park · 22/02/2023</h1>
            </div>
        </section>
        <section class="d-flex justify-content-center py-lg-5">
            <div class="container row ">
                <div class="col-12 col-lg-5 pb-5">
                    <img class="shadow-lg h-100 card-img" src="./assets/img/borisbrejcha.jpg" alt="Title">
                </div>
                <div class="col-12 col-lg-7 d-flex flex-column gap-4">
                    <div class="row">
                        <hr class="opacity-75">
                    </div>
                    <div class="row justify-content-center">
                        <span class="h3 text-center tituloArtista">Selecciona tus butacas: 2</span>
                    </div>
                    <div class="row align-items-center pb-1 justify-content-center">

                        <ul class="showcase col-5">
                            <li>
                                <div class="seat"></div>
                                <small>Libre</small>
                            </li>
                            <li>
                                <div class="seat selected"></div>
                                <small>Seleccionado</small>
                            </li>
                            <li>
                                <div class="seat occupied"></div>
                                <small>Ocupado</small>
                            </li>
                        </ul>

                        <div class="container d-flex flex-column align-items-center">
                            <div class="screen text-center">
                                Escenario
                            </div>

                            <div class="row">
                                <div class="seat"><input type="checkbox" name="00"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                            </div>
                        </div>

                        <p class="text text-center">
                            Has comprado <span id="count">0</span> asientos al precio de € <span id="total">0</span>
                        </p>
                    </div>
                    <div class="row justify-content-around pt-lg-3">
                        <a class="col-auto col-lg-4 pb-4 pb-md-0 pb-lg-0" href="index.php"><button class="w-100 btn btn-outline-primary bg-info text-primary rounded-3"><i class="fa-solid fa-arrow-left"></i> Seguir comprando</button></a>
                        <a class="col-auto col-lg-4 pb-4 pb-md-0 pb-lg-0" href="index.php"><button class="w-100 btn btn-primary text-white rounded-3" onclick='alert("Añadido a la cesta");'>Añadir a la cesta</button></a>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/butacas.js"></script>
</body>

</html>