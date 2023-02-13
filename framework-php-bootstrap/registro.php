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
    <main class="fondoLogin">
        <!--Creo la caja grande para almacenar el resto  -->
        <section class="position-relative py-5">
            <!-- Creo el div donde meteremos el contenedor que almacena el formulario-->
            <div class="container d-flex justify-content-center pt-5">
                <div class="row col-md-6 col-12">
                    <form action="/register.php" method="POST" class="formulario-contacto">
                        <div class="d-flex justify-content-center mt-5 mb-5">
                            <i class="fa-solid fa-user-plus fa-6x text-info"></i>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="fa-solid fa-ticket text-white"></i>
                            <label class="text-white">Consigue entradas antes que nadie en nuestra preventa</label>
                        </div>
                        <div class="d-flex align-items-center gap-2 mb-3">
                            <i class="fa-regular fa-envelope text-white"></i>
                            <label class="text-white">Recibe nuestra newsletter y correos accerca de nuestros últimos festivales y eventos</label>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="usuario" placeholder="Nombre de usuario" name="username" title="Debe de completar este campo" required 
                            value="<?php if (isset($_SESSION['username'])) echo $_SESSION['username']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="firstname" required 
                            value="<?php if (isset($_SESSION['firstname'])) echo $_SESSION['firstname']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="apellido1" placeholder="Primer apellido" name="lastname1" title="Debe de completar este campo" required 
                            value="<?php if (isset($_SESSION['lastname1'])) echo $_SESSION['lastname1']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="apellido2" placeholder="Segundo apellido" name="lastname2" title="Debe de completar este campo" required 
                            value="<?php if (isset($_SESSION['lastname2'])) echo $_SESSION['lastname2']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="imagen" class="text-white w-50">Elija una foto de perfil:</label>
                            <input type="file" class="form-control" id="imagen" placeholder="Repetir Contraseña" name="imagen"  
                            value="<?php if (isset($_SESSION['imagen'])) echo $_SESSION['imagen']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" title="Formato de email incorrecto" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required 
                            value="<?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
                        </div>
                        <div class="mb-3 d-flex gap-2 align-items-center">
                            <label for="fechaNac" class="text-white w-50">Fecha de nacimiento:</label>
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" required 
                            value="<?php if (isset($_SESSION['fechaNac'])) echo $_SESSION['fechaNac']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="pais" placeholder="País" name="pais" required 
                            value="<?php if (isset($_SESSION['pais'])) echo $_SESSION['pais']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="tlfn" placeholder="Teléfono" name="tlfn" required 
                            value="<?php if (isset($_SESSION['tlfn'])) echo $_SESSION['tlfn']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="codPos" placeholder="Código Postal" name="CodPos" title="Código Postal incorrecto" pattern="^\d{5}$" required 
                            value="<?php if (isset($_SESSION['CodPos'])) echo $_SESSION['CodPos']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw" required 
                            value="<?php if (isset($_SESSION['psw'])) echo $_SESSION['psw']; ?>">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="pswd" placeholder="Repetir Contraseña" name="pswd" required 
                            value="<?php if (isset($_SESSION['pswd'])) echo $_SESSION['pswd']; ?>">
                        </div>

                        <div class="form-check mb-3">
                            <label class="form-check-label text-white shadowText">He leído y acepto la 
                                <a href="terminosYcondiciones.php" class="text-decoration-underline text-white">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                            <input class="form-check-input" type="checkbox" name="remember">
                        </div>

                        <div>
                            <label for="captcha">
                                <?php if (isset($_GET["captchaerror"]))
                                    echo "<p class='text-white'>Captcha erróneo. Vuelva a introducirlo</p>";
                                else
                                    echo "<p class='text-white'>Introduce el captcha</p>";
                                ?>
                            </label>
                            <br>
                            <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image">
                            <i class="text-white fa-lg fas fa-redo refresh-captcha" onclick="refreshCaptcha()"></i><br><br>
                            <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                            
                           <!-- <button class="g-recaptcha btn btn-outline-secondary rounded-3 text-white " data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>NO SOY UN ROBOT</button>-->

                        </div><br>
                        <button type="submit" class="btn btn-outline-secondary rounded-3 text-white">Regístrate</button>

                        <div class="b-line w-100 bg-light opacity-25 mt-3"></div>
                        <div class="nav navbar container">
                            <div class="nav-line position-relative bottom-0 bg-white"></div>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">¿Ya estás registrada/o?
                                <a type="button" class="text-white text-decoration-underline" href="login.php" target="">Inicia Sesión</a>
                            </label>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script>
        function refreshCaptcha() {
            document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
        }
    </script>
</body>

</html>