<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Manejo de SESSIONS - Ver variables</h1>
<p>Las variables seteadas previamente</p>
<?php
echo "Hemos creado un " . $_SESSION["animal"] . " de color " . $_SESSION["color"] . " mediante session.";
?>
<p>Otra forma de ver sesiones en forma recursiva es:</p>
<?php
print_r($_SESSION);
?>
<p>Para cambiar el valor de una variable SESSION, simplemente se puede sobreescribir (o reasignar). Para ver el cambio refrescamos el documento.</p>
<?php
$_SESSION["color"] = "naranjado";
print_r($_SESSION);
?>
</body>
</html>