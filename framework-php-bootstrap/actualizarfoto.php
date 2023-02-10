<?php
session_start();
include('includes/dbconnection.php');
require_once 'back-end/controlador/ControladorUsuario.php';

if (isset($_POST['actualizarfoto'])) {
    $user = ControladorUsuario::get($_SESSION['user_email_address']);
    if ($user) {
        if(ControladorUsuario::cambiarFotodePerfil($user->id, $_FILE['imagenperfil'])){ /// QUEDA ARREGLAR AQUI LA IMAGEN Y SUBIRLA BIEN SIGUIENDO EL EJEMPLO QUE TENEMOS HECHO EN PHP CON ANTONIO PARA SUBIR FOTOS
            $_SESSION['user_image'] = $_POST['imagenperfil'];
            header('location:index.php');
        }
    }
}
