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
                $conciertos = ControladorEspectaculo::getAllConciertos();
                foreach ($conciertos as $concierto) {
                ?>
                    <div class="row shadow">
                        <div class="col-12 col-md-3 p-0">
                            <div class="shadow">
                                <img class="shadow-lg card-img" src="data:jpg;base64,<?php echo base64_encode($concierto->imagen); ?>" alt="<?php echo $concierto->titulo; ?>">
                            </div>
                        </div>
                        <div class="col-7 col-md-5 d-flex flex-column p-3">
                            <div class="row">
                                <h2 class="h1 text-primary "><?php echo $concierto->titulo; ?></h2>
                                <div class="col pb-1">
                                    <!-- Formato 22 · OCT · 2022 -->
                                    <h3 class="h4"><?php echo $concierto->fecha ?></h3>
                                    <h3 class="h4 text-primary">
                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                        <?php echo $concierto->ubicacion; ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 d-flex align-items-center align-items-sm-end mb-4">
                            <div class="col d-flex justify-content-center pb-4">
                                <form action="seleccionarEntradas.php" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $concierto->id; ?>">
                                    <input type="submit" name="consultaConcierto" class="btn btn-primary rounded-3" value="Comprar Entradas">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <?php
        if (isset($_GET['cesta'])) {
            echo   '<div id="alerta" name="alerta" class="alerta alert bg-primary border border-2 border-dark h6 position-absolute posicionAlertaConcierto translate-middle" role="alert">
                        Añadido a la cesta
                    </div>';
        }
        ?>
    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/alerta.js"></script>
</body>

</html>