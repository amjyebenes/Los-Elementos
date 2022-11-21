<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
<main>
<!-- Portfolio Section-->
<section class="position-relative p-5 mt-5 portfolio mb-0" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h4 class="text-left text-uppercase text-black fw-light m-0">Conciertos</h4>
            <!-- Icon Divider-->
        </div>
        <div class="nav navbar container">
            <div class="nav-line position-relative bottom-0"></div>
        </div>
        </section>

<section>
    <div class="container mb-4">
        <div class="row">
            <div class="col-3">
                <div class="shadow">
                  <img class="shadow-lg card-img " src="./assets/img/cruzzi.jpg" alt="Title">
                </div>
            </div>
            <div class="col-6 d-flex flex-column">
                <div class="row">
                    <h3 class="text-primary">Cruz Cafuné</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <h5>22 · OCT · 2022<h5>
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
            <div class="col-1 d-flex align-items-end">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-arrow-alt-circle-up"></i>
                        <i class="fas fa-arrow-alt-circle-down"></i>
                    </div>
                    <div class="col">
                       <div class="text-center" style="border:1px solid orange;">
                            0
                       </div>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-end">
                    <div class="col" >
                        <button type="button" class="btn btn-primary">Añadir al carrito</button>
                    </div>
            </div>
            
        </div>
    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-4">
                <div class="shadow">
                  <img class="shadow-lg card-img " src="./assets/img/cruzzi.jpg" alt="Title">
                </div>
            </div>
            <div class="col-8">
                <h3>Cruz cafune</h3>
                
            
            </div>
        </div>
    </div>

</section>
</main>

<?php include("includes/footer.php");?>

</body>
</html>