<!DOCTYPE html>
<html>
<head>
	<title>Arrays con días</title>
</head>
<body>
<h1>Arrays con días de la semana</h1>
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

	echo "El primer array: ". $dias_1[0] ."<br>";
	echo "El segundo array: ". $dias_2[0] ."<br>";
	?>
</p>
</body>
</html>