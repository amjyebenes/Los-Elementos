<?php
require_once 'back-end/controlador/ControladorUsuario.php';

$espectaculos = ControladorUsuario::getAll();

if($espectaculos){
    foreach ($espectaculos as $e){
        echo '<h1>'.$e->usuario.'</h1>';
    }
}else echo "no hay registros insertados en la base de datos";