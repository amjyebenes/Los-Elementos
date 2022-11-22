<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
    <script src="https://kit.fontawesome.com/9e9e2fd9c0.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include("includes/navigation.php");?>
<main>
<!-- Portfolio Section-->
<section class="home-heading position-relative">
    <!-- THE ELEMENS TITLE -->
    <div class="main-title position-absolute w-100">
        <p class="brand-title from text-center mb-3">From</p>
        <p class="brand-title text-center">The Elements</p>
    </div>
    <!-- INTRO SECTION BACKGROUND -->
    <img src="assets/img/bg01.jpg" alt="" class="intro-img img-fluid">
</section>
<section class="page-section home container-fluid" id="portfolio">
        <!-- Home Title & Search bar -->
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-0">
                <h2 class="text-secondary">Consigue tus entradas</h2>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-5 col-11">
                <form class="d-flex justify-content-between" role="search" action="">
                    <input class="me-md-2 me-0 search-bar" type="search" placeholder="Busca tu artista favorito" aria-label="Search">
                    <button class="btn search-icon py-0 px-1 py-md-auto px-md-auto" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
        </div>
        <!-- Home Grid Items-->
        <div class="row justify-content-center mt-5">
            <!-- Home Item 1-->
            <div class="col-md-4 col-12 home-item">
                <div class="b-line w-100 bg-dark d-none d-md-block"></div>
                <div class="home-item-title mt-1 d-flex justify-content-between w-100">
                    <p>Concierto 1</p>
                </div>
                <div class="home-item-img-con">
                    <img src="assets/img/pexels-les-entremaliades-1452793.jpg" alt="" class="home-item-img img-fluid">
                </div>
            </div>
            <!-- Home Item 2-->
            <div class="col-md-4 col-12 home-item">
                <div class="b-line w-100 bg-dark d-none d-md-block"></div>
                <div class="home-item-title mt-1 d-flex justify-content-between w-100">
                    <p>Concierto 2</p>
                </div>
                <div class="home-item-img-con">
                    <img src="assets/img/pexels-wendy-wei-1916817.jpg" alt="" class="w-100 home-item-img img-fluid">
                </div>
            </div>
            <!-- Home Item 3-->
            <div class="col-md-4 col-12 home-item">
                <div class="b-line w-100 bg-dark d-none d-md-block"></div>
                <div class="home-item-title mt-1 d-flex justify-content-between w-100">
                    <p>Concierto 3</p>
                </div>
                <div class="home-item-img-con">
                    <img src="assets/img/pexels-wendy-wei-1916818.jpg" alt="" class="w-100 home-item-img img-fluid">
                </div>
            </div>
        </div>
    </section>
    </main>

<?php include("includes/footer.php");?>

</body>
</html>