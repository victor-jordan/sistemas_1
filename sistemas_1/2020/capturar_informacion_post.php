<html>
<body>
	<h1>Mi primer Formulario procesado en PHP</h1>
<!-- El metodo POST envia informacion oculta en un proceso de segundo plano (por debajo) -->

<h1>Usuario conectado</h1>
<hr>
<form action="procesar_formulario_post.php" method="post">
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