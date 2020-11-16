<!DOCTYPE html>
<?php
require('modulos\retornar_consulta.php');
session_start();
?>
<html lang="es-la">
<head>
<meta charset="utf-8">
<title>Sistema Basico de Login</title>
</head>
<body>
<h1>CRUD de usuarios</h1>
<form id="formulario" method="POST" action="insertar_usuario.php">
    <label id="user_id">#</label><br>
    <label for="username">Username</label> <input type="text" name="username"><br>
    <label for="password">Password</label><input type="text" name="password"><br>
    <input type="checkbox" name="active"><br>
    <input id="accion" type="submit" value="Insertar">
</form>
<br>
<hr>
<br>
<table>
<thead>
	<tr><th>id</th><th>username</th><th>password</th><th>active</th><th>acciones</th></tr>
</thead>
<tbody>
<?php
	$sentencia = "select * from usuario;";
    $resultado = consultar_varios($sentencia);
    
    if(!$resultado){
        echo "<tr><td colspan='5'>No se encontraron registros</td></tr>";
    } else {
        foreach ($resultado as $key => $value) {
            echo "<tr onclick='llenarForm(this);'>";
            echo "<td>" . $value['id'] . "</td>";
            echo "<td>" . $value['username'] . "</td>";
            echo "<td>secreto</td>";
            echo "<td>" . $value['active'] . "</td>";
            echo "<td><a href='url_borrar.php'>Borrar</a></td>";
            echo "<tr>";
        }
    }
?>
</tbody>
</table>
<script>
function llenarForm(row){
    var fila = row.cells;
    document.getElementById("user_id").innerHTML = fila[0].innerHTML;
    document.getElementsByName("username")[0].value = fila[1].innerHTML;
    document.getElementsByName("password")[0].value = fila[2].innerHTML;
    if (fila[3].innerHTML == "1") {
        document.getElementsByName("active")[0].checked = true;
    } else {
        document.getElementsByName("active")[0].checked = false;
    }
    document.getElementById("accion").value = "Modificar";
    document.getElementById("formulario").action = "modificar_usuario.php";
}
</script>
</body>
</html>