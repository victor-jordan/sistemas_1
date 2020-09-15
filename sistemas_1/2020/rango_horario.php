<html>
<body>
<?php
$ahora = new DateTime('2020-09-15 14:00:01');
$maniana = array(DateTime::createFromFormat('H:i:s', "05:00:00"), DateTime::createFromFormat('H:i:s', "13:00:00"));
$tarde = array(DateTime::createFromFormat('H:i:s', "13:00:00"), DateTime::createFromFormat('H:i:s', "21:00:00"));
$noche = array(DateTime::createFromFormat('H:i:s', "21:00:00"), DateTime::createFromFormat('H:i:s', "05:00:00"));

echo "Ahora = ", $ahora->format('Y-m-d H:i:s'), "<br>";

if($ahora > $maniana[0] && $ahora < $maniana[1]){
	echo "Mañana";
} elseif ($ahora > $tarde[0] && $ahora < $tarde[1]) {
	echo "Tarde";
} else {
	echo "Noche";
}
?>
</body>
</html>