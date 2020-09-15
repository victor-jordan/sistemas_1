<?php 
include('pruebas4.php');

echo $frase; /* mostrará "lejos-en-cualquier-lugar" */
echo '<br>';

hacer_algo('cadena<br>');
echo sumar(5, 8);
echo'<br>';

function concatena($cadena1='Hola ',$cadena2='Mundo!<br>')
{
return $cadena1.$cadena2;
}
echo concatena();
echo concatena('Uno, ','Dos<br>');
echo concatena('Adios ');
echo concatena('null', 'null');


 ?>