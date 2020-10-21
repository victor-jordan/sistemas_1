<?php
// siempre manejar COOKIES antes del cuerpo del documento HTML
$nombre_cookie = "usuario";
$valor_cookie = "pepito";
$expirar = time() + (86400 * 30); // 86400 = 1 día
setcookie($nombre_cookie, $valor_cookie, $expirar, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cookies (CREAR)</title>
</head>
<body>
	<h1>Manejo de COOKIES</h1>
	<p>La primera vez que entremos a la página, mostrará un mensaje de que el cookie no está seteado. Pero al refrescar, aparecerá lo que corresponde.</p>
<?php
if(!isset($_COOKIE[$nombre_cookie])){
	echo "COOKIE '" . $nombre_cookie . "' no seteado!";
} else {
	echo "COOKIE '" . $nombre_cookie . "': con el valor " . $_COOKIE[$nombre_cookie] . "<br>";
}
?>
<p>Para reasignar valores cookie, simplemente se vuelve a ejecutar el comando</p>
<?php
// setcookie($nombre_cookie, "Juanito", $expirar, "/");
echo "COOKIE '" . $_COOKIE[$nombre_cookie] . "'";
?>
</body>
</html>