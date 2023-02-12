<?php 
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php"); 
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body class="index">
<!-- TEXT TRACKING FOR IMG HOVER -->
<div class="text-track position-fixed text-dark opacity-0 ">
    <div class="con-textTrackH w-100 h-100 d-flex justify-content-center align-items-center rounded-circle bg-white">
        <h1 class="textTrackH h1 p-0 m-0 mt-2"></h1>
    </div>
</div>
<?php include("includes/navigation-home.php");?>
<!-- MAIN CONTENT -->
<main>
    <?php
    // VER CÓMO FUNCIONA $login_button 
    if (($login_button == '') && (!isset($_SESSION['iduser'])) && (!isset($_SESSION['insertado']))){
        include("includes/registermodal.php");
    }
    ?>

    <!-- SECCIÓN CON BARRA DE BÚSQUEDA -->
    <section class="container-fluid page-section device-padding section-padding bg-light position-relative border-top border-dark">
        <!-- Título y barra de búsqueda -->
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-0">
                <h1 class="text-primary h1 page-section-heading">Consigue tus entradas</h1>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-5 col-11">
                <form class="d-flex justify-content-between" role="search" action="">
                    <input class="me-md-2 me-0 border-0 border-bottom border-dark w-100 bg-light" type="search" placeholder="Busca tu artista favorito" aria-label="Search">
                    <button class="btn search-icon py-0 px-1 py-md-auto px-md-auto" type="submit">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- SECCION 2 | CONCIERTOS MÁS PROXIMOS/FAMOSOS -->
    <section class="container-fluid conciertos page-section device-padding section-padding home bg-light position-relative">
        <div class="row justify-content-center g-4 g-md-auto">
            <!-- Concierto 1-->
            <article class="col-md-4 col-12 conciertos-item">
                <div class="b-line w-100 bg-dark d-none d-md-block"></div>
                <div class="conciertos-item-title mt-1 d-flex justify-content-between w-100">
                    <a href="seleccionarEntradas.php" class="mb-1 w-100 text-center">Cruz Cafuné - Málaga · Sala París 15</a>
                </div>
                <div class="conciertos-item-img-con position-relative overflow-hidden">
                    <a href="seleccionarEntradas.php"><img src="assets/img/cruzziConcierto.jpg" alt="" class="conciertos-item-img hover-img img-fluid"></a>
                </div>
            </article>
            <!-- Concierto 2-->
            <article class="col-md-4 col-12 conciertos-item">
                <div class="b-line w-100 bg-dark"></div>
                <div class="conciertos-item-title mt-1 d-flex justify-content-between w-100">
                    <a href="seleccionarEntradas.php" class="mb-1 w-100 text-center">SFDK - Madrid · Wizink Center</a>
                </div>
                <div class="conciertos-item-img-con position-relative overflow-hidden">
                    <a href="seleccionarEntradas.php"><img src="assets/img/pexels-wendy-wei-1916817.jpg" alt="" class="w-100 conciertos-item-img hover-img img-fluid"></a>
                </div>
            </article>
            <!-- Concierto 3-->
            <article class="col-md-4 col-12 conciertos-item">
                <div class="b-line w-100 bg-dark"></div>
                <div class="conciertos-item-title mt-1 d-flex justify-content-between w-100">
                    <a href="seleccionarEntradas.php" class="mb-1 w-100 text-center">Boris Brejcha - Sevilla · elRow</a>
                </div>
                <div class="conciertos-item-img-con position-relative overflow-hidden">
                    <a href="seleccionarEntradas.php"><img src="assets/img/pexels-wendy-wei-1916818.jpg" alt="" class="w-100 conciertos-item-img hover-img img-fluid"></a>
                </div>
            </article>
        </div>
    </section>

    <!-- SECCION 3 | EVENTO PRÓXIMO -->
    <section class="container-fluid event position-relative page-section device-padding section-padding bg-light">
        <!-- Separador -->
        <div class="row justify-content-start gx-5">
            <div class="col-12">
                <div class="b-line w-100 bg-dark" id="video-trigger"></div>
            </div>
        </div>
        <!-- Evento -->
        <article class="row justify-content-around">
            <!-- Video -->
            <div class="col-md-8 col-12 ">
                <div class="d-flex justify-content-center rounded-3">
                    <div class="videoplayer video-con col-12 rounded-3" id="myCustomPlayer">
                        <div class="ratio ratio-16x9 bg-dark  rounded-3">
                            <video class="video" src="https://media.istockphoto.com/id/1330503212/es/vídeo/gran-grupo-de-personas-en-una-fiesta-de-concierto.mp4?s=mp4-640x640-is&k=20&c=fx6v0T3NJFGT9JUW6N6uSqKb9j5RrE7ZhYEyanQC2pk="></video>
                            <div>
                                <div class="controls rounded-3 opacity-0" id="barraBotones">
                                    <span class="progress-bar-text d-none" id="porcentaje">15%</span>
                                    <button class="btn btn-lg btn-video-playpause" type="button" title="Play Video">
                                        <i class="bi bi-play-fill iconoVideoplayer"></i>
                                        <i class="bi bi-pause-fill d-none iconoVideoplayer"></i>
                                    </button>
                                    <div class="px-1 w-100">
                                        <div class="progress w-100 rounded-3">
                                            <div class="progress-bar"></div>
                                        </div>
                                    </div>
                                    <button class="btn btn-lg btn-video-pip" title="Play picture in picture">
                                        <i class="bi bi-pip iconoVideoplayer"></i>
                                    </button>
                                    <button class="btn btn-lg btn-video-fullscreen">
                                        <i class="bi bi-arrows-fullscreen iconoVideoplayer"></i>
                                    </button>
                                    <div class="dropup">
                                        <button class="btn btn-lg btn-video-volume" data-bs-toggle="dropdown" title="Volume">
                                            <i class="bi bi-volume-mute-fill iconoVideoplayer"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end dropup-volume">
                                            <input type="range" class="form-range form-range-volume">
                                        </div>
                                    </div>
                                    <div class="dropup">
                                        <button class="btn btn-lg" data-bs-toggle="dropdown" title="More...">
                                            <i class="bi bi-three-dots-vertical iconoVideoplayer"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="terminosYcondiciones.php">
                                                <i class="bi bi-info-circle-fill iconoVideoplayer"></i> Terminos
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Descripción -->
            <div class="col-md-4 col-12">
                <div class="d-flex flex-column gap-2 pt-4 h-100">
                    <div class="w-100">
                        <h1 class="h1 text-dark">Encuentra los mejores eventos</h1>
                    </div>
                    <div class="event-date-con d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                        <span>&middot;</span>
                        <p class="m-0">El dia y hora que mejor te vengan</p>
                    </div>
                    <div class="d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                        <i class="fa-solid fa-location-dot text-primary"></i>
                        <p class="m-0 text-primary">En el lugar que elijas</p>
                    </div>
                    <div class="event-info">
                        <p>¿Qué mejor plan con amigos que ir a un gran concierto de tu artista favorito?</p>
                    </div>
                    <div class="d-flex justify-content-start align-self-start">
                        <a class="buy-button btn btn-primary rounded-3 p-2" href="eventos.php">Ver eventos</a>
                    </div>
                    <div class="d-none d-md-block mt-auto">
                        <div class="b-line"></div>
                    </div>
                </div>
                
                
            </div>
        </article>
    </section>
</main>

<?php include("includes/footer.php");?>
<script src="./js/navbar.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/videoplayer.js"></script>
<script src="./js/instanciaVideo.js"></script>
</body>
</html>