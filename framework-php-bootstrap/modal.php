<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>



    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Regístrate
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">

                <div class="modal-body">
                    <div class="d-flex justify-content-end">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST">
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
                            <label class="form-check-label text-black">He leído y acepto la <a href="terminosYcondiciones.php" class="text-decoration-underline text-black">Política de privacidad</a> y autorizo el tratamiento de mis datos personales</label>
                            <input class="form-check-input" type="checkbox" name="remember">
                        </div>
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
</body>

</html>