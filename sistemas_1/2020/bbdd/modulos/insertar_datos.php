<?php
require('retornar_conexion.php');

function insertar($insercion){
    if($conexion = conexion()){
        $conexion->query($insercion);
    }
}
?>