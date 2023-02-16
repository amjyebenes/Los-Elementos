<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/Contacto.php';

class ControladorContacto{

    public static function put ($val){
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO contacto (nombre, email, consulta) "
                    . "VALUES('$val->nombre','$val->email','$val->consulta')");
            unset($conex);
            return $reg;
        } catch (PDOException $ex) {
            echo "<val href='index.php'>Ir a Inicio</val>";
            die("ERROR EN LA BBDD:".$ex->getMessage());
        }
        unset($conex);
        }

        public static function getAll(){
            try{
                $conex=new Conexion();
                $result=$conex->query("select * from contacto");
                if($result->rowCount()){
                    while($reg=$result->fetchObject()){
                        $cont=new Contacto($reg->nombre,$reg->email,$reg->contacto);
                        $contacto[]=$cont;
                    }
                }else $contacto=false;
                unset($conex);
                return $contacto;
            } catch (PDOException $ex) {
               echo $ex->getMessage();
            }
        } 
    }

?>