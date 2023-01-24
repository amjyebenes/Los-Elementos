<?php
class Espectaculo{
    private $id,$titulo,$tipo,$fecha_publicacion,$texto,$imagen;

    public function __construct( $id,$titulo,$tipo,$fecha_publicacion,$texto,$imagen){
        $this->id = $id;
        $this->titulo = $titulo;
        $this->tipo = $tipo;
        $this->fecha_publicacion = $fecha_publicacion;
        $this->texto = $texto;
        $this->imagen = $imagen;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}