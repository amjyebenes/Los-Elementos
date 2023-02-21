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
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="device-padding">
        <!-- Portfolio Section-->
        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <h1 class="h1 text-left text-uppercase text-black fw-light m-0 pt-3">Eventos</h1>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>

        <section>
            <div class="container-fluid mb-4 d-flex flex-column gap-5">
                <?php
                $eventos = ControladorEspectaculo::getAllEventos();                
                foreach ($eventos as $evento) {                                         
                ?>                                
                <div class="row shadow">
                            <div class="col-12 col-md-3 p-0">
                                <div class="shadow">
                                        <img class="shadow-lg card-img" src="data:jpg;base64,<?php echo base64_encode($evento->imagen); ?>" alt="<?php echo $evento->titulo; ?>">                                    
                                </div>
                            </div>
                            <div class="col-7 col-md-5 d-flex flex-column p-3">
                                <div class="row">
                                    <h2 class="h1 text-primary "><?php echo $evento->titulo; ?></h2>
                                    <div class="col pb-1">
                                        <!-- Formato 22 · OCT · 2022 -->
                                        <h3 class="h4"><?php echo $evento->fecha ?></h3>
                                        <h3 class="h4 text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            <?php echo $evento->ubicacion; ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-4 d-flex align-items-center align-items-sm-end mb-4">
                                <div class="col d-flex justify-content-center pb-4">
                                <form action="seleccionarButacas.php" method="post"> 
                                    <input type="hidden" name="idEv" value="<?php echo $evento->id; ?>">                                
                                    <input type="submit" name="consultaEvento" class="btn btn-primary rounded-3" value="Seleccionar butacas">
                                </form>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </div>
        </section>



        <!--
            <section>
                <div class="container-fluid mb-4 d-flex flex-column gap-5">
                    <div class="row shadow">
                        <div class="col-12 col-md-3 p-0">
                            <div class="shadow">
                                <img class="shadow-lg card-img" src="./assets/img/magopop1.jpg" alt="Title">
                            </div>
                        </div>
                        <div class="col-7 col-md-6 d-flex flex-column p-3">
                            <div class="row">
                                <p class="h1 text-primary  ">Mago Pop</p>
                                <div class="col pb-1">
                                    <p class="h5 ">13 · OCT · 2023</p>
                                    <h6>SAB - 21:30<h6>
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Malaga - Sala Paris 15
                                        </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 d-flex align-items-center align-items-sm-end">
                            <div class="col d-flex justify-content-center pb-4">
                            <a href="seleccionarButacas.php"><button type="button" class="btn btn-primary rounded-3 col "><span class="sm-h3 ">Seleccionar butacas</span></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row shadow">
                        <div class="col-12 col-md-3 p-0">
                            <div class="shadow">
                                <img class="shadow-lg card-img" src="./assets/img/juantamariz1.jpg" alt="Title">
                            </div>
                        </div>
                        <div class="col-7 col-md-6 d-flex flex-column p-3">
                            <div class="row">
                                <p class="h1 text-primary  ">Juan Tamariz</p>
                                <div class="col pb-1">
                                    <p class="h5 ">02 · MAR · 2023</p>
                                    <h6>SAB - 21:30<h6>
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Lucena - Plaza de toros
                                        </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 d-flex align-items-center align-items-sm-end">
                            <div class="col d-flex justify-content-center pb-4">
                            <a href="seleccionarButacas.php"><button type="button" class="btn btn-primary rounded-3 col "><span class="sm-h3 ">Seleccionar butacas</span></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row shadow">
                        <div class="col-12 col-md-3 p-0">
                            <div class="shadow">
                                <img class="shadow-lg card-img" src="./assets/img/ReyLeon.jpg" alt="Title">
                            </div>
                        </div>
                        <div class="col-7 col-md-6 d-flex flex-column p-3">
                            <div class="row">
                                <p class="h1 text-primary  ">Festival del Rey León</p>
                                <div class="col pb-1">
                                    <p class="h5 ">15 · JUN · 2023</p>
                                    <h6>DOM - 17:30<h6>
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Barcelona - Sala Banana
                                        </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 d-flex align-items-center align-items-sm-end">
                            <div class="col d-flex justify-content-center pb-4">
                                <a href="seleccionarButacas.php"><button type="button" class="btn btn-primary rounded-3 col "><span class="sm-h3 ">Seleccionar butacas</span></button></a>
                            </div>
                        </div>
                    </div>
                    <div class="row shadow">
                        <div class="col-12 col-md-3 p-0">
                            <div class="shadow">
                                <img class="shadow-lg card-img" src="./assets/img/evaHache1.jpg" alt="Title">
                            </div>
                        </div>
                        <div class="col-7 col-md-6 d-flex flex-column p-3">
                            <div class="row">
                                <p class="h1 text-primary  ">Eva Hache</p>
                                <div class="col pb-1">
                                    <p class="h5 ">6 · OCT · 2022</p>
                                    <h6>SAB - 21:30<h6>
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Malaga - Teatro Cervantes
                                        </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-3 d-flex align-items-center align-items-sm-end">
                            <div class="col d-flex justify-content-center pb-4">
                            <a href="seleccionarButacas.php"><button type="button" class="btn btn-primary rounded-3 col "><span class="sm-h3 ">Seleccionar butacas</span></button></a>
                            </div>
                        </div>
                    </div>
                </div>


            </section>
        -->
    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>

</body>

</html>