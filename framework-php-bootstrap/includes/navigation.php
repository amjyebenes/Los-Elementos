<header>
    <nav class="navbar navbar-expand-lg pb-0 text-uppercase text-decoration-none text-dark fixed-top device-padding active mainNav">
        <div class="container-fluid">
            <div class="collapse navbar-collapse row justify-content-between align-items-center" id="navbarResponsive">
                <div class="col-4">
                    <ul class="navbar-nav navbar-botones justify-content-center gap-5">
                        <li class="nav-item text-capitalize"><a href="conciertos.php" class="fw-lighter">Conciertos</a></li>
                        <li class="nav-item text-capitalize"><a href="eventos.php" class="fw-lighter">Eventos</a></li>
                        <li class="nav-item text-capitalize"><a href="salas.php" class="fw-lighter">Salas</a></li>
                    </ul>
                </div>
                <div class="col-2 text-center">
                    <a class="navbar-brand p-0 m-0" href="index.php"><img src="../assets/img/Logo-web00.png" alt="" class="img-fluid" width="60%"></a>
                </div>
                <div class="col-4">
                    <ul class="navbar-nav navbar-botones justify-content-center align-items-center gap-5">
                        <li class="nav-item text-capitalize"><a href="juegos.php" class="fw-lighter">Juegos</a></li>
                        <li class="nav-item text-capitalize"><a href="contact.php" class="fw-lighter">Contacto</a></li>
                        <!-- data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->
                        <li class="nav-item text-capitalize"><a href="registro.php" class="fw-lighter" >Registrar</a></li>
                        <li class="nav-item text-capitalize"><a href="login.php" class="fw-lighter">Login</a></li>
                        <li class="nav-item d-flex justify-content-between align-items-center gap-3">
                            <span><a href="cesta.php" class="fw-lighter"><i class="fa-solid fa-bag-shopping fa-xl text-primary"></i></i></a></span>
                            <div class="dropdown">
                                <button class="btn rounded-5 btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user text-light"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                    <?php
                                        if(isset($_SESSION['user_first_name'])){
                                        echo '<li><a class="dropdown-item" href="micuenta.php">Mi Cuenta</a></li>';
                                        } 
                                    ?>
                                    <li><a class="dropdown-item" href="cesta.php">Cesta</a></li>
                                    <li><a class="dropdown-item" href="terminosYcondiciones.php">Términos</a></li>
                                    
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav-line bg-dark position-relative mt-2 bottom-0 col-12"></div>
            </div>
        </div>
    </nav>

    <!-- BOOSTRAP NAVBAR FOR SMALL AND MEDIUM DEVICES -->
    <nav class="navbar navbar-expand-lg py-2 navbar-dark text-decoration-none text-dark text-uppercase device-padding active d-flex d-lg-none mainNav">
        <div class="container-fluid">
            <a class="navbar-brand logo-mobile" href="index.php">
                <img src="assets/img/Logo-web00.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler  border-0 p-0 d-flex flex-column" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bg-dark w-100 rounded-1"></div>
                <div class="bg-dark w-100 rounded-1"></div>
                <div class="bg-dark w-100 rounded-1"></div>
            </button>
        </div>
    </nav>

    <div class="collapse position-absolute w-100 collapse-horizontal navbar-collapse device-padding" id="navbarSupportedContent">
        <div class="nav-line bg-dark position-relative bottom-0 col-12"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item text-capitalize">
                <a class="nav-link" aria-current="page" href="conciertos.php">Conciertos</a>
            </li>
            <li class="nav-item text-capitalize">
                <a class="nav-link" href="eventos.php">Eventos</a>
            </li>
            <li class="nav-item text-capitalize">
                <a class="nav-link" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
                <a href="juegos.php" class="nav-link">Juegos</a>
            </li>
            <li class="nav-item text-capitalize">
                <a class="nav-link" href="contact.php">Contacto</a>
            </li>
            <li class="nav-item text-capitalize">
            <!-- data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->
                <a href="registro.php" class="fw-lighter">Registrar</a>
            </li>
            <li class="nav-item text-capitalize">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item d-flex justify-content-start mt-2 align-items-center gap-3">
                <span><a href="cesta.php" class="fw-lighter"><i class="fa-solid fa-bag-shopping fa-xl text-primary"></i></i></a></span>
                <div class="dropdown dropup">
                    <button class="btn rounded-5 btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user text-light"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="micuenta.php">Mi Cuenta</a></li>
                        <li><a class="dropdown-item" href="cesta.php">Cesta</a></li>
                        <li><a class="dropdown-item" href="terminosYcondiciones.php">Términos</a></li>
                        <li><a class="dropdown-item" href="pong_adrian.html" target="_blank">Pong Adri</a></li>
                        <li><a class="dropdown-item" href="tower.html" target="_blank">Tower Game</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>