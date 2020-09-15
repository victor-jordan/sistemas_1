<!DOCTYPE html>
<html>
<head>
	<title>Formulario con POST</title>
</head>
<body>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
	<fieldset>
		<legend>Datos personales</legend>
		<label for="nombre">Nombre:</label><input type="text" name="nombre"><br>
		<label for="apellido">Apellido:</label><input type="text" name="apellido"><br>
		<label for="sexo">Sexo:</label>
		<input type="radio" name="sexo" value="F">Femenino
		<input type="radio" name="sexo" value="M">Masculino
		<br>
		<label for="web">Sitio Web:</label><input type="text" name="web"><br>
		<label for="comentario">Comentario:</label><textarea name="comentario"></textarea><br>
	</fieldset>
		<input type="submit" name="enviar" value="Aceptar">
</form>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<h2>Los datos</h2>";
	echo "Nombre: ".$_POST["nombre"]."<br>";
	echo "Apellido: ".$_POST["apellido"]."<br>";
	echo "Genero: ".$_POST["genero"]."<br>";
	echo "Sitio web:".$_POST["web"]."<br>";
	echo "Comentario: ".$_POST["comentario"]."<br>";
}
?>
</body>
</html>