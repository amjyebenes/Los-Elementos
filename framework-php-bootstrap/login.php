<?php 
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>

    <main class="fondoLogin device-padding pb-5">
        <!--Creo la caja grande para almacenar el resto  -->
        <section class="position-relative py-md-5 py-2 portfolio">
           <!-- Creo el div donde meteremos el contenedor que almacena el formulario--> 
            <div class="container d-flex justify-content-center py-5">
                <div class="row col-md-6 col-12 pb-3">
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
                        <div class="d-flex flex-column gap-2 align-items-center d-md-block mb-3 mb-md-0">
                            <div class="form-check">
                                <label class="form-check-label text-white">
                                <input class="form-check-input" type="checkbox" name="remember"> Recuérdame
                                </label>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary text-white rounded-3">Iniciar Sesión</button>
                        </div>

                        <div class="b-line w-100 bg-light opacity-25 my-2"></div>

                        
                        <div class="mb-5 row justify-content-between align-items-center flex-column flex-md-row">
                            <div class="col-12 col-md-5 text-center text-md-start">
                                <p type="button" class="text-white mb-1">¿Olvidaste tu contraseña?</p>
                                <label class="text-white">¿No tienes cuenta?
                                <a type="button" class="text-white text-decoration-underline" href="registro.php">Regístrate</a>
                            </div>
                            <?php	
                            echo '<div class="col-10 col-md-5 mt-2 mt-md-0">'.$login_button . '</div>';
                            ?>
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