<?php
// Iniciar una sesion
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manejo de sesiones (CREAR)</title>
</head>
<body>
<h1>Manejo de Sesiones</h1>
<p>La función "session_start" debe ser lo primero en ejecutarse, antes de setear sesiones.</p>
<?php
$_SESSION["color"] = "marron";
$_SESSION["animal"] = "oso";
echo "Variables de session creadas.";
?>
<p>Las variables estaran disponibles durante toda la sesion activa del navegador. Eso significa que al cerrarlo las sesiones se destruyen.</p>
</body>
</html>