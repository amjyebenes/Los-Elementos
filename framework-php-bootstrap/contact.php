<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once './back-end/controlador/ControladorContacto.php';
require_once './back-end/modelo/Contacto.php';

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>
    <?php include("includes/navigation.php");

    if (isset($_POST['enviar'])) {
        $cont = new Contacto($_POST['nombre'], $_POST['email'], $_POST['consulta']);
        ControladorContacto::put($cont);
        $exito = true;
    ?>

    <?php
    }

    ?>

    <main class="fondoContacto device-padding pb-5">
        <!-- Contact Section-->
        <section class="page-section-contact">
            <!--Aviso de que se ha enviado con éxito la consulta -->
            <?php
            if (isset($exito)) {
            ?>
                <div class="alert alert-success" role="alert">
                    Consulta enviada con éxito
                </div>
            <?php
            }
            ?>
            <div class="container-fluid">

                <!-- Icon -->
                <div class="w-25 mx-auto text-light text-center">
                    <div><i class="fa-solid fa-info fs-2 bg-info rounded-4 px-4 py-3 mb-1"></i></div>
                </div>
                <!-- Contact Section Heading-->
                <h2 class=" text-uppercase text-dark text-center text-md-start my-5 shadowText">Contacta con nosotros</h2>

                <!-- Contact Section Form-->
                <div class="row justify-content-center text-center text-md-start my-4">
                    <form class="col-12" action="" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="nombre" class="d-none">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control bg-light opacity-75" required placeholder="Nombre">
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <label for="email" class="d-none">Email</label>
                                <input type="text" name="email" id="email" class="form-control bg-light opacity-75" required placeholder="Email">
                            </div>
                            <!--  <div class="col-md-4">            
                            <input type="text" class="form-control bg-light opacity-75" placeholder="Nº Pedido (Opcional)">
                        </div> -->
                        </div>
                        <div class="form-group py-2">
                            <textarea class="form-control my-4 py-5 bg-light opacity-75 resize-none " name="consulta" required placeholder="Escribe tu consulta aqui..."></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember"><label class="form-check-label text-white shadowText">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-white">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                        </div>

                        <input type="submit" name="enviar" class="btn btn-outline-secondary rounded-3 text-white px-5 mt-4" placeholder="Enviar">
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>