<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>
<?php include("includes/navigation.php");?>

<main class="fondoContacto">
<!-- Contact Section-->
<section class="page-section-contact">
        <div class="container">
            <!-- Icon -->
            <div class="w-25 mx-auto text-light text-center">
                <div><i class="fa-solid fa-info fs-2 bg-info rounded-4 px-4 py-3 mb-1"></i></div>
            </div>
            <!-- Contact Section Heading-->
            <h2 class=" text-uppercase text-light text-center text-sm-start my-5 shadowText">Contacta con nosotros</h2>

            <!-- Contact Section Form-->
            <div class="row justify-content-center text-center text-sm-start my-4">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control bg-light opacity-75" placeholder="Nombre">
                        </div>
                        <div class="col-md-4 my-3 my-md-0">            
                            <input type="text" class="form-control bg-light opacity-75" placeholder="Email">
                        </div>
                        <div class="col-md-4">            
                            <input type="text" class="form-control bg-light opacity-75" placeholder="Nº Pedido (Opcional)">
                        </div>
                    </div>
                    <div class="form-group">                    
                        <textarea class="form-control my-4 py-5 bg-light opacity-75 resize-none " placeholder="Escribe tu consulta aqui..."></textarea>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember"><label class="form-check-label text-white shadowText">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-white">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                    </div>

                    <input type="submit" class="btn btn-outline-secondary rounded-3 text-white px-5 mt-4" placeholder="Enviar">
                </form>
            </div>
        </div>
  </section>
</main>
<?php include("includes/footer.php");?>

</body>
</html>