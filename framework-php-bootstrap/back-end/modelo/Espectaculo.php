<?php
class Espectaculo{
    private $id,$titulo,$tipo,$fecha,$ubicacion,$imagen;

    public function __construct( $id,$titulo,$tipo,$fecha,$ubicacion,$imagen){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        $this->fecha = $fecha;
        $this->ubicacion = $ubicacion;
        $this->imagen = $imagen;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}