<!-- NAVBAR PERSONALIZADO PARA LA PÁGINA PRINCIPAL -CONTIENE LA IMAGEN DE ENTRADA- -->
<div class="menu w-100 position-relative overflow-hidden">
<nav class="navbar navbar-expand-lg pb-0 text-uppercase fixed-top device-padding active mainNav">
    <div class="container-fluid">
        <div class="collapse navbar-collapse row justify-content-between align-items-center" id="navbarResponsive">
            <div class="col-4">
                <ul class="navbar-nav navbar-botones justify-content-center gap-5">
                    <li class="nav-item text-capitalize"><a href="conciertos.php">Conciertos</a></li>
                    <li class="nav-item text-capitalize"><a href="eventos.php">Eventos</a></li>
                    <li class="nav-item text-capitalize"><a href="salas.php">Salas</a></li>
                </ul>
            </div>
            <div class="col-2 text-center">
                <a class="navbar-brand p-0 m-0" href="index.php"><img src="../assets/img/Logo-web00.png" alt="" class="img-fluid" width="60%"></a>
            </div>
            <div class="col-4">
                <ul class="navbar-nav navbar-botones justify-content-center gap-5">
                    <li class="nav-item text-capitalize"><a href="contact.php">Contacto</a></li>
                    <li class="nav-item text-capitalize"><a href="login.php">Login</a></li>
                    <li class="nav-item text-capitalize"><a href="micuenta.php">Cesta + Usuario</a></li>
                </ul>
            </div>
            <div class="nav-line position-relative mt-2 bottom-0 col-12"></div>
        </div>
    </div>
</nav>

<!-- BOOSTRAP NAVBAR FOR SMALL AND MEDIUM DEVICES -->
<nav class="navbar navbar-expand-lg py-2 navbar-dark text-uppercase device-padding active d-flex d-lg-none mainNav">
    <div class="container-fluid small-nav-padding">
        <a class="navbar-brand logo-mobile" href="index.php">
            <img src="assets/img/Logo-web00.png" alt="" class="img-fluid">
        </a>
        <button class="navbar-toggler d-flex flex-column" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div></div>
            <div></div>
            <div></div>
        </button>
    </div>
</nav>

<div class="collapse position-relative collapse-horizontal navbar-collapse device-padding" id="navbarSupportedContent">
    <div class="nav-line position-relative bottom-0 col-12"></div>
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
            <a class="nav-link" href="contact.php">Contacto</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="micuenta.php">Cuenta</a>
        </li>
    </ul>
</div>

<!-- THE ELEMENS TITLE -->
<div class="main-title position-absolute w-100 start-50 top-50 d-flex flex-column justify-content-center">
    <p class="brand-title from text-center mb-md-3 mb-0 text-uppercase">From</p>
    <p class="brand-title text-center text-uppercase">The Elements</p>
</div>
<!-- INTRO SECTION BACKGROUND -->
<img src="assets/img/bg01.jpg" alt="" class="intro-img img-fluid position-fixed">

</div>