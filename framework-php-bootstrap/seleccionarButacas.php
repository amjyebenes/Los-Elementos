<?php 
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once './back-end/controlador/ControladorEspectaculo.php';
require_once './back-end/modelo/Espectaculo.php';

if (!isset($_POST['consultaEvento'])) {
    header("Location: eventos.php");
}

$_SESSION['idEvento'] = ControladorEspectaculo::get($_POST['idEv']);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
<?php include("includes/navigation.php");?>
<main class="py-lg-5 container-fluid d-flex justify-content-center flex-column">

    <section class="position-relative mt-lg-5 mb-0 pt-lg-3">
            <div class="container">
                <h1 class="text-center text-black m-0"><?php echo $_SESSION['idEvento']->titulo; ?></h1>
            </div>
    </section>
    <section class="d-flex justify-content-center py-lg-5">
        <div class="container row ">
            <div class="col-12 col-lg-5 pb-5">
            <img class="shadow-lg img-fluid" src="data:jpg;base64,<?php echo base64_encode($_SESSION['idEvento']->imagen); ?>" alt="Title">
            </div>
            <div class="col-12 col-lg-7 d-flex flex-column gap-4">
                <div class="row">
                    <hr class="opacity-75">
                </div>
                <div class="row justify-content-center">
                    <span class="h3 text-center tituloArtista">Selecciona tus butacas: </span>
                </div>
                <div class="row align-items-center pb-1">
                    <div class="col-12 col-lg-9">
                        <img class="card-img" src="./assets/img/butacas-sinfondo.png" alt="Title">
                    </div>
                    <div class="col-12 col-lg-3 flex-column">
                        <div class="row justify-content-center pt-3 pt-lg-0">
                            <img class="col-2 col-lg-3" src="./assets/img/bolanegra.png" alt="Title">
                            <span class="text-center">Asiento ocupado</span>
                        </div>
                        <div class="row justify-content-center">
                            <img class="col-2 col-lg-3" src="./assets/img/bolanaranja.png" alt="Title">
                            <span class="text-center">Asiento libre</span>
                        </div>
                    </div>
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
</body>
</html>