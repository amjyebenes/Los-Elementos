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
                <div class="b-line w-100 bg-dark my-4"></div>
                <!-- Entrada -->
                <div class="row py-3">
                    <div class="col-12">
                        <div class="row mx-1 px-0 justify-content-center">
                            <div class="col-md-2 px-0">
                                <img class="card-img h-100" src="./assets/img/borisbrejcha.jpg">
                            </div>
                            <div class="col-md-10">
                                <div class="row h-100 fw-bold fs-5 align-items-center shadow p-3">
                                    <div class="col-md-10 pt-3 pt-md-0 ps-md-5">
                                        <p class="pb-md-5 pt-0">22/02/2023</p>
                                        <p>2 x Boris Brejcha · Brunch In The Park · Barcelona</p>
                                    </div>
                                    <div class="col-md-2 pt-md-5">
                                        <p class="mt-md-5">56.00€</p>
                                    </div>
                                </div>    
                            </div>
                        </div>    
                    </div>
                </div>
                <!-- Entrada -->
                <div class="row py-3">
                    <div class="col-12">
                        <div class="row mx-1 px-0 justify-content-center">
                            <div class="col-md-2 px-0">
                                <img class="card-img h-100" src="./assets/img/cruzzi.jpg">
                            </div>
                            <div class="col-md-10">
                                <div class="row h-100 fw-bold fs-5 align-items-center shadow p-3">
                                    <div class="col-md-10 pt-3 pt-md-0 ps-md-5">
                                        <p class="pb-md-5 pt-0">01/02/2025</p>
                                        <p>5 x Cruz Cafuné · Sala París · Málaga</p>
                                    </div>
                                    <div class="col-md-2 pt-md-5">
                                        <p class="mt-md-5">120.00€</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider bottom-->
                <div class="b-line w-100 bg-dark my-4"></div>

                <div class="row fw-bold pt-4 pb-5 justify-content-center align-items-center">
                    <div class="col-md-8 col-auto">                    
                        <a href="index.php"><button class="btn btn-outline-primary bg-info text-primary rounded-3"><i class="fa-solid fa-arrow-left"></i> Seguir comprando</button></a>
                    </div>
                    <div class="col-md-4 col-auto">
                        <div class="row pt-3 pt-sm-0 align-items-center">
                            <p class="col-md-6 col-auto mt-3 mt-md-0 mb-md-0">Total 176.00€</p>
                            <a href="pago.php" class="col-md-6 col-auto"><button class="btn btn-primary rounded-3">Acceder al pago</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

<?php include("includes/footer.php");?>
<script src="./js/navbar.js"></script>
</body>
</html>