<?php
session_start();
$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de logout simple</title>
</head>
<body>
<?php
echo "<p>Usted ha accedido como $usuario</p>";
echo "<p>Está saliendo del sistema.</p>";
echo "<p><a href='login.html'>Volver a acceder</a></p>";
session_destroy();
?>
</body>
</html>