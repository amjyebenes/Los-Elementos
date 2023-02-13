<?php
require_once 'Conexion.php';
require_once 'back-end/modelo/Usuario.php';

class ControladorUsuario {
    
    public static function put($u) {
        try {
            $conex = new Conexion();
            $md5pass = md5($u->pass);
            $reg = $conex->exec("INSERT INTO usuario VALUES ($u->id, '$u->usuario', '$md5pass', '$u->nombre', "
            ."'$u->apellido1', '$u->apellido2', '$u->correo', '$u->fecha_nac', '$u->pais', $u->cod_postal, $u->telefono, '$u->rol', '$u->imagen')");
            return $reg ? true : false;
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
                        $reg->correo, $reg->fecha_nac, $reg->pais, $reg->cod_postal, $reg->telefono, $reg->rol, $reg->imagen);
            } else $usuario = false;
            unset($conex);
            return $usuario;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }

    public static function getById($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM usuario WHERE id = $id");
            if ($result->rowCount()) {
                $reg = $result->fetchObject();
                $usuario = new Usuario(
                        $reg->id, $reg->usuario, $reg->pass, $reg->nombre, $reg->apellido1, $reg->apellido2,
                        $reg->correo, $reg->fecha_nac, $reg->pais, $reg->cod_postal, $reg->telefono, $reg->rol, $reg->imagen);
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
                        $reg->correo, $reg->fecha_nac, $reg->pais, $reg->cod_postal, $reg->telefono, $reg->rol, $reg->imagen);
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

    public static function getUltimoId() {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT id FROM usuario order by id desc limit 1");
            if ($result->rowCount()) {
                return $result->fetchObject()->id;
            } else $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }

    public static function cambiarFotodePerfil($id, $imagen){
        try {
            $conex = new Conexion();
            // hago el update
            $reg = $conex->exec("UPDATE usuario set imagen = '$imagen' where id = $id");
            if($reg){
                echo "Actualización correcta";
                return true;
            }else {
                echo "Actualización ERRONEA";
                return false;
            }
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }

    public static function getFotoPerfil($id){
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT imagen FROM usuario where id = $id");
            if ($result->rowCount()) {
                return $result->fetchObject()->imagen;
            } else $result = false;
            unset($conex);
            return $result;
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
    }

    
}