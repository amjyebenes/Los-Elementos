<?php
class Compra{
    private $id_usuario,$id_espectaculo,$importe, $tickets;

    public function __construct($id_usuario,$id_espectaculo,$importe, $tickets){
        $this->id_usuario = $id_usuario;
        $this->id_espectaculo = $id_espectaculo;
        $this->importe = $importe;
        $this->tickets = $tickets;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}