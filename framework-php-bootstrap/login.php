<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
include('back-end/controlador/ControladorUsuario.php');

$flagNotFoundWrongPass = false;
if (isset($_POST['iniciar'])) {
    if (isset($_POST['remember'])) {
        setcookie('correologin', $_POST['email']);
        setcookie('passlogin', $_POST['pass']);
    } else {
        setcookie('correologin', $_POST['email'], time() - 1);
        setcookie('passlogin', $_POST['pass'], time() - 1);
    }

    $user = ControladorUsuario::get($_POST['email']);

    if ($user) {
        if ($user->pass == md5($_POST['pass'])) {
            $_SESSION['username'] = $user->usuario;
            $_SESSION['user_first_name'] = $user->nombre;
            $_SESSION['user_last_name'] = $user->apellido1 . " " . $user->apellido2;
            $_SESSION['user_email_address'] = $user->correo;
            $_SESSION['fechaNac'] = $user->fecha_nac;
            $_SESSION['pais'] = $user->pais;
            $_SESSION['tlfn'] = $user->telefono;
            $_SESSION['CodPos'] = $user->cod_postal;
            $_SESSION['pswd'] = $user->pass;
            $_SESSION['user_image'] = $user->imagen;

            header('location:index.php?login=true');
        } else {
            $flagNotFoundWrongPass = true;
        }
    } else {
        $flagNotFoundWrongPass = true;
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <main class="fondoLogin device-padding pb-5">
        <?php
        if (isset($_GET['logueate'])) {
            echo   '<div id="alerta" name="alerta" class="alerta alert bg-primary border border-2 border-dark h6 position-absolute posicionAlertaIndex translate-middle" role="alert">
                        Inicia sesión para continuar con tu compra.
                    </div>';
        }
        ?>
        <!--Creo la caja grande para almacenar el resto  -->
        <section class="position-relative py-md-5 py-2 portfolio">
            <!-- Creo el div donde meteremos el contenedor que almacena el formulario-->
            <div class="container d-flex justify-content-center py-5">
                <div class="row col-md-6 col-12 pb-3">
                    <form action="login.php" method="POST">
                        <div class="d-flex justify-content-center mt-5 mb-5">
                            <i class="fa-solid fa-user-group fa-6x text-info"></i>
                        </div>
                        <div class="mb-3 ">
                            <?php
                            if ($flagNotFoundWrongPass) {
                                echo   '<div class="alert alert-danger h6" role="alert">
                                            Email o contraseña incorrectos.
                                        </div>';

                                $flagNotFoundWrongPass = false;
                            }
                            ?>
                        </div>
                        <div class="mb-3 ">
                            <label for="email">Email</label>
                            <input type="email" class="form-control opacity-75" id="email" placeholder="Email" name="email" value="<?php
                                                                                                                                    if (!empty($_COOKIE['correologin']))
                                                                                                                                        echo $_COOKIE['correologin'];
                                                                                                                                    ?>">
                        </div>
                        <div class="mb-3">
                            <label for="pass">Contraseña</label>
                            <input type="password" class="form-control opacity-75" id="pass" placeholder="Contraseña" name="pass" value="<?php
                                                                                                                                            if (!empty($_COOKIE['passlogin']))
                                                                                                                                                echo $_COOKIE['passlogin'];
                                                                                                                                            ?>">
                            <!-- Esto es el icono del ojo de la contraseña
                            <i class="fa-regular fa-eye-slash"></i> -->
                        </div>
                        <div class="d-flex flex-column gap-2 align-items-center d-md-block mb-3 mb-md-0">
                            <div class="form-check">
                                <label class="form-check-label text-white">
                                    <input class="form-check-input" type="checkbox" name="remember"> Recuérdame
                                </label>
                            </div>
                            <button type="submit" name="iniciar" class="btn btn-outline-secondary text-white rounded-3">Iniciar Sesión</button>
                        </div>

                        <div class="b-line w-100 bg-light opacity-25 my-2"></div>


                        <div class="mb-5 row justify-content-between align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-5 text-center text-md-start">
                                <p type="button" class="text-white mb-1">¿Olvidaste tu contraseña?</p>
                                <label class="text-white">¿No tienes cuenta?
                                    <a type="button" class="text-white text-decoration-underline" href="registro.php">Regístrate</a>
                            </div>
                            <?php
                            echo '<div class="col-10 col-md-5 mt-2 mt-md-0">' . $login_button . '</div>';
                            ?>
                            </label>
                        </div>
                    </form>
                </div>

            </div>
        </section>




    </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/alerta.js"></script>
</body>

</html>