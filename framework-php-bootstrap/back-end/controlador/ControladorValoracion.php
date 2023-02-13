<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/valoracion.php';


class ControladorValoracion{

    public static function put($val) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO valoracion (id_usuario,id_espectaculo,valoracion,comentario) "
                    . "VALUES('$val->id_usuario','$val->id_espectaculo','$val->valoracion','$val->comentario')");
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
            $result=$conex->query("select * from valoracion");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $val=new valoracion($reg->id_usuario,$reg->id_espectaculo,$reg->valoracion,$reg->comentario);
                    $valoraciones[]=$val;
                }
            }else $valoraciones=false;
            unset($conex);
            return $valoraciones;
        } catch (PDOException $ex) {
           echo $ex->getMessage();
        }
    }    
 
}
