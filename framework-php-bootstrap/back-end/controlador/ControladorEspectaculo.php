<?php
require_once './modelo/Espectaculo.php';
require_once 'Conexion.php';

class ControladorEspectaculo{

    public static function put($espec) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO espectaculo (id_usuario,id_espectaculo,valoracion,comentario) "
                    . "VALUES('$espec->id_usuario','$espec->id_espectaculo','$espec->valoracion','$espec->comentario')");
            unset($conex);
            return $reg;
        } catch (PDOException $ex) {
            echo "<espec href='index.php'>Ir a Inicio</espec>";
            die("ERROR EN LA BBDD:".$ex->getMessage());
        }
        unset($conex);
    }
    
    public static function getAll(){
        try{
            $conex=new Conexion();
            $result=$conex->query("select * from espectaculo");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $espec=new espectaculo($reg->id,$reg->id_usuario,$reg->id_espectaculo,$reg->valoracion,$reg->comentario);
                    $espectaculos[]=$espec;
                }
            }else $espectaculos=false;
            unset($conex);
            return $espectaculos;
        } catch (PDOException $ex) {
           echo $ex->getMessage();
        }
    }    
 
}
