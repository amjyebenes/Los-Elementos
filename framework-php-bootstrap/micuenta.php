<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main class="my-5">

    <div class="container pt-4">
        <div class="row pt-4">
            <h6 class="bg-primary p-1 ps-4"><span class="text-white shadow">MI&nbsp&nbspZONA</span></h6>
        </div>
        <div class="row mt-4 pt-4 d-flex justify-content-center p-3">
            <div class="col ms-4 me-5 mb-4 d-flex cajaMiCuenta rounded-3 ">
                <div class="row col justify-content-center text-center ">
                    <i class="fas fa-user fa-7x iconoCuenta mt-3 w100"></i>
                    <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis datos</span>
                </div>
            </div>
            <div class="col ms-4 me-5 mb-4 d-flex cajaMiCuenta rounded-3">
                <div class="row col justify-content-center text-center">
                    <i class="fas fa-truck fa-6x iconoCuenta mt-3 w100"></i>
                    <span class="text-primary mt-2 mb-3 h5 tituloArtista">Direccion de envio</span>
                </div>
            </div>
            <div class="col ms-4 me-5 mb-4 d-flex cajaMiCuenta rounded-3">
                <div class="row col justify-content-center text-center">
                    <i class="fa-solid fa-basket-shopping fa-5x iconoCuenta mt-4 w-100"></i>
                    <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis compras</span>
                </div>
            </div>
            <div class="col ms-4 me-5 mb-4 d-flex cajaMiCuenta rounded-3">
                <div class="row col justify-content-center text-center">
                    <i class="fa-solid fa-bell fa-5x iconoCuenta mt-4 w100"></i>
                    <span class="text-primary mt-2 mb-3 h5 tituloArtista">Notificaciones</span>
                </div>
            </div>
        </div>
        
        <div class="nav navbar container">
            <div class="nav-lineOrange position-relative bottom-0"></div>
        </div>

    </div>


</main>

<?php include("includes/footer.php");?>

</body>
</html>