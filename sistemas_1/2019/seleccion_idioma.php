<?php /* Mensajes de bienvenida para cada idioma , usamos variables con nombres en inglés para simplificar el trabajo */
$spanish = "Hola";
$english = "Hello";
$french = "Bonjour"; /* El navegador nos dirá cual es el idioma seleccionado, mediante una variabla, en este caso $_SERVER */
$idioma=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

echo "<h1>Seleccion de Idioma</h1>";	

if ($idioma == "es")/* El idioma del navegador es "spanish"? */ 
{
	echo "el saludo en español es $spanish"; /* Mostramos el saludo en español. */
}
elseif ($idioma == "fr") /* El idioma del navegador es "french"? */
{
	echo "el saludo en frances es $french"; /* Mostramos el saludo en francés. */
}
else /* En cualquier otro caso */
{ 
	echo "el saludo en ingles es $english"; /* Mostramos el saludo en inglés. */ 
}
?>