<?php

class Usuario {
    private $id;
    private $usuario;
    private $pass;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $correo;
    private $fecha_nac;
    private $pais;
    private $cod_postal;
    private $telefono;
    private $rol;

    /**
     * Summary of __construct
     * @param mixed $id
     * @param mixed $usuario
     * @param mixed $pass
     * @param mixed $nombre
     * @param mixed $apellido1
     * @param mixed $apellido2
     * @param mixed $correo
     * @param mixed $fecha_nac
     * @param mixed $pais
     * @param mixed $cod_postal
     * @param mixed $telefono
     * @param mixed $rol
     */
    function __construct($id, $usuario, $pass, $nombre, $apellido1, $apellido2, $correo, $fecha_nac, $pais, $cod_postal, $telefono, $rol)
    {
        $this->id = $id;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->correo = $correo;
        $this->fecha_nac = $fecha_nac;
        $this->pais = $pais;
        $this->cod_postal = $cod_postal;
        $this->telefono = $telefono;
        $this->rol = $rol;
    }
    
    /**
     * Summary of __get
     * @param mixed $name
     * @return mixed
     */
    public function __get($name) {
        return $this->$name;
    }

    /**
     * Summary of __set
     * @param mixed $name
     * @param mixed $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
}