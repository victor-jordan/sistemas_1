<?php
$a = array(); /* array vacío . */
$a = array('hola'); /* tiene un solo elemento, $a[0], que vale "hola". */
$a = array('Hola',1,false,2.5); /* $a[0,1,2,3,4] */
$a[] = ' valor agregado.';
#echo $a[0].$a[1].$a[2].$a[3].$a[4]; /* Muestra "Hola mundo!". */
#echo $a; /* Mostrará el array, cuidado con esto!! */

$nombre = 'Juan';
echo 'Hola $nombre <br>';
$frase = "Hola $nombre <br>";
echo $frase;
echo "Hola \$nombre <br>";
echo "Las cadenas pueden ocupar varias líneas sin ningún problema, incluyendo saltos de línea, <br> pero !hay que tener cuidado de cerrar las comillas!";

$a = 42;
$b = & $a; /* $b vale 42. De hecho, $a y $b apuntan a la misma celda de memoria, en la que está el valor 42. */ 
$b++; /* tanto $a como $b pasan a valer 43. */
$c &= 58; /* Esto dara  un error. */ 

// TYPE CASTING
$variable = (string) 5; /* vale "5" */
$a = (boolean) 56-7; /* $a es el booleano "true". */ 



?>