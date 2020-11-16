<?php
    $conexion = new mysqli("127.0.0.1", "userdb", "123456", "prueba", 3306);
    if($conexion->connect_errno){
        echo "Fallo la conexion: ". $conexion->connect_errno ." (". $conexion->connect_error .")\n";
        exit;
    } else {
        echo $conexion->host_info . "\n";
    }

    echo "<hr>";
    $pregunta = "select * from usuario where username = 'pepito';";
    $resultado_pregunta = $conexion->query($pregunta);

    var_dump($resultado_pregunta);

    if($resultado_pregunta->num_rows === 0){
        echo "El usuario pepito no existe, no hago nada...\n";
    } else {
        echo "Encontrado usuario pepito, borrando...\n";
        $borrar = "delete from usuario where username = 'pepito';";
        $conexion->query($borrar);
    }

    $resultado_pregunta->free();
    $conexion->close();
?>