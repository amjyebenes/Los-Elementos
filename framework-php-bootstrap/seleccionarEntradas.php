<?php
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once './back-end/controlador/ControladorEspectaculo.php';
require_once './back-end/controlador/ControladorUsuario.php';
require_once './back-end/controlador/ControladorValoracion.php';
require_once './back-end/modelo/Espectaculo.php';
require_once './back-end/modelo/Valoracion.php';
require_once './back-end/modelo/Usuario.php';

if (!isset($_POST['consultaConcierto']) && !isset($_GET['valoracionVacia'])) {
    header("Location: conciertos.php");
}

if (isset($_POST['id'])) {
    $_SESSION['idConcierto'] = $_POST['id'];
}

if (isset($_SESSION['username'])) {
    if (isset($_POST['send-rating']) &&  strlen($_POST['valoracion']) > 2 && $_POST['valoracion'] != null) {
        var_dump($_POST['valoracion']);
        $val = new Valoracion(ControladorUsuario::get($_SESSION['user_email_address'])->id, ControladorEspectaculo::get($_SESSION['idConcierto'])->id, $_POST['rating'], $_POST['valoracion']);
        ControladorValoracion::put($val);
    }else if (isset($_POST['valoracion']) && empty($_POST['textoValoracion'])) {
        header("Location: seleccionarEntradas.php?valoracionVacia=true");
    }
} else {
    header("Location: login.php?logueate=true");
}

if (isset($_POST['entradas'])) {
    $item = [$_POST['id'], $_POST['entradas']];
    $_SESSION['cesta'][] = $item;
    header("location:conciertos.php?cesta=true");
}

$valoraciones = ControladorValoracion::getAllValoracionesUser(ControladorUsuario::get($_SESSION['user_email_address'])->id, $_SESSION['idConcierto']);

?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
    <link rel="canonical" href="https://quilljs.com/standalone/full/">
    <link type="application/atom+xml" rel="alternate" href="https://quilljs.com/feed.xml" title="Quill - Your powerful rich text editor" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />
    <link rel="stylesheet" href="./assets/quill.snow.css" />
</head>

