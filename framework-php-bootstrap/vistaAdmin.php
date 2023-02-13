<?php
include('back-end/controlador/Conexion.php');
include('back-end/controlador/ControladorUsuario.php');

$banderaEliminado = false;
if (isset($_POST['eliminar'])) {
    $exito = ControladorUsuario::delete($_POST['idUser']);
    if ($exito) {
        $banderaEliminado = true;
    }
}
$banderaModificado = false;
if (isset($_POST['guardar'])) {
    $ruta = ControladorUsuario::getUser($_POST['idUser'])->imagen;
    if(!empty($_FILES['imagenUsuario']['name'])){
        $nombre_archivo = time().$_FILES['imagenUsuario']['name'];
        $ruta = "assets/img/imagenes/".$nombre_archivo;
        $archivo = $_FILES['imagenUsuario']['tmp_name'];
        move_uploaded_file($archivo,$ruta);
    }
    $exito = ControladorUsuario::actualizarUsuario($_POST['idUser'],$_POST['nombre'], $_POST['apellido'], $_POST['correo'], $ruta);
    if ($exito) {
        $banderaModificado = true;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <div class="col-2 text-center">
        <a class="navbar-brand p-0 m-0" href="index.php"><img src="../assets/img/Logo-web00.png" alt="" class="img-fluid" width="60%"></a>
    </div>
    <main class="device-padding">
        <!-- Portfolio Section-->
        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <div class="px-0">
                <!-- Portfolio Section Heading-->
                <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3">USUARIOS</h1>
                <!-- Icon Divider-->
            </div>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>

        <section>
            <div class="container-fluid mb-4 d-flex flex-column gap-5">
                <?php
                if ($banderaEliminado) {
                    echo '<div class="alert alert-success" role="alert">
                            Usuario eliminado correctamente
                        </div>';
                    $banderaEliminado = false;
                }

                if ($banderaModificado) {
                    echo '<div class="alert alert-success" role="alert">
                            Usuario modificado correctamente
                        </div>';
                    $banderaModificado = false;
                }


                $usuarios = ControladorUsuario::getAll();
                foreach ($usuarios as $usuario) {
                ?>
                    <div class="shadow">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="">
                                <div class="shadow">
                                    Imagen:<img class="" width="150" heigth="150"src="<?php echo ($usuario->imagen); ?>" alt="Title">
                                </div>
                                <input type="file" name="imagenUsuario">
                            </div>
                            <div class="">
                                <div class="row">
                                    <p class="h1 text-primary ">Nombre:<input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>"></p>
                                    <div class="col pb-1">
                                        <!-- Formato 22 · OCT · 2022 -->
                                        <!--<p class="h5"><?php echo "Username:" . $usuario->apellido1 ?></p>-->
                                        <!-- Formato DIA - 00:00 -->
                                        <h6>Apellido:<input type="text" name="apellido" value="<?php echo $usuario->apellido1 ?>"><h6>
                                                <h6 class="text-primary">
                                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                                    Correo:<input type="text" name="correo" value="<?php echo $usuario->correo; ?>">
                                                </h6>
                                                <h6 class="text-primary">
                                                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                                    Rol:(administrador, editor, valorador)<input type="text" name="correo" value="<?php echo $usuario->rol; ?>">
                                                </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="col d-flex justify-content-center pb-4">

                                    <input type="submit" name="guardar" class="btn btn-primary rounded-3" value="Guardar cambios">
                                    <input type="hidden" name="idUser" value="<?php echo $usuario->id; ?>">
                                    <input type="submit" name="eliminar" class="btn btn-secondary rounded-3" value="Eliminar usuario">

                                </div>
                            </div>
                        </form>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>