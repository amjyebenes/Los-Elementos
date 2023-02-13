<?php
require_once 'Conexion.php';

class ControladorButacas{

    public static function put($selectedSeats, $selectedMovieIndex, $selectedMoviePrice) {
        try {
            $conex=new Conexion();
            $reg=$conex->exec("INSERT INTO reservas (selected_seats, selected_movie_index, selected_movie_price)
            VALUES ('" . implode(",", $selectedSeats) . "', '$selectedMovieIndex', '$selectedMoviePrice')");
            unset($conex);
            return $reg;
        } catch (PDOException $ex) {
            echo "<val href='index.php'>Ir a Inicio</val>";
            die("ERROR EN LA BBDD:".$ex->getMessage());
        }
        unset($conex);
    }
}

?>