<body>
    <?php include("includes/navigation.php"); ?>
    <main>
        <!-- SECCION 3 | EVENTO PRÓXIMO -->
        <section class="container-fluid concert fix-top page-section device-padding section-padding bg-light">
            <!-- Evento -->

            <article class="row justify-content-around">
                <!-- Video -->
                <div class="col-md-5 col-12 overflow-hidden">
                    <div class="img-con border-top border-dark overflow-hidden">
                        <img class="shadow-lg img-fluid" src="data:jpg;base64,<?php echo base64_encode(ControladorEspectaculo::get($_SESSION['idConcierto'])->imagen); ?>" alt="Title">
                    </div>
                </div>

                <!-- Descripción -->
                <div class="col-md-7 col-12 border-top-1 d-flex flex-column justify-align-content-between h-100">
                    <div class="d-flex flex-column gap-1 pt-4 border-top border-dark">
                        <div class="w-100">
                            <h1 class="h1 text-dark text-uppercase mb-0"><?php echo ControladorEspectaculo::get($_SESSION['idConcierto'])->titulo; ?></h1>
                        </div>
                        <div class="event-date-con d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                            <p class="m-0"><?php echo ControladorEspectaculo::get($_SESSION['idConcierto'])->fecha; ?></p>
                            <!-- <span>&middot;</span>
                            <p class="m-0"><?php echo ControladorEspectaculo::get($_SESSION['idConcierto'])->fecha; ?></p> -->
                        </div>
                        <div class="d-flex flex-row justify-content-start w-100 align-items-baseline gap-2">
                            <i class="fa-solid fa-location-dot text-primary"></i>
                            <p class="m-0 text-primary"><?php echo ControladorEspectaculo::get($_SESSION['idConcierto'])->ubicacion; ?></p>
                        </div>
                        <div class="event-info">
                            <p><?php echo "Selecciona tus entradas para " . ControladorEspectaculo::get($_SESSION['idConcierto'])->titulo . " en " . ControladorEspectaculo::get($_SESSION['idConcierto'])->ubicacion . "." ?></p>
                        </div>

                        <!-- Botones Comprar -->
                        <form action="" method="POST" class="d-flex align-items-center justify-content-start gap-2 mt-0 pb-2">
                            <a class="me-5" href="conciertos.php"><button class="w-100 btn btn-outline-primary bg-info text-primary rounded-3"><i class="fa-solid fa-arrow-left"></i> Seguir comprando</button></a>
                            <div class="d-flex justify-content-center align-items-end pr-3">
                                <div class="text-center contadorEntrada">
                                    <input type="number" name="entradas" id="entradas" value="1" class="w-100">
                                    <input type="hidden" name="id" value="<?php echo $_SESSION['idConcierto']; ?>" />
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <button class="btn btn-primary rounded-5 up" type="button"><i class="fas fa-arrow-alt-circle-up up"></i></button>
                                <button class="btn btn-primary rounded-5 down" type="button"><i class="fas fa-arrow-alt-circle-down down"></i></button>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary rounded-3"><span class="sm-h3">Añadir al carrito</span></button>
                            </div>
                        </form>

                        <div class="d-none d-md-block mt-auto w-100 bg-dark my-2">
                            <div class="b-line"></div>
                        </div>
                    </div>

                    <!-- Otros conciertos -->
                    <div class="row justify-content-between gap-0">
                        <div class="col-12">
                            <h3 class="h3 text-capitalize">Otros conciertos</h3>
                        </div>
                        <div class="col-4">
                            <img src="assets/img/choco.png" alt="" class="img-fluid concierto-hov">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/alba.jpg" alt="" class="img-fluid concierto-hov">
                        </div>
                        <div class="col-4">
                            <img src="assets/img/delaossa.jpg" alt="" class="img-fluid concierto-hov">
                        </div>
                    </div>
                </div>
            </article>

            <!-- TEXT EDITOR -->
            <form action="seleccionarEntradas.php" method="POST">
                <article class="row justify-content-center mt-5 flex-column gap-4 align-items-center">
                    <?php
                    if (isset($_GET['valoracionVacia'])) {
                        echo   '<div id="alerta" name="alerta" class="text-center alerta alert bg-primary border border-2 border-dark h6 position-absolute top-50 start-50 translate-middle col-3 justify-content-center" role="alert">
                            Valoracion vacia: deja tu comentario en la caja de texto
                            </div>';
                    }
                    ?>
                    <div class="d-none d-md-block mt-auto w-100 bg-dark">
                        <div class="b-line"></div>
                    </div>
                    <div id="standalone-container" class="col-8 d-flex flex-column">
                        <h2 class="h2 text-center mb-3">Valora este concierto</h2>
                        <div id="toolbar-container">
                            <span class="ql-formats">
                                <select class="ql-font"></select>
                                <select class="ql-size"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-bold"></button>
                                <button class="ql-italic"></button>
                                <button class="ql-underline"></button>
                                <button class="ql-strike"></button>
                            </span>
                            <span class="ql-formats">
                                <select class="ql-color"></select>
                                <select class="ql-background"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-script" value="sub"></button>
                                <button class="ql-script" value="super"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-header" value="1"></button>
                                <button class="ql-header" value="2"></button>
                                <button class="ql-blockquote"></button>
                                <button class="ql-code-block"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-list" value="ordered"></button>
                                <button class="ql-list" value="bullet"></button>
                                <button class="ql-indent" value="-1"></button>
                                <button class="ql-indent" value="+1"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-direction" value="rtl"></button>
                                <select class="ql-align"></select>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-link"></button>
                                <button class="ql-image"></button>
                                <button class="ql-video"></button>
                                <button class="ql-formula"></button>
                            </span>
                            <span class="ql-formats">
                                <button class="ql-clean"></button>
                            </span>
                        </div>
                        <div id="editor-container" name="textoValoracion"></div>
                    </div>

                    <!-- <div class="w-100 text-center">
                    <button type="button" class="btn btn-primary btn-sm" aria-label="Close" onclick="JavaScript: alert(quill.root.innerHTML);">
                        Obtener texto HTML mostrado en el editor
                    </button>
                </div> -->

                    <!-- STARS RATING -->
                    <div class="rating w-100">
                        <div class="d-flex justify-content-center align-items-center gap-3">
                            <fieldset>
                                <input id="rating0" type="radio" value="0" name="rating" checked class="d-none" />
                                <label class="star d-inline-block p-0" for="rating1">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </label>
                                <input id="rating1" type="radio" value="1" name="rating" class="d-none" />
                                <label class="star d-inline-block p-0" for="rating2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </label>
                                <input id="rating2" type="radio" value="2" name="rating" class="d-none" />
                                <label class="star d-inline-block p-0" for=rating3>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </label>
                                <input id="rating3" type="radio" value="3" name="rating" class="d-none" />
                                <label class="star d-inline-block p-0" for=rating4>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </label>
                                <input id="rating4" type="radio" value="4" name="rating" class="d-none" />
                                <label class="star d-inline-block p-0" for="rating5">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                    </svg>
                                </label>
                                <input id="rating5" type="radio" value="5" name="rating" class="d-none" />
                            </fieldset>

                            <input type="hidden" name="valoracion" id="valoracion" value="" />
                            <input type="hidden" name="id" value="<?php echo $_SESSION['idConcierto']; ?>" />
                            <input type="hidden" name="finalRating" id="finalRating" value="">
                            <input type="hidden" name="consultaConcierto" class="btn btn-primary rounded-3" value="a" />
                            <input type="submit" class="btn btn-primary rounded-3" name="send-rating" value="Enviar" onclick="getQuillValue()" />
            </form>
            </div>
            </article>
            <?php
            if (isset($valoraciones) && $valoraciones != null) {
            ?>
                <div class="d-none d-md-block mt-4 w-100 bg-dark">
                    <div class="b-line"></div>
                </div>
                <article class="row justify-content-center mt-4 flex-column gap-4 align-items-center">
                    <h2 class="h2 text-center text-primary">Valoraciones de los usuarios</h2>
                    <?php
                    foreach ($valoraciones as $val) {
                        $user = ControladorUsuario::getUser($val->id_usuario);
                        $espec = ControladorEspectaculo::get($val->id_espectaculo);
                    ?>
                        <div class="col-12 row shadow px-0">
                            <div class="col-12 col-md-3 p-0">
                                <div class="shadow">
                                    <img class="shadow-lg card-img" src="data:jpg;base64,<?php echo base64_encode($espec->imagen); ?>" alt="Title">
                                </div>
                            </div>
                            <div class="col-md-5 p-3">
                                <div class="d-flex gap-3 align-items-baseline">
                                    <h2 class="h2 text-start mb-3"><?php echo $user->usuario; ?></h2>
                                    <div class="d-flex gap-2">
                                        <?php
                                        for ($i = 0; $i < $val->valoracion; $i++) {
                                        ?>
                                            <span class="star2 d-flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                    <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                                </svg>
                                            </span>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <p>(<?php echo $val->valoracion; ?> de 5)</p>
                                </div>
                                <p><?php echo '"' . $val->comentario . '"'; ?></p>
                            </div>
                            <div class="col-7 col-md-4 d-flex flex-column align-items-end p-3">
                                <div class="row">
                                    <p class="h1 text-primary text-end"><?php echo $espec->titulo; ?></p>
                                    <div class="col pb-1">
                                        <!-- Formato 22 · OCT · 2022 -->
                                        <p class="h5 text-end"><?php echo $espec->fecha ?></p>
                                        <h6 class="text-primary text-end">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                                            <?php echo $espec->ubicacion; ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </article>
            <?php
            }
            ?>
        </section>
    </main>

    <?php
    include("includes/footer.php"); ?>
    <script src="./js/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="./assets/quill.min.js"></script>
    <script>
        // Text editor
        const quill = new Quill('#editor-container', {
            modules: {
                formula: true,
                syntax: true,
                toolbar: '#toolbar-container'
            },
            placeholder: 'Descríbenos aquí tu experiencia...',
            theme: 'snow'
        });

        // Stars rating
        const changeRating = document.querySelectorAll('input[name=rating]');
        changeRating.forEach((radio) => {
            radio.addEventListener('change', getRating);
        });

        function getRating() {
            // Paso al value del input el valor del rating
            let estrellas = document.querySelector('input[name=rating]:checked').value;
            let finalRating = document.querySelector('#finalRating');
            finalRating.value = estrellas;
        }

        function getQuillValue() {
            // Paso al value del input el contenido del editor de texto
            const valoracion = document.querySelector('#valoracion');
            valoracion.value = quill.getText();
        }

        // Selección de entradas
        const up = document.querySelector('.up');
        const dowm = document.querySelector('.down');
        const entradas = document.querySelector('#entradas');

        document.addEventListener('click', (e) => {
            if (e.target.matches(".up")) {
                entradas.value++;
            }

            if (e.target.matches(".down")) {
                if (entradas.value > 1) entradas.value--;
            }
        })
    </script>
    <script src="./js/alerta.js"></script>
</body>

</html>