<?php
session_start();
include("includes/dbconnection.php");

if ( $_SESSION['captcha_text'] != $_POST['captcha_challenge']){
  header("Location:index.php?captchaerror");
}else{

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$birthdate=$_POST['birthdate'];
$postalcode=$_POST['postalcode'];

// ESTO HAY Q REVISARLO Y CAMBIAR LOS CAMPOS DE LA BASE DE DATOS
$sql = "INSERT INTO user (firstname,lastname,email,birthdate,postalcode)".
       " VALUES ('$firstname','$lastname','$email','$birthdate','$postalcode')";

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