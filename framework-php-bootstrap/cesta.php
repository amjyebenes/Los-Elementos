<?php 
include("includes/a_config.php");
include("includes/dbconnection.php");
include("includes/googleconnect.php");
require_once './back-end/controlador/ControladorEspectaculo.php';
require_once './back-end/modelo/Espectaculo.php';

if (isset($_POST['clean']) || (isset($_SESSION['cesta']) && $_SESSION['cesta'] == null)) {
    unset($_SESSION['cesta']);
}

if (isset($_SESSION['cesta'])) {
    $total = 0;
}

if (isset($_POST['remove']) && isset($_SESSION['cesta'])) {
    foreach($_SESSION['cesta'] as $key=>$item) {
        if ($item[0] == $_POST['toRemove']) {
            unset($_SESSION['cesta'][$key]);
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head-tag-contents.php");?>
</head>
<body>

<?php include("includes/navigation.php");?>
    <main class="device-padding">
        <section class="pt-md-5 mt-md-5 mb-0">
            <div class="container-fluid">
                <!-- Cesta Section Heading-->
                <h1 class="text-uppercase m-0">Resumen de la compra</h1>
                <!-- Divider top-->
                <div class="b-line w-100 bg-dark my-4"></div>
                <?php
                if (isset($_SESSION['cesta']) && $_SESSION['cesta'] != null) {
                    // var_dump($_SESSION['cesta']);
                    foreach($_SESSION['cesta'] as $item) {
                        $espec = ControladorEspectaculo::get($item[0]);
                        $total += $espec->precio * $item[1];
                        ?>
                        <!-- Entrada -->
                        <div class="row py-3">
                            <div class="col-12">
                                <div class="row mx-1 px-0 justify-content-center">
                                    <div class="col-md-2 px-0">
                                        <img class="card-img h-100" src="data:jpg;base64,<?php echo base64_encode($espec->imagen); ?>" alt="title">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="row h-100 fw-bold fs-5 align-items-center shadow p-3">
                                            <div class="col-md-10 pt-3 pt-md-0 ps-md-5">
                                                <h2 class="pb-md-5 pt-0 h2"><?php echo $espec->fecha; ?></h2>
                                                <h class="h2"><?php echo $item[1]." x ".$espec->titulo; ?></h2>
                                            </div>
                                            <div class="col-md-2 d-flex flex-column align-items-center justify-content-center">
                                                <h2 class="h2"><?php echo ($espec->precio * $item[1])." €" ?></h2>
                                                <form action="" method="post">
                                                    <input type="hidden" name="toRemove" value="<?php echo $item[0]; ?>">
                                                    <button type="submit" name="remove" class="btn btn-primary rounded-3">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>    
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <?php
                    }
                } else {
                ?>
                <div class="row py-3">
                    <div class="col-auto">No has añadido nada a la cesta todavía.</div>
                </div>
                <?php
                }
                ?>
                <!-- Divider bottom-->
                <div class="b-line w-100 bg-dark my-4"></div>

                <div class="row fw-bold pt-4 pb-5 justify-content-center align-items-center">
                    <div class="col-md-6 col-auto">                    
                        <a href="index.php"><button class="btn btn-outline-primary bg-info text-primary rounded-3"><i class="fa-solid fa-arrow-left"></i> Seguir comprando</button></a>
                    </div>
                    <div class="col-md-6 col-auto">
                        <div class="row pt-3 pt-sm-0 align-items-center justify-content-end">
                            <form action="" method="post" class="col-md-4 col-auto text-center">
                                <button type="submit" name="clean" class="btn btn-primary rounded-3 w-100">Vaciar cesta</button>
                            </form>
                            <?php
                            if (isset($total)) {
                                ?>
                                <p class="col-md-4 col-auto mt-3 mt-md-0 mb-md-0 text-center"><?php echo "Total: ".$total." €"; ?></p>
                                <?php
                            }
                            ?>
                            <a href="pago.php" class="col-md-4 col-auto"><button class="btn btn-primary rounded-3 w-100">Acceder al pago</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
    </main>

<?php include("includes/footer.php");?>
<script src="./js/navbar.js"></script>
</body>
</html>