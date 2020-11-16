<?php
require('retornar_conexion.php');

function modificar($modificacion){
    if($conexion = conexion()){
        $conexion->query($modificacion);
    }
}
?>