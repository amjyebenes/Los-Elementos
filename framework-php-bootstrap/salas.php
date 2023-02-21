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
    <main class="py-md-5 py-3 container-fluid">
        <!-- Portfolio Section-->
        <section class="position-relative mt-md-5 mt-0 mb-0 device-padding">

            <div class="container-fluid">
                <!-- Portfolio Section Heading-->
                <h1 class="text-left text-uppercase text-black m-0">Salas</h1>
                <!-- Icon Divider-->
            </div>
            <div class="b-line w-100 bg-dark my-4"></div>

        </section>

        <section class="device-padding">
            <div class="container-fluid">
                <!--Primera sala -->
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-5 col-12 bg-white shadow">
                        <div class="row">
                            <h1><a href="https://paris15.es/" class="fs-2 text fw-bold text-decoration-none text-primary">Sala París 15</a></h1>
                            
                            <div class="col">
                                <h2 class="h3 tituloSala">Información: </h1>
                                <h3 class="h4 text-primary">
                                    <i class="fa-solid fa-location-dot"></i>
                                    C/La Orotava 25-27
                                </h3>
                                <h4 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    info@paris15.es
                                </h4>
                                <h4 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    952845623
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 d-flex flex-column px-0">
                        <div class="shadow">
                            <img class="shadow-lg card-img " src="./assets/img/SalaParis.jpg" alt="Sala París" title="Localización de la Sala">
                        </div>
                    </div>
                </div>
                <!--Segunda sala -->
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-5 col-12 bg-white shadow">
                        <div class="row">
                          <h1><a href="https://www.wizinkcenter.es/" class="fs-2 text fw-bold text-decoration-none text-primary">Wizink Center</a> </h1>
                            <div class="col">
                                <h2 class="h3 tituloSala">Información: </h1>
                                <h3 class="h4 text-primary">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Av. Felipe II, s/n. 28009 MADRID
                                </h3>
                                <h3 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    hablemos@WiZinkCenter.es
                                </h3>
                                <h3 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    914449949
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7 col-12 d-flex flex-column px-0">
                        <div class="shadow">
                            <img class="shadow-lg card-img " src="./assets/img/wizink.jpg" alt="Wizink Center" title="Localización de la Sala">
                        </div>
                    </div>
                </div>
                <!--Tercera sala -->
                <div class="row justify-content-center mb-4">
                    <div class="col-lg-5 bg-white shadow">
                        <div class="row">
                           <h1> <a href="https://www.sala-apolo.com/es/" class="fs-2 text fw-bold text-decoration-none text-primary">Sala Apolo</a></h1>
                            <div class="col">
                                <h2 class="h3 tituloSala">Información: </h2>
                                <h3 class="h4 text-primary">
                                    <i class="fa-solid fa-location-dot"></i>
                                    Calle Nou de la Rambla, 107
                                </h3>
                                <h3 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    info@sala-apolo.com
                                </h3>
                                <h3 class="text-primary">
                                    <i class="fa-solid fa-inbox "></i>
                                    934414001
                                </h3>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7 d-flex flex-column px-0">
                        <div class="shadow">
                            <img class="shadow-lg card-img " src="./assets/img/apolo.jpg" alt="Sala Apolo" title="Aproximacion a la sala">
                        </div>
                    </div>
                </div>
            </div>


            </div>

        </section>
    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>