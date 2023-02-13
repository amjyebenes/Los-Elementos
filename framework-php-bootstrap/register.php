<?php
session_start();
include("includes/dbconnection.php");
require_once 'back-end/modelo/Usuario.php';
require_once 'back-end/controlador/ControladorUsuario.php';


if (isset($_POST['captcha_challenge'])) {
  if ($_SESSION['captcha_text'] != $_POST['captcha_challenge']) {
    
    echo "<h1>" . $_POST['captcha_challenge'] . "</h1>";
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname1'] = $_POST['lastname1'];
    $_SESSION['lastname2'] = $_POST['lastname2'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['fechaNac'] = $_POST['fechaNac'];
    $_SESSION['pais'] = $_POST['pais'];
    $_SESSION['tlfn'] = $_POST['tlfn'];
    $_SESSION['CodPos'] = $_POST['CodPos'];
    $_SESSION['postalcode'] = $_POST['postalcode'];
    $_SESSION['pswd'] = $_POST['pswd'];
    $_SESSION['imagen'] = $_POST['imagen'];
    header("Location:index.php?captchaerror=true");
  } else {
    

    $nextId = (ControladorUsuario::getUltimoId()) + 1;
    $usuario = new Usuario(
      $nextId,
      $_POST['username'],
      $_POST['pswd'],
      $_POST['firstname'],
      $_POST['lastname1'],
      $_POST['lastname2'],
      $_POST['email'],
      $_POST['fechaNac'],
      $_POST['pais'],
      $_POST['CodPos'],
      $_POST['tlfn'],
      "usuario",
      "NULL"
    );

    $_SESSION['username'] = $usuario->usuario;
    $_SESSION['user_first_name'] = $usuario->nombre;
    $_SESSION['user_last_name'] = $usuario->apellido1." ".$usuario->apellido2;
    $_SESSION['user_email_address'] = $usuario->correo;
    $_SESSION['fechaNac'] = $usuario->fecha_nac;
    $_SESSION['pais'] = $usuario->pais;
    $_SESSION['tlfn'] = $usuario->telefono;
    $_SESSION['CodPos'] = $usuario->cod_postal;
    $_SESSION['pswd'] = $usuario->pass;
    $_SESSION['user_image'] = $usuario->imagen;

    $insert = ControladorUsuario::put($usuario);
    $_SESSION['insertado'] = true;

    $user = ControladorUsuario::get($_SESSION['user_email_address']);
    if ($user && isset($_FILES['imagen']['name'])) {
            $nombre_archivo = time().$_FILES['imagen']['name'];
            $ruta = "assets/img/imagenes/".$nombre_archivo;
            $archivo = $_FILES['imagen']['tmp_name'];
            $foto = $ruta;
            move_uploaded_file($archivo,$ruta);
            ControladorUsuario::cambiarFotodePerfil($user->id, $ruta);
    }else{
        $errorImagen = true;
    }
    header("Location:index.php?registrado=true");
  }
}else{
  header("Location:index.php?captchaerror=true");
}
