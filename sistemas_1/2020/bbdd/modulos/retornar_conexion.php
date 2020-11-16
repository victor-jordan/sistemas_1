<?php
function conectar(){
	$conexion = mysqli_connect('127.0.0.1', 'userdb', '123456', 'prueba');
	if (mysqli_connect_errno($conexion)){
		echo "Falló la conexion: " . mysqli_connect_error();
		return null;
	} else {
		return $conexion;
	}
}
?>