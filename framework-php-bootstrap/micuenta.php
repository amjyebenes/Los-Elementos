<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="my-5 pb-5">

        <div class="container-fluid d-flex justify-content-center pt-4 pb-5">
            <div class="row col col-md-10 col-lg-8 pt-4 ">
                <h6 class="bg-primary p-1 ps-4"><span class="text-white shadow">MI&nbsp&nbspZONA</span></h6>

                <div class="row mt-4 pt-4 d-flex justify-content-center">
                    <div class="col-6 col-lg-3 ms-5 me-5 mb-4 d-flex cajaMiCuenta rounded-3 " id="botonDatos">
                        <div class="row col justify-content-center text-center ">
                            <i class="fas fa-user fa-7x iconoCuenta mt-3 w100"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis datos</span>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 ms-5 me-5 mb-4 d-flex cajaMiCuenta rounded-3" id="botonCompras">
                        <div class="row col justify-content-center text-center">
                            <i class="fa-solid fa-basket-shopping fa-5x iconoCuenta mt-4 w-100"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis compras</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 justify-content-center">
                    <div class=" bg-primary p-1">
                    </div>
                </div>

                <div class="container pt-4 pb-3 d-flex" id="divDatos">
                    <div class="row col justify-content-between">
                        <div class="col-sm-4 row">
                            <div class="col">
                                <p class="h5 tituloArtista textoNaranja"><u>DATOS DE FACTURACION</u></p>
                                <div class="col">
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <p class=" tituloArtista text-left fw-bold ">NOMBRE: </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-center">juan</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <p class=" tituloArtista text-left fw-bold ">DNI/CIF: </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-center">25146463s</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <p class="h6 tituloArtista text-left fw-bold ">TELEFONO: </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-center">95544115</p>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <p class="h6 tituloArtista text-left fw-bold ">DIRECCION: </p>
                                        </div>
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-center">c/las pilas</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 row">
                                <p class="h5 tituloArtista textoNaranja"><u>DATOS DE CUENTA</u></p>
                                <div class="col d-flex flex-column justify-content-between">
                                    <div class="row ">
                                        <div class="col-5 ">
                                            <p class=" tituloArtista text-left fw-bold ">EMAIL: </p>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="email" class="bordesInputMiCuenta text-center col-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <p class=" tituloArtista text-left fw-bold ">TELEFONO ALTERNATIVO: </p>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="text" class="bordesInputMiCuenta text-center col-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-left fw-bold">NUEVA CONTRASEÑA: </p>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="password" class="bordesInputMiCuenta text-center col-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <p class="h6 tituloArtista text-left fw-bold ">CONFIRMAR CONTRASEÑA: </p>
                                        </div>
                                        <div class="col-7 py-1">
                                            <input type="password" class="bordesInputMiCuenta text-center col-12">
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="d-flex justify-content-end pt-2">
                                        <button type="button" class="btn btn-primary rounded-5 col col-sm-10 col-xl-6">Guardar cambios</button>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
            </div>









        </div>
        </div>


    </main>

    <?php include("includes/footer.php"); ?>

    <script src="./js/micuenta.js"></script>
</body>

</html>