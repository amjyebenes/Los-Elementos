<?php
class Conexion extends PDO{
    private $dsn = "mysql:host=localhost;dbname=eletickets;charset=utf8mb4";
    private $user = "dwes";
    private $pass = "abc123.";
    
    public function __construct() {
        parent::__construct($this->dsn, $this->user, $this->pass);
    }

}