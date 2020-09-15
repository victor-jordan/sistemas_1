<!DOCTYPE html>
<html>
<body>
<p>Bienvenido <?php echo $_GET["nombre"] . " " . $_GET["apellido"]; ?><br>
E-mail enviado: <?php echo $_GET["correo"]; ?></p>
Su comentario: <?php echo $_GET["comentario"]; ?>
</body>
</html>