<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
    <main class="device-padding">
        <section class="pt-md-5 mt-md-5 mb-0">
            <div class="container-fluid">
                <!-- Cesta Section Heading-->
                <h1 class="text-uppercase m-0">Resumen de la compra</h1>
                <!-- Divider top-->
                <hr class="opacity-50 mt-1 mb-4">
                <!-- Entrada -->
                <div class="row py-3">
                    <div class="col-12 row mx-1">
                        <div class="col-4">
                            <img class="card-img" src="./assets/img/borisbrejcha.jpg">
                        </div>
                        <div class="col-8 row fw-bold fs-5 align-items-center shadow">
                            <div class="col-10">
                                <p class="pb-5 pt-0">22/02/2023</p>
                                <p>2 x Boris Brejcha · Brunch In The Park · Barcelona</p>
                            </div>
                            <div class="col-2 pt-5">
                                <p class="mt-5">56.00€</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Entrada -->
                <div class="row py-3">
                    <div class="col-12 row mx-1">
                        <div class="col-4">
                            <img class="shadow-lg card-img" src="./assets/img/cruzzi.jpg">
                        </div>
                        <div class="col-8 row fw-bold fs-5 align-items-center shadow">
                            <div class="col-10">
                                <p class="pb-5 pt-0">01/02/2025</p>
                                <p>5 x Cruz Cafuné · Sala París · Málaga</p>
                            </div>
                            <div class="col-2 pt-5">
                                <p class="mt-5">120.00€</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider bottom-->
                <hr class="opacity-50 my-4">

                <div class="row fw-bold pt-4 pb-5">
                    <div class="col-8">
                        <a href="index.php"><button class="btn btn-outline-primary bg-info text-primary rounded-3"><i class="fa-solid fa-arrow-left"></i> Seguir comprando</button></a>
                    </div>
                    <div class="col-4 row">
                        <p class="col-6">Total 176.00€</p>
                        <a href="pago.php" class="col-6"><button class="btn btn-primary rounded-3">Acceder al pago</button></a>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

<?php include("includes/footer.php");?>

</body>
</html>