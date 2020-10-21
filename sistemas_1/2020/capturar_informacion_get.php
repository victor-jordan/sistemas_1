<html>
<body>
	<h1>Mi primer Formulario procesado en PHP</h1>
<!-- El metodo GET envia informacion a traves de la URL -->

<h1>Usuario conectado</h1>
<hr>
<form action="procesar_formulario_get.php" method="get" target="_blank">
	<fieldset>
	<legend>Datos a procesar</legend>
	<label for="nombre">Nombre:</label><input type="text" name="nombre"><br>
	<label for="correo">E-mail:</label><input type="email" name="correo"><br>
	<label for="comentario">Comentario:</label><textarea name="comentario"></textarea><br>
	</fieldset>
	<input type="submit" value="Enviar">
</form>
</body>
</html>