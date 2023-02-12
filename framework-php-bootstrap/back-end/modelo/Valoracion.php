<?php
class Valoracion{
    private $id_usuario,$id_espectaculo,$valoracion,$comentario;

    public function __construct($id_usuario,$id_espectaculo,$valoracion,$comentario){
        $this->id_usuario = $id_usuario;
        $this->id_espectaculo = $id_espectaculo;
        $this->valoracion = $valoracion;
        $this->comentario = $comentario;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }

}