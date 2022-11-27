<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="my-lg-5 pb-5 device-padding">

        <div class="container-fluid d-flex justify-content-center pt-lg-4">
            <div class="row col col-md-10 col-lg-12 pt-lg-4 ">
                <h6 class="bg-primary p-1 ps-4 rounded-top-3"><span class="text-white shadow">MI&nbsp&nbspZONA</span></h6>

                <div class="row mt-4 pt-4 d-flex justify-content-center">
                    <div class="col-6 col-lg-3 ms-5 me-5 mb-4 d-flex">
                        <button class="rounded-3 border-top border-primary row col justify-content-center text-center" id="botonDatos" onclick="clickUsuario()">
                            <i class="fas fa-user fa-7x iconoCuenta mt-3 w100" id="iconoUsuario"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista" id="textoUsuario">Mis datos</span>
                        </button>
                    </div>
                    <div class="col-6 col-lg-3 ms-5 me-5 mb-4 d-flex ">
                        <button class="rounded-3 border-top border-primary row col justify-content-center text-center" id="botonCompras" onclick="clickCompras()">
                            <i class="fa-solid fa-basket-shopping fa-5x iconoCuenta mt-4 w-100" id="iconoCompras"></i>
                            <span class="text-primary mt-2 mb-3 h5 tituloArtista" id="textoCompras">Mis compras</span>
                        </button>
                    </div>
                </div>

                <div class="pt-4 justify-content-center">
                    <div class=" bg-primary p-1">
                    </div>
                </div>

                <div class="pt-4 d-flex">
                    <div class="row col justify-content-between" id="divDatos">
                        <div class="col col-sm-4 ">
                            <div class="col">
                                <label class="h5 tituloArtista text-primary"><u>DATOS DE FACTURACION</u></label>
                                <div class="col">
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <label class=" tituloArtista text-left fw-bold ">NOMBRE: </>
                                        </div>
                                        <div class="col-5">
                                            <label class="h6 tituloArtista text-center">juan</label>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <label class=" tituloArtista text-left fw-bold ">DNI/CIF: </label>
                                        </div>
                                        <div class="col-5">
                                            <label class="h6 tituloArtista text-center">25146463s</label>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <label class="h6 tituloArtista text-left fw-bold ">TELEFONO: </label>
                                        </div>
                                        <div class="col-5">
                                            <label class="h6 tituloArtista text-center">95544115</label>
                                        </div>
                                    </div>
                                    <div class="row d-flex align-items-baseline">
                                        <div class="col-7">
                                            <label class="h6 tituloArtista text-left fw-bold ">DIRECCION: </label>
                                        </div>
                                        <div class="col-5">
                                            <label class="h6 tituloArtista text-center">c/las pilas</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 row d-flex justify-content-center">
                            <p class="h5 tituloArtista text-primary"><u>DATOS DE CUENTA</u></p>
                            <div class="col d-flex flex-column justify-content-between">
                                <div class="row ">
                                    <div class="col-5 ">
                                        <label class=" tituloArtista text-left fw-bold ">EMAIL: </label>
                                    </div>
                                    <div class="col-7 py-1">
                                        <input type="email" class="opacity-50 text-center col-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label class=" tituloArtista text-left fw-bold ">TELEFONO ALTERNATIVO: </label>
                                    </div>
                                    <div class="col-7 py-1">
                                        <input type="text" class="opacity-50 text-center col-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label class="h6 tituloArtista text-left fw-bold">NUEVA CONTRASEÑA: </label>
                                    </div>
                                    <div class="col-7 py-1">
                                        <input type="password" class="opacity-50 text-center col-12">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label class="h6 tituloArtista text-left fw-bold ">CONFIRMAR CONTRASEÑA: </label>
                                    </div>
                                    <div class="col-7 py-1">
                                        <input type="password" class="opacity-50 text-center col-12">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="d-flex justify-content-end pt-2">
                                    <button type="button" class="btn btn-primary rounded-5 col col-sm-10 col-xl-6">Guardar cambios</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="pt-4  d-flex ">
                    <div class="row col justify-content-center pb-5" id="divCompras">
                        <div class="row shadow mb-4">
                            <div class="col-4 col-sm-3 col-md-2 p-0 shadow">
                                <img class="shadow-lg card-img" src="./assets/img/cruzzi.jpg" alt="Title">
                            </div>
                            <div class="col-5 col-sm-6 col-md-8 d-flex flex-column">
                                <div class="row">
                                    <p class="h2 text-primary fw-bold tituloArtista">Cruz Cafuné</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="h5 tituloArtista">22 · OCT · 2022</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>SAB - 21:30<h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Malaga - Sala Paris 15
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center mb-2 m-1">
                                <div class="row align-items-center">
                                    <label class="col justify-content-center align-items-end pr-3 text-center">
                                            x2: <span class="h5">150€</span>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="row shadow mb-4">
                            <div class="col p-0">
                                <div class="shadow">
                                    <img class="shadow-lg card-img W-100" src="./assets/img/borisbrejcha.jpg" alt="Title">
                                </div>
                            </div>
                            <div class="col-5 d-flex flex-column">
                                <div class="row">
                                    <p class="h2 text-primary fw-bold tituloArtista">Boris Brejcha</p>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="h5 tituloArtista">22 · FEB · 2023</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6>SAB - 21:30<h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <h6 class="text-primary">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            Elrow - Sevilla
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center mb-2">
                                <div class="row align-items-center">
                                    <div class="col-6 justify-content-center align-items-end pr-3">
                                        <div class="text-center">
                                            x1
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center mb-2">
                                <div class="row align-items-center">
                                    <div class="col-6 justify-content-center align-items-end pr-3">
                                        <div class="text-center">
                                            TOTAL: 75€
                                        </div>
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