<html>
<head><title>Generar Numeros</title></head>
<body>
<?php
# rand() es una función de php que genera numeros aleatorios
echo rand(258, 1458), "<br>";
$a = rand(1,100);
$b = rand(1,100);
if($b>$a){
	echo "b ($b) es mayor que a ($a)<br>";
}else{
	echo "a ($a) es mayor que b ($b)<br>";
}
?>
</body>
</html>