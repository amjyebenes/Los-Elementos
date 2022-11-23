<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="my-5 pb-5">

        <div class="container pt-4 pb-5">
            <div class="row col pt-4 justify-content-center">
                <h6 class="col col-md-10 col-lg-8 bg-primary p-1 ps-4"><span class="text-white shadow">MI&nbsp&nbspZONA</span></h6>

                <div class="row mt-4 pt-4 d-flex justify-content-center">
                    <div class="col col-lg-3 ms-5 me-5 mb-4 d-flex cajaMiCuenta rounded-3 ">
                        <div class="row col justify-content-center text-center ">
                            <i class="fas fa-user fa-7x iconoCuenta mt-3 w100"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis datos</span>
                        </div>
                    </div>
                    <div class="col col-lg-3 ms-5 me-5 mb-4 d-flex cajaMiCuenta rounded-3">
                        <div class="row col justify-content-center text-center">
                            <i class="fa-solid fa-basket-shopping fa-5x iconoCuenta mt-4 w-100"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista">Mis compras</span>
                        </div>
                    </div>
                </div>

                <div class="nav nav-lineOrange container pt-4 justify-content-center">
                    <div class="row col col-md-10 col-lg-8 bg-primary p-1 ps-4">
                    </div>
                </div>

                <div class="container pt-4 pb-3">
                    <div class="row col justify-content-center">
                        <div class="col col-md-10 col-lg-8 row justify-content-center">
                            <div class="row col-sm-6">
                                <p class="h5 tituloArtista textoNaranja"><u>DATOS DE FACTURACION</u></p>
                                <div class="col d-flex flex-column ">
                                    <div class="row align-items-center">
                                        <div class="col ">
                                            <p class=" tituloArtista text-left fw-bold ">NOMBRE: </p>
                                        </div>
                                        <div class="col"><p class="h6 tituloArtista text-center">juan</p></div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class=" tituloArtista text-left fw-bold ">DNI/CIF: </p>
                                        </div>
                                        <div class="col"><p class="h6 tituloArtista text-center">25146463s</p></div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="h6 tituloArtista text-left fw-bold ">TELEFONO: </p>
                                        </div>
                                        <div class="col"><p class="h6 tituloArtista text-center">95544115</p></div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="h6 tituloArtista text-left fw-bold ">DIRECCION: </p>
                                        </div>
                                        <div class="col"><p class="h6 tituloArtista text-center">c/las pilas</p></div>
                                    </div>

                                </div>




                            </div>
                            <div class="row col-sm-6">
                                <p class="h5 tituloArtista textoNaranja"><u>DATOS DE CUENTA</u></p>
                                <div class="col d-flex flex-column justify-content-between">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class=" tituloArtista text-left fw-bold ">NOMBRE: </p>
                                        </div>
                                        <div class="col rounded-2 py-1">
                                            <input type="text" class="rounded-2 text-center">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class=" tituloArtista text-left fw-bold ">DNI/CIF: </p>
                                        </div>
                                        <div class="col rounded-2 py-1">
                                            <input type="text" class="rounded-2 text-center">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="h6 tituloArtista text-left fw-bold ">TELEFONO: </p>
                                        </div>
                                        <div class="col rounded-2 py-1">
                                            <input type="text" class="rounded-2 text-center">
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="h6 tituloArtista text-left fw-bold ">DIRECCION: </p>
                                        </div>
                                        <div class="col rounded-3 py-1">
                                            <input type="text" class="rounded-2 text-center">
                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class=" d-flex justify-content-end pt-2">
                                        <button type="button" class="btn btn-primary rounded-3 col col-sm-6">Guardar cambios</button>
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

</body>

</html>