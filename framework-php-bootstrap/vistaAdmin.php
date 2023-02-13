<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
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
    if (!empty($_FILES['imagenUsuario']['name'])) {
        $nombre_archivo = time() . $_FILES['imagenUsuario']['name'];
        $ruta = "assets/img/imagenes/" . $nombre_archivo;
        $archivo = $_FILES['imagenUsuario']['tmp_name'];
        move_uploaded_file($archivo, $ruta);
    }
    $exito = ControladorUsuario::actualizarUsuario($_POST['idUser'], $_POST['nombre'], $_POST['apellido'], $_POST['correo'], $ruta);
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

    <?php include("includes/navigation.php"); ?>
    <main class="device-padding">
        <!-- Portfolio Section-->
        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <div class="px-0">
                <!-- Portfolio Section Heading-->
                <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3 text-start">ADMINISTRAR USUARIOS</h1>
                <!-- Icon Divider-->
            </div>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>

        <section>
            <div class="container-fluid mb-4 d-flex flex-column gap-4">
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="shadow w-100 d-flex">
                            <div class="d-flex flex-row align-items-center gap-2 justify-content-center">
                                <span class="text-primary">Imagen:
                                    <img class="" width="150" heigth="150" src="<?php echo ($usuario->imagen); ?>" alt="Title">
                                </span>
                                <input type="file" class="form-control" name="imagenUsuario">
                                <span class="text-primary">Nombre:<input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>"></span>

                                <span class="text-primary">Apellido:
                                    <input type="text" name="apellido" value="<?php echo $usuario->apellido1 ?>">
                                </span>
                                <span class="text-primary">
                                    <i class="fa-solid fa-at"></i></i>
                                    Correo:<input type="text" name="correo" value="<?php echo $usuario->correo; ?>">
                                </span>
                                <span class="text-primary">
                                    <i class="fa-regular fa-address-book"></i></i>
                                    Rol:<input type="text" name="rol" value="<?php echo $usuario->rol; ?>">
                                </span>
                                <div class="justify-content-center d-flex flex-column p-3">
                                    <input type="submit" name="guardar" class="btn btn-primary rounded-3 m-1" value="Guardar cambios">
                                    <input type="hidden" name="idUser" value="<?php echo $usuario->id; ?>">
                                    <input type="submit" name="eliminar" class="btn btn-secondary rounded-3 m-1" value="Eliminar usuario">
                                </div>
                            </div>
                        </div>
                    </form>
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