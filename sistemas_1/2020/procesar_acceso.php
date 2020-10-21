<?php
session_start();

$sesion_valida = false;

$usuarios = array(
    "juanito" => "michi",
    "pepito" => "anita",
    "anita" => "juanito",
);

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    foreach ($usuarios as $registro => $contra) {
        if ($usuario == $registro && $clave == $contra){
            $_SESSION['usuario'] = $usuario;
            $sesion_valida = true;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Acceso procesado</title>
</head>
<body>
<?php
if($sesion_valida){
    echo "<h1>Bienvenido/a $usuario</h1>";
    echo "<p>Usted ha ingresado correctamente al sistema</p>";
    echo "<p>Para salir ir a este <a href='logout.php'>Link de Salida</a></p>";
} else{
    echo "<p>Usuario o Clave incorrecta.</p>";
    echo "<p>O su sesion quedo invalida.</p>";
    echo "<p>Volver a acceder <a href='login.html'>Link de Acceso</a></p>";
}
?>
<p></p>
</body>
</html>