<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/navigation.php");?>
            <main class="fondoLogin">
                <!--Creo la caja grande para almacenar el resto  -->
                <section class="page-section">
                <!-- Creo el div donde meteremos el contenedor que almacena el formulario--> 
                        <div class="container d-flex justify-content-center">
                            <div class="row col-6 ">
                                <form action="" method="POST">
                                <div class="d-flex justify-content-center mt-5 mb-5">
                                    <i class="fa-solid fa-user-plus fa-6x iconoLogin"></i>
                                    
                                </div>

                                
                                    <div class="mt-5 mb-3">
                                        <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                                    </div>
                                    <div class="mb-3">
                                        <input type="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
                                    </div>
                                    <div class="mb-3">
                                        <input type="codpos" class="form-control" id="CodPos" placeholder="Código Postal" name="CodPos">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="psw">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" id="pwd" placeholder="Repetir Contraseña" name="pswd">
                                    </div>
                                    <div class="form-check mb-3">
                                        <a class="button" class="text-white" href="terminosYcondiciones.php " target="_blank">Acepto los Términos y Cóndiciones de Uso & Política y Privacidad
                                        <input class="form-check-input" type="checkbox" name="remember">
                                        </label>
                                    </div>                                    
                                    <button type="submit" class="btn btn-primary bg-secondary">Regístrate</button>
                                    <div class="nav navbar container">
                                        <div class="nav-line position-relative bottom-0 bg-white"></div>
                                    </div>
                                    <div class="mb-3">
                                                <label class="text-white">¿Ya estás registrada/o?
                                                    <a type="button" class="text-white" href="login.php" target="_blank">Inicia Sesión</a>

                                                </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                </section>
            </main>

        <?php include("includes/footer.php");?>

    </body>
</html>