<?php include("includes/a_config.php"); ?>
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
                    <form action="" method="POST" class="formulario-contacto">
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
                            <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre" title="Debe de completar este campo" required>
                        </div>
                        <div class="mb-3">
                            <input type="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos" title="Debe de completar este campo" required>
                        </div>
                        <div class="mb-3">
                            <input type="codpos" class="form-control" id="CodPos" placeholder="Código Postal" name="CodPos" title="Código Postal incorrecto" 
                            pattern="^\d{5}$" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="name" title="Formato de email incorrecto" 
                            pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="pswd" placeholder="Repetir Contraseña" name="pswd" required>
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label text-white shadowText">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-white">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                            <input class="form-check-input" type="checkbox" name="remember">
                        </div>
                        <button type="submit" class="btn btn-outline-secondary rounded-3 text-white">Regístrate</button>
                        <div>
                            <label for="captcha">
                                <?php if (isset($_GET["captchaerror"]))
                                    echo "<p class='text-white'>Captcha erróneo. Vuelva a introducirlo</p>";
                                else
                                    echo "<p class='text-white'>Introduce el captcha</p>";
                                ?>
                            </label>
                            <br>
                            <img src="includes/generatecaptcha.php" alt="CAPTCHA" class="captcha-image"><i class="text-white fa-lg fas fa-redo refresh-captcha"></i><br><br>
                            <input type="text" id="captcha" name="captcha_challenge" pattern="[A-Z]{6}">
                            <button class="g-recaptcha btn btn-outline-secondary rounded-3 text-white " data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>NO SOY UN ROBOT</button>

                        </div><br>
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
                    <script>
                        var refreshButton = document.querySelector(".refresh-captcha");
                        refreshButton.onclick = function() {
                            document.querySelector(".captcha-image").src = 'includes/generatecaptcha.php?' + Date.now();
                        }
                    </script>
                </div>
            </div>
        </section>
    </main>
    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>