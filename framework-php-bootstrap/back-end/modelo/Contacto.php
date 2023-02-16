<?php
class Contacto{

    private $nombre,$email,$consulta;

    public function __construct($nombre,$email,$consulta)
    {
        
        $this->nombre = $nombre;
        $this->email = $email;
        $this->consulta = $consulta;
        
    }

    
    public function __get($name) {
        return $this->$name;
    }

    public function __set($name, $value) {
        $this->$name=$value;
    }
}