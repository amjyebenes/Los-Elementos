<?php
session_start();
include("includes/dbconnection.php");

if ( $_SESSION['captcha_text'] != $_POST['captcha_challenge']){
  header("Location:index.php?captchaerror");
}else{

$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname1=$_POST['lastname1'];
$lastname2=$_POST['lastname2'];
$email=$_POST['email'];
$birthdate=$_POST['fechaNac'];
$country=$_POST['pais'];
$phone=$_POST['tlfn'];
$postalcode=$_POST['codPos'];
$postalcode=$_POST['postalcode'];
$password = $_POST['pswd'];

// ESTO HAY Q REVISARLO Y CAMBIAR LOS CAMPOS DE LA BASE DE DATOS
$sql = "INSERT INTO usuario (usuario,pass,nombre,apellido1,apellido2, correo, fecha_nac, pais, cod_postal, telefono, rol)".
       " VALUES ('$username','$password','$firstname','$lastname1','$lastname2','$email','$birthdate','$country','$postalcode','$phone',null)";

if ($conn->query($sql) === TRUE) {
    $_SESSION['iduser']=$conn->insert_id;
    $conn->close();
    header("Location:index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  $conn->close();
  header("Location:logout.php");
}
}
?>