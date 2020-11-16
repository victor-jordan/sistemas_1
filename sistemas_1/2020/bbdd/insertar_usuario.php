<?php
require('modulos/retornar_conexion.php');

function insertar(){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($_POST["active"] == "on") {
        $active = 1;
    } else {
        $active = 0;
    }
    $sentencia = "insert into usuario (username, password, active) values ('" . $username. "','" . $password . "', " . $active . ");";
    if($conexion = conectar()){
        try{
            $conexion->query($sentencia);
            echo "Insertado!";
            header('Refresh: 8; URL = listado.php');
        } catch (Exception $e) {
            echo $e;
        }
    } else {
        echo "no se pudo conectar!";
    }
}

insertar();
?>