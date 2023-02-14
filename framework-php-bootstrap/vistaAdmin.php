<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
include('back-end/controlador/Conexion.php');
include('back-end/controlador/ControladorUsuario.php');
include('back-end/controlador/ControladorValoracion.php');
include('back-end/controlador/ControladorEspectaculo.php');
// include('back-end/modelo/Valoracion.php');
// include('back-end/modelo/Espectaculo.php');
// include('back-end/modelo/Usuario.php');

$stateChanged = false;
if (isset($_POST['eliminar'])) {
    if (isset($_POST['idUser'])) {
        $exito = ControladorUsuario::delete($_POST['idUser']);
        if ($exito) {
            $stateChanged = "Usuario eliminado correctamente";
        }
    }

    if (isset($_POST['idVal'])) {
        $exito = ControladorValoracion::delete($_POST['idVal']);
        if ($exito) {
            $stateChanged = "Valoración eliminada correctamente";
        }
    }
}

if (isset($_POST['guardar'])) {
    if (isset($_POST['idUser'])) {
        $ruta = ControladorUsuario::getUser($_POST['idUser'])->imagen;
        if (!empty($_FILES['imagenUsuario']['name'])) {
            $nombre_archivo = time() . $_FILES['imagenUsuario']['name'];
            $ruta = "assets/img/imagenes/" . $nombre_archivo;
            $archivo = $_FILES['imagenUsuario']['tmp_name'];
            move_uploaded_file($archivo, $ruta);
        }
        $exito = ControladorUsuario::actualizarUsuario($_POST['idUser'], $_POST['nombre'], $_POST['apellido'], $_POST['correo'], $ruta);
        if ($exito) {
            $stateChanged = "Usuario actualizado correctamente";
        }
    }

    if (isset($_POST['idVal'])) {
        $exito = ControladorValoracion::actualizarValoracion($_POST['idVal'], $_POST['id_user'], $_POST['id_espec'], $_POST['valoracion'], $_POST['comentario']);
        if ($exito) {
            $stateChanged = "Valoración actualizada correctamente";
        }
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
                if ($stateChanged) {
                    echo '<div class="alert alert-success" role="alert">
                            '.$stateChanged.'
                        </div>';
                    $stateChanged = false;
                }

                $usuarios = ControladorUsuario::getAll();
                foreach ($usuarios as $usuario) {
                ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="shadow w-100 d-flex">
                            <div class=" row align-items-center gap-1 justify-content-center">
                                <span class="text-primary col-2">
                                    <img class="img-fluid" src="<?php echo ($usuario->imagen); ?>" alt="Title">
                                </span>
                                <span class="text-primary col">
                                    <input type="file" class="form-control" name="imagenUsuario">
                                </span>
                                <span class="text-primary col-1 d-flex flex-column">Nombre:<input type="text" name="nombre" value="<?php echo $usuario->nombre; ?>"></span>

                                <span class="text-primary col-1 d-flex flex-column">Apellido:
                                    <input type="text" name="apellido" value="<?php echo $usuario->apellido1 ?>">
                                </span>
                                <span class="text-primary col-1 d-flex flex-column">
                                    <span><i class="fa-solid fa-at"></i>Correo:</span>
                                    <input type="text" name="correo" value="<?php echo $usuario->correo; ?>">
                                </span>
                                <span class="text-primary col-1 d-flex flex-column">
                                    <span><i class="fa-regular fa-address-book"></i>Rol:</span>
                                    <input type="text" name="rol" value="<?php echo $usuario->rol; ?>">
                                </span>
                                <div class="justify-content-center d-flex flex-column p-3 col-2">
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

        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <div class="px-0">
                <!-- Portfolio Section Heading-->
                <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3 text-start">ADMINISTRAR VALORACIONES</h1>
                <!-- Icon Divider-->
            </div>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>

        <section class="section-padding">
            <div class="container-fluid mb-4 d-flex flex-column gap-4">
                <?php
                
                $valoraciones = ControladorValoracion::getAll();
                foreach ($valoraciones as $val) {
                    $user = ControladorUsuario::getUser($val->id_usuario);
                    $espec = ControladorEspectaculo::get($val->id_espectaculo);
                ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="shadow w-100 d-flex">
                            <div class="row align-items-center gap-1 justify-content-between">
                                <span class="text-primary col-2">
                                    <img class="shadow-lg img-fluid" src="data:jpg;base64,<?php echo base64_encode($espec->imagen); ?>" alt="Title">
                                </span>
                                <span class="text-primary col-1 d-flex flex-column">Usuario:<input type="text" name="usuario" disabled value="<?php echo $user->usuario; ?>"></span>

                                <span class="text-primary col-2">Espectaculo:
                                    <input type="text" name="espec" disabled value="<?php echo $espec->titulo ?>">
                                </span>
                                <span class="text-primary col-1 d-flex flex-column">
                                    Valoración:<input type="number" min="1" max="5" name="valoracion" value="<?php echo $val->valoracion; ?>">
                                </span>
                                <span class="text-primary col-3 d-flex flex-column">
                                    Comentario:<textarea name="comentario"><?php echo $val->comentario; ?></textarea>
                                </span>
                                <div class="justify-content-center d-flex flex-column p-3 col-2">
                                    <input type="hidden" name="id_user" value="<?php echo $user->id; ?>">
                                    <input type="hidden" name="id_espec" value="<?php echo $espec->id; ?>">
                                    <input type="submit" name="guardar" class="btn btn-primary rounded-3 m-1" value="Guardar cambios">
                                    <input type="hidden" name="idVal" value="<?php echo $val->id; ?>">
                                    <input type="submit" name="eliminar" class="btn btn-secondary rounded-3 m-1" value="Eliminar valoración">
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