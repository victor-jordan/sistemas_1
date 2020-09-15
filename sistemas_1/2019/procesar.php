<!DOCTYPE html>
<html>
<head>
	<title>Procesando los datos</title>
</head>
<body>
<p>Bienvenido <?php echo $_GET["nombre"] . " " . $_GET["apellido"]; ?>. <br>
	Su correo es: <?php echo $_GET["correo"]; ?>.
	Y su comentario fue: <?php echo $_GET["comentario"]; ?>.
</p>
</body>
</html>