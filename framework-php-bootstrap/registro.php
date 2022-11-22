<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main class="fondoLogin">
<!-- Section-->
<section class="page-section">
    <div class="container">
        <!--div para meter el icono awesome -->
        <!-- div para emoticonos y texto awesome-->
        <!-- div para emoticonos y texto awesome-->
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <input type="nombre" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
            </div>
            <div class="mb-3">
                <input type="apellidos" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
            </div>
            <div class="mb-3">
                <input type="codpos" class="form-control" id="CodPos" placeholder="Código Postal" name="CodPos">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Contraseña" name="pswd">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="pwd" placeholder="Repetir Contraseña" name="pswd">
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label text-white">Acepto los Términos y Cóndiciones de Uso & Política y Privacidad
                <input class="form-check-input" type="checkbox" name="remember">
                </label>
            </div>


            
            <button type="submit" class="btn btn-primary bg-secondary">Regístrate</button>

            <div class="nav navbar container ">
                <div class="nav-line position-relative bottom-0 bg-white"></div>
            </div>

            <div class="mb-3">
                        <label class="text-white">¿Ya estás registrada/o?
                        <a type="button" class="text-white" href="login.php" target="_blank">Inicia Sesión</a>

                        </label>
            </div>


            </form>
</section>

</main>

<?php include("includes/footer.php");?>

</body>
</html>