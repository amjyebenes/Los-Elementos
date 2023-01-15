<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>
    <main class="device-padding">
        <!-- Portfolio Section-->
        <section class="position-relative pt-md-5 mt-md-5 portfolio mb-0" id="portfolio">
            <div class="px-0">
                <!-- Portfolio Section Heading-->
                <h1 class="text-left text-uppercase text-black fw-light m-0 pt-3">Conciertos</h1>
                <!-- Icon Divider-->
            </div>
            <div class="b-line w-100 bg-dark my-4"></div>
        </section>
        <div class="d-flex justify-content-center rounded-3">
        <div class="videoplayer col-5 rounded-3" id="myCustomPlayer">
                <div class="ratio ratio-16x9 bg-dark  rounded-3">
                    <video class="video" src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ElephantsDream.mp4"></video>
                    <div>
                        <div class="controls rounded-3 d-none" id="barraBotones">
                        <span class="progress-bar-text d-none" id="porcentaje">15%</span>
                            <button class="btn btn-lg btn-video-playpause" type="button" title="Play Video">
                                <i class="bi bi-play-fill iconoVideoplayer"></i>
                                <i class="bi bi-pause-fill d-none iconoVideoplayer"></i>
                            </button>
                            <div class="px-1 w-100">
                                <div class="progress w-100 rounded-3">
                                    <div class="progress-bar">
                                    </div>
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
            </main>

    <?php include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/videoplayer.js"></script>
    <script src="./js/instanciaVideo.js"></script>
</body>

</html>