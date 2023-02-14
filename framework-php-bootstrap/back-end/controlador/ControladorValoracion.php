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
                    $val->id = $reg->id;
                    $valoraciones[]=$val;
                }
            }else $valoraciones=false;
            unset($conex);
            return $valoraciones;
        } catch (PDOException $ex) {
           echo $ex->getMessage();
        }
    }   
    
    public static function delete($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("DELETE FROM valoracion where id = '$id'");
            return $result;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }

    public static function actualizarValoracion($id, $id_usuario, $id_espectaculo, $valoracion, $comentario){
        try {
            $conex = new Conexion();
            // hago el update
            $reg = $conex->exec("UPDATE valoracion set id_usuario = '$id_usuario', id_espectaculo = '$id_espectaculo', valoracion = '$valoracion', comentario = '$comentario' where id = $id");
            if($reg){
                return true;
            }else {
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }

    public static function get($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM valoracion WHERE id = '$id'");
            if ($result->rowCount()) {
                $reg = $result->fetchObject();
                $val=new valoracion($reg->id_usuario,$reg->id_espectaculo,$reg->valoracion,$reg->comentario);
                $val->id = $reg->id;
            } else $val = false;
            unset($conex);
            return $val;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }
 
}
