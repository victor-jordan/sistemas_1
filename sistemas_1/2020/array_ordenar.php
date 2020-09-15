<!DOCTYPE html>
<html>
<head>
	<title>Arrays ordenado</title>
</head>
<body>
<h1>Arrays</h1>
<p>
	<?php
	$dias_1[0] = "domingo";
	$dias_1[1] = "lunes";
	$dias_1[2] = "martes";
	$dias_1[3] = "miercoles";
	$dias_1[4] = "jueves";
	$dias_1[5] = "viernes";
	$dias_1[6] = "sabado";

	$dias_2 = array("domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");

	$numeros = array(1, 5, 3, 6, 8, 7, 9, 2, 4, 10);

	echo "El primer array: ". $dias_1[0] ."<br>";
	echo "El segundo array: ". $dias_2[0] ."<br>";

	sort($dias_1);
	echo "El primer array 2a posición: ". $dias_1[1] ."<br>";
	rsort($numeros);
	
	foreach ($numeros as $n) {
    	echo $n, ", ";
	}
	?>
</p>
</body>
</html>