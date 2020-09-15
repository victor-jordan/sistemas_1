<!DOCTYPE html>
<html>
<head>
	<title>Ejemplos de php</title>
</head>
<body>
<?php
// Un comentario de una sola línea
/* Un comentario
de varias 
líneas */
# Comentario estilo shell scripting

// Variableas
$ver_sentir_pensar = "Sesenta";
// PHP es Case Sensitive
$Ver_Sentir_Pensar = 70;
$ver_SentiR_PENSAR = 80;
$ver_sentir_pensar = 60;
echo "hola desde PHP embebido";

// Constantes
define("Constante", "HOLA MUNDO");
echo Constante;

// Expresiones
5; /* "vale" 5 */
5+1; /* "vale" 6 */
$a= 5+1; /* "vale" 6 */
substr("Hola",0,2); // "vale" "Ho"
$b=substr("Hola",0,2); // "vale" "Ho"

?>
</body>
</html>