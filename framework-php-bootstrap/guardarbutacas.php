<?php
include('back-end/controlador/ControladorButacas.php');
$selectedSeats = json_decode($_POST["selectedSeats"]);
$selectedMovieIndex = $_POST["selectedMovieIndex"];
$selectedMoviePrice = $_POST["selectedMoviePrice"];

ControladorButacas::put($selectedSeats, $selectedMovieIndex, $selectedMoviePrice);

header("location:index.php");
?>