<!-- NAVBAR PERSONALIZADO PARA LA PÁGINA PRINCIPAL -CONTIENE LA IMAGEN DE ENTRADA- -->
<header class="menu w-100 overflow-hidden">
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

                        <?php	
                        if  ($login_button == '')
                        {
                            echo '<li class="nav-item text-capitalize">'.$_SESSION['user_first_name'].'</li>'; 
                            // echo '<li class="nav-item text-capitalize">'.'<a href="logout.php" class="fw-lighter">Logout</a>'.'</li>';
                        } 
                        else {
                            echo '<li class="nav-item text-capitalize"><a href="modal.php" class="fw-lighter" data-bs-toggle="modal" data-bs-target="#staticBackgrop">Registrar</a></li>';
                            echo '<li class="nav-item text-capitalize"><a href="login.php" class="fw-lighter">Lodin</a></li>';
                        }
                        ?>

                        <li class="nav-item d-flex justify-content-between align-items-center gap-3">
                            <?php
                            if ($login_button == '') {
                                ?>
                                <span><a href="cesta.php" class="fw-lighter"><i class="fa-solid fa-bag-shopping fa-xl text-primary"></i></i></a></span>
                                <?php
                            }
                            ?>
                            <div class="dropdown">
                                <button class="btn rounded-5 btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-user text-light"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="micuenta.php">Mi Cuenta</a></li>
                                    <li><a class="dropdown-item" href="cesta.php">Cesta</a></li>
                                    <li><a class="dropdown-item" href="terminosYcondiciones.php">Términos</a></li>
                                    <?php
                                    if  ($login_button == '')
                                    {
                                        echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                                    } 
                                    ?>
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
        <div class="container-fluid px-0 px-md-1">
            <a class="navbar-brand logo-mobile" href="index.php">
                <img src="assets/img/Logo-web00.png" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler border-0 p-0 d-flex flex-column" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bg-dark w-100 rounded-1"></div>
                <div class="bg-dark w-100 rounded-1"></div>
                <div class="bg-dark w-100 rounded-1"></div>
            </button>
        </div>
    </nav>

    <div class="collapse position-absolute w-100 collapse-horizontal navbar-collapse device-padding home-nav" id="navbarSupportedContent">
        <div class="nav-line bg-dark position-relative bottom-0 col-12"></div>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
                <a class="nav-link" aria-current="page" href="conciertos.php">Conciertos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="eventos.php">Eventos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="salas.php">Salas</a>
            </li>
            <li class="nav-item">
                <a href="juegos.php" class="nav-link">Juegos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacto</a>
            </li>
            <li class="nav-item">
                <a href="modal.php" class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Registrar</a>
            </li>
            <li class="nav-item">
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

    <!-- THE ELEMENS TITLE -->
    <div class="main-title text-light position-relative w-100 start-50 top-50 d-flex flex-column justify-content-center">
        <p class="brand-title from text-center mb-md-3 mb-0 text-uppercase">From</p>
        <p class="brand-title text-center text-uppercase">The Elements</p>
    </div>
    <!-- INTRO SECTION BACKGROUND -->
    <img src="assets/img/bg01.jpg" alt="" class="intro-img top-auto img-fluid position-fixed">
</header>