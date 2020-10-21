<?php
// Para eliminar una cookie, forzamos el expirado
setcookie('usuario', null, -1, "/");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manejo de cookies (BORRAR)</title>
</head>
<body>
	<h1>Manejo de COOKIES</h1>
	<p>Borramos el COOKIE haciedolo expirar</p>
<?php
	echo "<p>Cookie 'usuario' eliminado.</p>";
?>
</body>
</html>