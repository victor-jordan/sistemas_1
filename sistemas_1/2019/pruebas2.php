<!DOCTYPE html>
<html>
<head>
	<title>Ejemplos de php</title>
</head>
<body>
<?php
// PHP hace conversión automática de tipos cuando cree que es necesario
$a = "33 peras" + "9 manzanas";
echo $a;
// para concantenar cadenas se usa .
$a = 1;
$a = 'Mary tiene '.$a." cordero<br>";
echo $a;

// Operador de supresión de errores @
//$fd = @fopen('archivo.txt') or die('ha ocurrido un error!<br>');
$b = true;
$c = "verdadero";
$d = "falso";

//podemos usar el operador ternario ? para crear asignaciones condicionadas.
$a = $b ? $c : $d;

echo $a;

?>
</body>
</html>