<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="device-padding">
        <section class="pt-md-5 mt-md-5 mb-0">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <!-- Compra Section Heading-->
                        <h6 class="bg-primary p-1 ps-4 rounded-bottom rounded-1 text-white text-uppercase shadow">Compra</h6>
                    </div>
                    <!-- Columna izq datos de pago -->
                    <div class="col-md-7 justify-content-center justify-content-md-start row">
                        <div class="col-7 mx-auto mx-md-0 col-md-5">
                            <img src="assets/img/Logo-web00.png" class="img-fluid my-3">
                        </div>
                        <!-- Radios options -->
                        <div class="col-12 row">
                            <p class="col-9 fs-5">Escoja método de pago</p>
                            <div class="col-12 d-flex justify-content-start gap-2">
                                <div class="form-check form-check-inline d-flex align-items-center gap-2">                                    
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">                                    
                                    <label class="form-check-label" for="inlineRadio1"><i class="fa-brands fa-cc-paypal display-5"></i></label>
                                </div>
                                <div class="form-check form-check-inline d-flex align-items-center gap-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2"><i class="fa-brands fa-apple-pay display-5"></i></label>
                                </div>
                                <div class="form-check form-check-inline d-flex align-items-center gap-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                    <label class="form-check-label" for="inlineRadio3"><i class="fa-brands fa-google-pay display-5"></i></label>
                                </div>
                                <div class="form-check form-check-inline d-flex align-items-center gap-2">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" checked>
                                    <label class="form-check-label" for="inlineRadio4"><i class="fa-solid fa-credit-card display-5"></i></label>
                                </div>
                            </div>
                        </div>
                        <!-- Form para introducir los datos -->
                        <div class="col-12 row my-4">
                            <p class="col-md-9  fs-5">Detalles de pago</p>
                            
                                <div class="border-bottom border-primary mb-3">
                                    <input class="form-control-plaintext" type="text" placeholder="Nombre del titular" name="titular">
                                </div>
                                <div class="border-bottom border-primary mb-3 d-flex gap-2">
                                    <input class="form-control-plaintext w-75" type="text" placeholder="Número de la Tarjeta" name="num_tarjeta">
                                    <i class="fa-brands fa-cc-mastercard display-6"></i> <i class="fa-brands fa-cc-visa display-6"></i>                                    
                                </div>
                                <div class="border-bottom border-primary d-flex mb-3">
                                    <input class="form-control-plaintext w-75" type="text" placeholder="Fecha de Caducidad" name="fechaCad">
                                    <input class="form-control-plaintext w-25" type="text" placeholder="CVV" name="cvv">
                                </div>
                                <label class="text-primary mb-5">Al hacer click en “Confirmar Pago”  aceptas el acuerdo de los términos y condiciones de usuario de EleTickets</label>
                                <div class="row mb-5">
                                    <div class="col-6">
                                        <a href="cesta.php"><button class="btn btn-outline-primary bg-info text-primary rounded-3" name="atras"><i class="fa-solid fa-arrow-left"></i>Atrás</button></a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <input class="btn btn-primary rounded-3" type="submit" value="Confirmar Pago" name="confirmarPago" onclick='alert("Pago confirmado");'>
                                    </div>
                                </div>                            
                        </div>    
                    </div>

                    <!-- Columna der imagen de evento/concierto -->
                    <div class="col-md-5 d-none d-md-flex py-4 justify-content-end">
                        <img class="img-fluid shadow" src="assets/img/cartel.png">
                    </div>
                </div>    

            </div>
            

        </section>
    </main>

    <?php include("includes/footer.php"); ?>

    <script src="./js/micuenta.js"></script>
</body>

</html>