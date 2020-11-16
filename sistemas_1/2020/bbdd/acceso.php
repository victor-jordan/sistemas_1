<!DOCTYPE html>
<?php
require('modulos\retornar_consulta.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $usuario = $_POST['username'];
    $clave = $_POST['password'];

    $consulta = "select * from usuario where username = '$usuario' and password = '$clave';";
    $resultado = consultar($consulta);
    if($resultado=="No encontrado"){
        echo "Usuario o password incorrectos.";
    }else if($resultado['active'] == false){
        echo "El usuario se encuentra inactivo, contactar con el administrador.";
        exit();
    } else {
        echo "Usted accedió correctamente.";
        $_SESSION['usuario'] = $resultado['username'];
        header('Refresh: 1; URL = listado.php');
    }
}
?>
<html lang="es-la">
<head>
<meta charset="utf-8">
<title>Sistema Basico de Login</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="username">Usuario: </label> <input type="text" name="username" required><br><br>
        <label for="passoword">Clave: </label> <input type="password" name="password" required><br><br>
        <button type="submit">Acceder</button>
    </form>
</body>
</html>