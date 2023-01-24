<?php
require_once 'back-end/controlador/ControladorEspectaculo.php';

$espectaculos = ControladorEspectaculo::getAll();

foreach ($espectaculos as $e){
    echo '<h1>'.$e->titulo.'</h1>';
}