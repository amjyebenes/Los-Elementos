<?php
require_once 'back-end/controlador/ControladorEspectaculo.php';

$espectaculos = ControladorEspectaculo::getAll();

if($espectaculos){
    foreach ($espectaculos as $e){
        echo '<h1>'.$e->titulo.'</h1>';
    }
}else echo "no hay registros insertados en la base de datos";