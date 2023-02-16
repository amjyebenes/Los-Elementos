<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once 'back-end/controlador/ControladorUsuario.php';
require_once 'back-end/controlador/ControladorCompras.php';
require_once 'back-end/controlador/ControladorEspectaculo.php';
require_once 'back-end/modelo/Compra.php';
require_once 'back-end/modelo/Espectaculo.php';

$banderaContrasena = false;
$banderaRegistro = false;
$user = ControladorUsuario::get($_SESSION['user_email_address']);
if (isset($_POST["enviar"])) {
    if ($user) {
        if ($_POST['newpass'] == $_POST['confirmpass']) {
            ControladorUsuario::cambiarContrasena($user->id, $_POST['newpass']);
        } else {
            $banderaContrasena = true;
        }
    } else {
        $banderaRegistro = true;
    }
}


$errorImagen = false;
$foto = false;
if($user){
    $foto = ControladorUsuario::getFotoPerfil($user->id);
}

if (isset($_POST['actualizarfoto'])) {
    $user = ControladorUsuario::get($_SESSION['user_email_address']);
    if ($user && isset($_FILES['imagenperfil']['name'])) {
            $nombre_archivo = time().$_FILES['imagenperfil']['name'];
            $ruta = "assets/img/imagenes/".$nombre_archivo;
            $archivo = $_FILES['imagenperfil']['tmp_name'];
            $foto = $ruta;
            move_uploaded_file($archivo,$ruta);
            ControladorUsuario::cambiarFotodePerfil($user->id, $ruta);
    }else{
        $errorImagen = true;
    }
}


