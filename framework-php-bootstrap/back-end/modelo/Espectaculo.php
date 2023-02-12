<?php
class Espectaculo{
    private $id,$titulo,$tipo,$fecha,$ubicacion,$imagen, $precio;

    public function __construct( $id,$titulo,$tipo,$fecha,$ubicacion,$imagen, $precio){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        $this->fecha = $fecha;
        $this->ubicacion = $ubicacion;
        $this->imagen = $imagen;
        $this->precio = $precio;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}