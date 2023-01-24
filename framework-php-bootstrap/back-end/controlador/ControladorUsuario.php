<?php
require_once 'back-end/modelo/Usuario.php';
require_once 'Conexion.php';

class ControladorUsuario {
    
    /**
     * Summary of insertar
     * @param mixed $u
     * @return void
     */
    public static function put($u) {
        try {
            $conex = new Conexion();
            $reg = $conex->exec("INSERT INTO usuario VALUES ($u->id, '$u->usuario', '$u->pass', '$u->nombre', "
            ."'$u->apellido1', '$u->apellido2', '$u->correo', '$u->fecha_nac', '$u->pais', $u->cod_postal, $u->telefono, '$u->rol')");
        } catch (PDOException $ex) {
            die("ERROR en la BD. " . $ex->getMessage());
        }
        unset($conex);
    }

    /**
     * Summary of buscarUsuario
     * @param mixed $id
     * @return Usuario|bool
     */
    public static function get($id) {
        try {
            $conex = new Conexion();
            $result = $conex->query("SELECT * FROM usuario WHERE id = $id");
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

    /**
     * Summary of getAllUsuarios
     * @return array<Usuario>|bool
     */
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
}