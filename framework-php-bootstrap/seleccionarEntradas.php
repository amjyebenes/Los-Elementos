<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once './back-end/controlador/ControladorEspectaculo.php';
if (!isset($_POST['consultaConcierto'])) {
    header("Location: conciertos.php");
}
$_SESSION['idConcierto'] = ControladorEspectaculo::get($_POST['id']);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- SECCION 3 | EVENTO PRÓXIMO -->
        <section class="container-fluid concert fix-top page-section device-padding section-padding bg-light">
            <!-- Evento -->
            <article class="row justify-content-around">
                <!-- Video -->
                <div class="col-md-5 col-12 overflow-hidden">
                    <div class="img-con border-top border-dark overflow-hidden">                        
                        <img class="shadow-lg img-fluid" src="data:jpg;base64,<?php echo base64_encode($_SESSION['idConcierto']->imagen); ?>" alt="Title">
                    </div>
                </div>
                <!-- Descripción -->
                <div class="col-md-7 col-12 border-top-1 d-flex flex-column justify-align-content-between h-100">
                    <div class="d-flex flex-column gap-1 pt-4 border-top border-dark">
                        <div class="w-100">
                            <h1 class="h1 text-dark text-uppercase mb-0"><?php echo $_SESSION['idConcierto']->titulo;?></h1>
                        </div>
                        <div class="event-date-con d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                            <p class="m-0"><?php echo $_SESSION['idConcierto']->fecha;?></p>
                            <span>&middot;</span>
                            <p class="m-0"><?php echo $_SESSION['idConcierto']->fecha;?></p>
                        </div>
                        <div class="d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                            <i class="fa-solid fa-location-dot text-primary"></i>
                            <p class="m-0 text-primary"><?php echo $_SESSION['idConcierto']->ubicacion;?></p>
                        </div>
                        <div class="event-info">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus quaerat
                                vero iure esse, nesciunt velit dolore voluptate quibusdam autem ducimus,
                                quas ipsam tempora? Mollitia quam earum assumenda laborum? Mollitia, hic?</p>
                        </div>

                        <!-- Botones Comprar -->
                        <div class="d-flex align-items-center justify-content-start gap-2 mt-0 pb-2">
                            <div class="d-flex justify-content-center align-items-end pr-3">
                                <div class="text-center contadorEntrada">
                                    2
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-up"></i></button>
                                <button class="btn btn-primary rounded-5"><i class="fas fa-arrow-alt-circle-down"></i></button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary rounded-3" onclick='alert("Añadido a la cesta");'><span class="sm-h3">Añadir al carrito</span></button>
                            </div>
                        </div>

                        <div class="d-none d-md-block mt-auto w-100 bg-dark my-2">
                            <div class="b-line"></div>
                        </div>
                    </div>

                    <!-- Otros conciertos -->
                    <div class="row justify-content-between gap-0">
                        <div class="col-12">
                            <h3 class="h3 text-capitalize">Otros conciertos</h3>
                        </div>
                        <div class="col-4">
                            <img src="assets/img/choco.png" alt="" class="img-fluid concierto-hov">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/alba.jpg" alt="" class="img-fluid concierto-hov">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/delaossa.jpg" alt="" class="img-fluid concierto-hov">
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <?php
    include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>