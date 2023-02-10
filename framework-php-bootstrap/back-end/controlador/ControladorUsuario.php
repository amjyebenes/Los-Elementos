<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/Usuario.php';

class ControladorUsuario {
    
    public static function put($u) {
        try {
            $conex = new Conexion();
            $md5pass = md5($u->pass);
            $reg = $conex->exec("INSERT INTO usuario VALUES ($u->id, '$u->usuario', '$md5pass', '$u->nombre', "
            ."'$u->apellido1', '$u->apellido2', '$u->correo', '$u->fecha_nac', '$u->pais', $u->cod_postal, $u->telefono, '$u->rol')");
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }

    public static function get($correo) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM usuario WHERE correo = '$correo'");
            if ($result->rowCount()) {
                $reg = $result->fetchObject();
                $usuario = new Usuario(
                        $reg->id, $reg->usuario, $reg->pass, $reg->nombre, $reg->apellido1, $reg->apellido2,
                        $reg->correo, $reg->fecha_nac, $reg->pais, $reg->cod_postal, $reg->telefono, $reg->rol);
            } else $usuario = false;
            unset($conex);
            return $usuario;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }

    public static function getAll() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM usuario");
            if ($result->rowCount()) {
                while ($reg = $result->fetchObject()) {
                    $u = new Usuario(
                        $reg->id, $reg->usuario, $reg->pass, $reg->nombre, $reg->apellido1, $reg->apellido2,
                        $reg->correo, $reg->fecha_nac, $reg->pais, $reg->cod_postal, $reg->telefono, $reg->rol);
                    $usuarios[] = $u;
                }
                return $usuarios;
            } else $usuarios = false;
            unset($conex);
            return $usuarios;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }

    public static function cambiarContrasena($id, $nuevapass){
        try {
            $conex = new Conexion();
            // hago el update
            $md5pass = md5($nuevapass);
            $reg = $conex->exec("UPDATE usuario set pass = '$md5pass' where id = $id");
            if($reg){
                echo "Actualización correcta";
            }else echo "Actualización ERRONEA";
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }
}