<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplos de php</title>
</head>
<body>
<?php
$a = 5;
$b = 8;
if ($a < $b) {
	echo "a es menor que b<br>";
} elseif ($a == $b){
	echo "a es igual que b<br>";
} else {
	echo "a es mayor que b<br>";
}

$color = "verde";
switch ($color)
{
	case "rojo": /* Si color = rojo */
		echo "El color rojo es primario<br>";
	break;
	case "amarillo": /* Si color = amarillo */
		echo "El color amarillo es primario<br>";
	break;
	case "azul": /* Si color = azul */
		echo "El color azul es primario<br>";
	break;
	default: /* Si es otro color */
		echo "Es un color no primario<br>";
	break;
}

// Bucles o loops
$tamanio = 1;
while ($tamanio <= 6)
{
	echo"<font size=$tamanio>Tamaño $tamanio</font><br>\n";
	$tamanio++;
}

// do-while, en este bucle las instrucciones se ejecutarán al menos una vez.
$i = 0;
do {
	echo $i."<br>";
} while ($i > 0);


$colum = 5;
$fil = 3;
echo("<table border=\"1\">\n");
for ($i=1;$i<=$fil;$i++)
{
	echo("<tr>\n");
	for ($j=1;$j<=$colum;$j++)
	{
		echo ("<td>fila $i, columna $j<td>\n");
	}
	echo("</tr>\n");
}
echo("</table>")


?>
</body>
</html>