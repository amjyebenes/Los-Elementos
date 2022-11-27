<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>

    <main class="fondoLogin device-padding">
        <!--Creo la caja grande para almacenar el resto  -->
        <section class="position-relative py-5 portfolio ">
           <!-- Creo el div donde meteremos el contenedor que almacena el formulario--> 
            <div class="container d-flex justify-content-center pt-5">
                <div class="row col-6 ">
                    <form action="" method="POST">
                        <div class="d-flex justify-content-center mt-5 mb-5">
                            <i class="fa-solid fa-user-group fa-6x text-info"></i>
                        </div>
                        <div class="mb-3 ">
                            <input type="email" class="form-control opacity-75" id="email" placeholder="Email" name="email">
                        </div>
                        <div class="mb-3">                    
                            <input type="password" class="form-control opacity-75" id="pwd" placeholder="Contraseña" name="pass">
                        <!-- Esto es el icono del ojo de la contraseña
                            <i class="fa-regular fa-eye-slash"></i> -->
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label text-white">
                            <input class="form-check-input" type="checkbox" name="remember"> Recuérdame
                            </label>
                        </div>
                        <div class="my-3">
                            <button type="submit" class="btn btn-outline-secondary text-white rounded-3">Iniciar Sesión</button>                 
                        </div>

                        <hr class="text-white fw-bold">

                        
                        <div class="mb-5">
                            <p type="button" class="text-white">¿Olvidaste tu contraseña?</p>
                            <label class="text-white">¿No tienes cuenta?
                            <a type="button" class="text-white text-decoration-underline" href="registro.php" target="_blank">Regístrate</a>
                            </label>
                        </div>                
                </form>
            </div>

            </div>
        </section>




    </main> 

<?php include("includes/footer.php");?>
<script src="./js/navbar.js"></script>
</body>
</html>