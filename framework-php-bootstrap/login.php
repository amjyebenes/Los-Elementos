<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
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
                            <i class="fa-solid fa-user-group fa-6x iconoLogin"></i>
                        </div>
                        <div class="mb-3 ">
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">                    
                            <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pass">
                        <!-- Esto es el icono del ojo de la contraseña
                            <i class="fa-regular fa-eye-slash"></i> -->
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label text-white">
                            <input class="form-check-input" type="checkbox" name="remember"> Recuérdame
                            </label>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-outline-primary bg-secondary text-white rounded-3">Iniciar Sesión</button>
                            <p type="button" class="text-white">¿Olvidaste tu contraseña?</p>
                        </div>
                        <div class="mb-3">
                            <label class="text-white">¿No tienes cuenta?
                            <a type="button" class="text-white" href="registro.php" target="_blank">Regístrate</a>
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