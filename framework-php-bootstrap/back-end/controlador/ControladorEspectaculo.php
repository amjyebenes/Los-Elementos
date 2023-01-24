<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/Espectaculo.php';


class ControladorEspectaculo{

    public static function put($espec) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO espectaculo (titulo,tipo,fecha_publicacion,texto,imagen) "
                    . "VALUES('$espec->titulo','$espec->tipo','$espec->fecha_publicacion','$espec->texto','$espec->imagen')");
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
                    $espec=new espectaculo($reg->id,$reg->titulo,$reg->tipo,$reg->fecha_publicacion,$reg->texto,$reg->imagen);
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