// Historial de compras
$compras = ControladorCompras::getByUserId($user->id);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="my-md-5 device-padding">
        <?php
        if ($banderaRegistro) {
            include("includes/registermodal.php");
        } else if ($banderaContrasena) {
            include("includes/contrasenaerronea.php");
        }
        ?>
        <div class="container-fluid d-flex justify-content-center pt-md-4">
            <div class="row col">
                <h6 class="bg-primary p-1 mt-3 ps-4 rounded-top-3"><span class="text-white shadow">MI&nbsp&nbspZONA</span></h6>

                <div class="row mt-4 pt-4 justify-content-center">
                    <div class="col-6 col-md-3 ms-5 me-5 mb-4 d-flex">
                        <button class="rounded-3 border-top border-primary row col justify-content-center text-center" id="botonDatos" onclick="clickUsuario()">
                            <i class="fas fa-user fa-7x iconoCuenta mt-3 w100" id="iconoUsuario"></i>
                            <span class="text-primary mt-2 mb-3 h5" id="textoUsuario">Mis datos</span>
                        </button>
                    </div>
                    <div class="col-6 col-md-3 ms-5 me-5 mb-4 d-flex">
                        <button class="rounded-3 border-top border-primary row col justify-content-center text-center" id="botonCompras" onclick="clickCompras()">
                            <i class="fa-solid fa-basket-shopping fa-5x iconoCuenta mt-4 w-100" id="iconoCompras"></i>
                            <span class="text-primary mt-2 mb-3 h5" id="textoCompras">Mis compras</span>
                        </button>
                    </div>
                </div>

                <div class="pt-4 px-0 justify-content-center">
                    <div class="bg-primary p-1">
                    </div>
                </div>

                <div class="pt-4">
                    <div class="row col justify-content-between" id="divDatos">
                        <div class="col col-sm-4">
                            <div class="col">
                                <label class="h5 text-primary"><u>DATOS DE FACTURACION</u></label>
                                <div class="col">
                                    <div class="row align-items-baseline">
                                        <div class="col-7">
                                            <label class="text-left">NOMBRE: </>
                                        </div>
                                        <div class="col-5">
                                            <label class="text-center"><?php echo $_SESSION['user_first_name'] ?></label>
                                        </div>
                                    </div>
                                    <div class="row align-items-baseline">
                                        <div class="col-7">
                                            <label class="text-left">APELLIDOS: </label>
                                        </div>
                                        <div class="col-5">
                                            <label class="text-center"><?php echo $_SESSION['user_last_name'] ?></label>
                                        </div>
                                    </div>
                                    <div class="row align-items-baseline">
                                        <div class="col-7">
                                            <label class="text-left">IMAGEN: </label>
                                        </div>
                                        <div class="col-5">
                                            <label class="h6 text-center">
                                                <?php 
                                                if ($foto) 
                                                    echo '<img width="80" height="80" src=' . $foto . '>';
                                                else if(isset($_SESSION['user_image']))
                                                    echo '<img width="80" height="80" src=' . $_SESSION['user_image'] . '>';
                                                else
                                                    echo 'Sin imagen';


                                                if($errorImagen)
                                                    echo "ERROR AL SUBIR IMAGEN, INTENTE DE NUEVO";

                                                ?>
                                            </label>
                                        </div>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data" class="pb-3">
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="imagenperfil">
                                            <button class="btn btn-outline-secondary" type="submit" name="actualizarfoto" id="inputGroupFileAddon04">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8 row justify-content-center">
                            <form action="" method="POST">
                                <p class="h5  text-primary"><u>DATOS DE CUENTA</u></p>
                                <div class="col d-flex flex-column justify-content-between">
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="text-left">EMAIL: </label>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="email" class="opacity-50 text-center col-11" value="<?php if (isset($_SESSION['user_email_address'])) echo $_SESSION['user_email_address'];
                                                                                                                else echo "No especificado"; ?>">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="text-left">NUEVA CONTRASEÑA: </label>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="password" name="newpass" id="password" class="opacity-50 text-center col-11" required>
                                            <i class="bi bi-eye-slash col-1 ms-2" id="togglePassword"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <label class="text-left">CONFIRMAR CONTRASEÑA: </label>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="password" name="confirmpass" id="password2" class="opacity-50 text-center col-11" required>
                                            <i class="bi bi-eye-slash col-1 ms-2" id="togglePassword2"></i>
                                        </div>
                                        <div class="row justify-content-end pt-2 col-12">
                                            <button type="submit" class="btn btn-primary rounded-5 col col-sm-10 col-xl-3" name='enviar'>Guardar cambios</button>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </div>

                </div>


                <div class="pt-4">
                    <div class="row col justify-content-center" id="divCompras">
                        <?php
                        if ($compras) {
                            foreach ($compras as $compra) {
                                $concierto = ControladorEspectaculo::get($compra->id_espectaculo);
                                ?>
                                <div class="row shadow mb-4 px-0">
                                    <div class="col-5 col-md-2 p-0 d-flex align-items-center ">
                                        <img class="shadow-lg card-img" src="data:jpg;base64,<?php echo base64_encode($concierto->imagen); ?>" alt="Title">
                                    </div>
                                    <div class="row col col-md-10">
                                        <div class="col-12 col-sm">
                                            <div class="row">
                                                <p class="h2 text-primary"><?php echo $concierto->titulo; ?></p>
                                                <div class="col">
                                                    <p class="h5"><?php echo $concierto->fecha; ?></p>
                                                    <h6 class="text-primary">
                                                        <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                                        <?php echo $concierto->ubicacion; ?>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md d-flex align-items-center justify-content-center mb-2 m-1">
                                            <div class="row align-items-center">
                                                <label class="col justify-content-center align-items-end pr-3 text-center">
                                                    x<?php echo $compra->tickets; ?>: <span class="h5"><?php echo $compra->importe; ?> €</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>Todavía no has realizado ninguna compra.</p>";
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <?php include("includes/footer.php"); ?>

    <script src="./js/micuenta.js"></script>
    <script src="./js/navbar.js"></script>
    <script src="./js/password_eye.js"></script>
</body>

</html>