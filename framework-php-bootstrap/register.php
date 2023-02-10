<?php
session_start();
include("includes/dbconnection.php");
require_once 'back-end/modelo/Usuario.php';
require_once 'back-end/controlador/ControladorUsuario.php';


if ($_SESSION['captcha_text'] != $_POST['captcha_challenge']) {
  echo "<h1>".$_SESSION['captcha_text']."</h1>";
  echo "<h1>".$_POST['captcha_challenge']."</h1>"; 
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
  header("Location:" . $_SERVER['HTTP_REFERER'] . "?captchaerror=true");
} else {
  $usuario = new Usuario(
    $_POST['username'], $_POST['pswd'], $_POST['firstname'], $_POST['lastname1'], $_POST['lastname2'],
    $_POST['email'], $_POST['fechaNac'], $_POST['pais'], $_POST['codPos'], $_POST['tlfn'],"usuario");

  $insert = ControladorUsuario::put($usuario);
  
  $_SESSION['insercionCorrecta'] = $insert == false ? true : true;
  header("Location:index.php");
}