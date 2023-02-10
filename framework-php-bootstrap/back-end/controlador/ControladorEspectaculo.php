<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/Espectaculo.php';


class ControladorEspectaculo{

    public static function put($espec) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO espectaculo (titulo,tipo,fecha,ubicacion,imagen) "
                    . "VALUES('$espec->titulo','$espec->tipo','$espec->fecha_publicacion','$espec->ubicacion','$espec->imagen')");
            unset($conex);
            return $reg;
        } catch (PDOException $ex) {
            echo "<espec href='index.php'>Ir a Inicio</espec>";
            die("ERROR EN LA BBDD:".$ex->getMessage());
        }
        unset($conex);
    }
    public static function get($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM espectaculo WHERE correo = $id");
            if ($result->rowCount()) {
                $reg = $result->fetchObject();
                $espec=new espectaculo($reg->id,$reg->titulo,$reg->tipo,$reg->fecha,$reg->ubicacion,$reg->imagen);
            } else $espec = false;
            unset($conex);
            return $espec;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }
    
    public static function getAll(){
        try{
            $conex=new Conexion();
            $result=$conex->query("select * from espectaculo");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $espec=new espectaculo($reg->id,$reg->titulo,$reg->tipo,$reg->fecha,$reg->ubicacion,$reg->imagen);
                    $espectaculos[]=$espec;
                }
            }else $espectaculos=false;
            unset($conex);
            return $espectaculos;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }  
    
    public static function getAllConciertos(){
        try{
            $conex=new Conexion();
            $result=$conex->query("select * from espectaculo where tipo = 'concierto'");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $espec=new espectaculo($reg->id,$reg->titulo,$reg->tipo,$reg->fecha,$reg->ubicacion,$reg->imagen);
                    $espectaculos[]=$espec;
                }
            }else $espectaculos=false;
            unset($conex);
            return $espectaculos;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    } 
    
    public static function getAllEventos(){
        try{
            $conex=new Conexion();
            $result=$conex->query("select * from espectaculo where tipo != 'concierto'");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $espec=new espectaculo($reg->id,$reg->titulo,$reg->tipo,$reg->fecha,$reg->ubicacion,$reg->imagen);
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
