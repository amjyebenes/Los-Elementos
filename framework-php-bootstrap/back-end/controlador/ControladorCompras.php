<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/compra.php';


class ControladorCompras{

    public static function put($com) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO compras (id_usuario,id_espectaculo,importe) "
                    . "VALUES('$com->id_usuario','$com->id_espectaculo','$com->importe', $com->tickets)");
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
            $result=$conex->query("select * from compras");
            if($result->rowCount()){
                while($reg=$result->fetchObject()){
                    $com=new Compra($reg->id_user,$reg->id_espec,$reg->importe, $reg->tickets);
                    $compras[]=$com;
                }
            }else $compras=false;
            unset($conex);
            return $compras;
        } catch (PDOException $ex) {
           echo $ex->getMessage();
        }
    }    
 
}
