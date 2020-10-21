<?php
$cadena = "La lluvia cae siempre en noviembre";
$patron = "/lluvia/i";
$resultado = preg_match($patron, $cadena);

if($resultado){
	echo "Hay lluvia";
} else {
	echo "No hay lluvia";
}
?>