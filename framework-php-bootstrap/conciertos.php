<?php 
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php"); 
require_once './back-end/controlador/ControladorEspectaculo.php';
require_once './back-end/modelo/Espectaculo.php';
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main class="device-padding">
<!-- Portfolio Section-->
<section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
    <div class="px-0">
        <!-- Portfolio Section Heading-->
        <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3">Conciertos</h1>
        <!-- Icon Divider-->
    </div>
    <div class="b-line w-100 bg-dark my-4"></div>
</section>

<section>
    <div class="container-fluid mb-4 d-flex flex-column gap-5">
        <?php
        $conciertos = ControladorEspectaculo::getAll();
        foreach($conciertos as $concierto) {
            if ($concierto->tipo == 'concierto') {
                ?>
                <div class="row shadow">
                    <div class="col-12 col-md-3 p-0">
                        <div class="shadow">
                            <a href="seleccionarEntradas.php">
                                <img class="shadow-lg card-img" src="data:jpg;base64,<?php echo base64_encode($concierto->imagen); ?>" alt="Title">
                            </a>
                        </div>
                    </div>
                    <div class="col-7 col-md-5 d-flex flex-column p-3">
                        <div class="row">
                            <p class="h1 text-primary "><?php echo $concierto->titulo; ?></p>
                            <div class="col pb-1">
                                <!-- Formato 22 · OCT · 2022 -->
                                <p class="h5"><?php echo $concierto->fecha ?></p>
                                <!-- Formato DIA - 00:00 -->
                                <h6><?php echo $concierto->fecha ?><h6>
                                <h6 class="text-primary">
                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                    <?php echo $concierto->ubicacion; ?>
                                </h6>   
                            </div>
                        </div>
                    </div>
                    <div class="col-5 col-md-2 d-flex align-items-end justify-content-end mb-2">
                        <div class="row align-items-center pb-3">
                            <div class="col-6 justify-content-center align-items-end pr-3">
                                <div class="text-center contadorEntrada">2</div>
                            </div>
                            <div class="col-6">
                                <div class="col-6" >
                                    <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                                </div>
                                <div class="col-6 mt-2" >
                                    <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-2 d-flex align-items-center align-items-sm-end mb-4">
                        <div class="col d-flex justify-content-center pb-4">
                            <button type="button" class="btn btn-primary rounded-3 col" onclick="alert('Añadido al carrito correctamente');"><span class="sm-h3">Añadir al carrito</span></button>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
        <!-- <div class="row shadow">
            <div class="col-12 col-md-3 p-0">
                <div class="shadow">
                    <a href="seleccionarEntradas.php"><img class="shadow-lg card-img" id="cruzzi" src="./assets/img/CruzziDarkBG_Agua2.jpg" alt="Title"></a>
                </div>
            </div>
            <div class="col-7 col-md-5 d-flex flex-column p-3">
                <div class="row">
                    <p class="h1 text-primary ">Cruz Cafuné</p>
                    <div class="col pb-1">
                        <p class="h5">22 · OCT · 2022</p>
                        <h6>SAB - 21:30<h6>
                        <h6 class="text-primary">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Malaga - Sala Paris 15 
                        </h6>   
                    </div>
                </div>
            </div>
            <div class="col-5 col-md-2 d-flex align-items-end justify-content-end mb-2">
                <div class="row align-items-center pb-3">
                    <div class="col-6 justify-content-center align-items-end pr-3">
                        <div class="text-center contadorEntrada">2</div>
                    </div>
                    <div class="col-6">
                        <div class="col-6" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                        </div>
                        <div class="col-6 mt-2" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-2 d-flex align-items-center align-items-sm-end mb-4">
                    <div class="col d-flex justify-content-center pb-4">
                        <button type="button" class="btn btn-primary rounded-3 col" onclick="alert('Añadido al carrito correctamente');"><span class="sm-h3">Añadir al carrito</span></button>
                    </div>
            </div>
        </div>
        <div class="row shadow">
            <div class="col-12 col-md-3 p-0">
                <div class="shadow">
                    <a href="seleccionarEntradas.php"><img class="shadow-lg card-img" src="./assets/img/sfdk.jpg" alt="Title"></a>
                </div>
            </div>
            <div class="col-7 col-md-5 d-flex flex-column p-3">
                <div class="row">
                    <p class="h1 text-primary ">SFDK</p>
                    <div class="col pb-1">
                        <p class="h5">14 · DIC · 2023</p>
                        <h6>LUN - 22:30<h6>
                        <h6 class="text-primary">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Madrid - Wizink Center 
                        </h6>   
                    </div>
                </div>
            </div>
            <div class="col-5 col-md-2 d-flex align-items-end justify-content-end mb-2">
                <div class="row align-items-center pb-3">
                    <div class="col-6 justify-content-center align-items-end pr-3">
                        <div class="text-center contadorEntrada">2</div>
                    </div>
                    <div class="col-6">
                        <div class="col-6" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                        </div>
                        <div class="col-6 mt-2" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-2 d-flex align-items-center align-items-sm-end mb-4">
                    <div class="col d-flex justify-content-center pb-4">
                        <button type="button" class="btn btn-primary rounded-3 col" onclick="alert('Añadido al carrito correctamente');"><span class="sm-h3">Añadir al carrito</span></button>
                    </div>
            </div>
        </div>
        <div class="row shadow">
            <div class="col-12 col-md-3 p-0">
                <div class="shadow">
                    <a href="seleccionarEntradas.php"><img class="shadow-lg card-img" src="./assets/img/borisbrejcha.jpg" alt="Title"></a>
                </div>
            </div>
            <div class="col-7 col-md-5 d-flex flex-column p-3">
                <div class="row">
                    <p class="h1 text-primary ">Boris Brejcha</p>
                    <div class="col pb-1">
                        <p class="h5">22 · FEB · 2023</p>
                        <h6>JUE - 01:30<h6>
                        <h6 class="text-primary">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Sevilla - elRow
                        </h6>   
                    </div>
                </div>
            </div>
            <div class="col-5 col-md-2 d-flex align-items-end justify-content-end mb-2">
                <div class="row align-items-center pb-3">
                    <div class="col-6 justify-content-center align-items-end pr-3">
                        <div class="text-center contadorEntrada">2</div>
                    </div>
                    <div class="col-6">
                        <div class="col-6" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                        </div>
                        <div class="col-6 mt-2" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-2 d-flex align-items-center align-items-sm-end mb-4">
                    <div class="col d-flex justify-content-center pb-4">
                        <button type="button" class="btn btn-primary rounded-3 col" onclick="alert('Añadido al carrito correctamente');"><span class="sm-h3">Añadir al carrito</span></button>
                    </div>
            </div>
        </div>
        <div class="row shadow">
            <div class="col-12 col-md-3 p-0">
                <div class="shadow">
                    <a href="seleccionarEntradas.php"><img class="shadow-lg card-img" src="./assets/img/vetustamorla.jpg" alt="Title"></a>
                </div>
            </div>
            <div class="col-7 col-md-5 d-flex flex-column p-3">
                <div class="row">
                    <p class="h1 text-primary ">Vetusta Morla</p>
                    <div class="col pb-1">
                        <p class="h5">19 · NOV · 2023</p>
                        <h6>DOM - 11:30<h6>
                        <h6 class="text-primary">
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        Córdoba - Estadio Árcangel 
                        </h6>   
                    </div>
                </div>
            </div>
            <div class="col-5 col-md-2 d-flex align-items-end justify-content-end mb-2">
                <div class="row align-items-center pb-3">
                    <div class="col-6 justify-content-center align-items-end pr-3">
                        <div class="text-center contadorEntrada">2</div>
                    </div>
                    <div class="col-6">
                        <div class="col-6" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                        </div>
                        <div class="col-6 mt-2" >
                            <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-md-2 d-flex align-items-center align-items-sm-end mb-4">
                    <div class="col d-flex justify-content-center pb-4">
                        <button type="button" class="btn btn-primary rounded-3 col" onclick="alert('Añadido al carrito correctamente');"><span class="sm-h3">Añadir al carrito</span></button>
                    </div>
            </div>
        </div> -->
    </div>


</section>
</main>

<?php include("includes/footer.php");?>
<script src="./js/navbar.js"></script>

</body>
</html>