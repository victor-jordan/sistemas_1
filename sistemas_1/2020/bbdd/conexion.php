<?php
    $conexion = new mysqli("127.0.0.1", "userdb", "123456", "prueba", 3306);
    if($conexion->connect_errno){
        echo "Fallo la conexion: ". $conexion->connect_errno ." (". $conexion->connect_error .")\n";
        exit;
    } else {
        echo $conexion->host_info . "\n";
    }

    $sentencia = "select * from usuario;";

    $resultado = $conexion->query($sentencia);

    if($resultado->num_rows === 0){
        echo "No hay coincidencias para su consulta.\n";
        exit;
    } else {
        // $usuarios = $resultado->fetch_assoc();

        echo "<table>";
        while($usuarios = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $usuarios['id'] . "</td>";
            echo "<td>" . $usuarios['username'] . "</td>";
            echo "<td>secreto</td>";
            echo "<td>" . $usuarios['active'] . "</td>";
            echo "<td><a href='url_borrar.php'>Borrar</a></td>";
            echo "<tr>";
        }
        echo "</table>\n";
    }

    $resultado->free();
    $conexion->close();
?>