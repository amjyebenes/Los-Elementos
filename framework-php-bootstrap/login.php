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
            <div class="container">
            <!--Meto el icono fontawesome-->

            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form>
                        <!--Div para añadir el email -->
                        <div class = "form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                            data-sb-validations="required,email" />
                            <label for="email">Email</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!--Div para añadir la contraseña -->
                        <div class = "form-floating mb-3">
                            <input class="form-control" id="pass" type="pass" placeholder="Password"
                            data-sb-validations="required,email" />
                            <label for="pass">Contraseña</label>
                            <!-- Falta el icono para esconder o no la contraseña-->
                            <div class="invalid-feedback" data-sb-feedback="contraseña:required">Introduzca contraseña</div>                            
                        </div>

                        <!-- Div para botón iniciar sesión-->
                        
                    </form>
                </div>  

            </div>

            
        </section>




    </main> 

<?php include("includes/footer.php");?>

</body>
</html>