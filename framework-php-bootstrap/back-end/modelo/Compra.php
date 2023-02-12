<?php
class Compra{
    private $id_usuario,$id_espectaculo,$importe;

    public function __construct($id_usuario,$id_espectaculo,$importe){
        $this->id_usuario = $id_usuario;
        $this->id_espectaculo = $id_espectaculo;
        $this->importe = $importe;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}