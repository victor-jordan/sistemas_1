<html>
	<head><title>Comparaciones</title></head>
	<body>
		<h1>Usando operadores de comparación</h1>
		<?php
			$variable1 = 15;
			$variable2 = 15;
			$variable3 = 32;

			echo "variable1 == variable2: ", $variable1 == $variable2, "<br>";
			echo "variable2 == variable3: ", $variable2 == $variable3, "<br>";
			echo "variable3 == variable1: ", $variable3 == $variable1, "<br>";
			echo $variable1 != $variable2, "<br>";
			echo $variable2 != $variable3, "<br>";
			echo $variable3 != $variable1, "<br>";
			echo $variable1 > $variable2, "<br>";
			echo $variable2 > $variable3, "<br>";
			echo $variable3 > $variable1, "<br>";
			echo $variable1 < $variable2, "<br>";
			echo $variable2 < $variable3, "<br>";
			echo $variable3 < $variable1, "<br>";
		?>
		<hr>
		<h1>Usando operaciones lógicas</h1>
		<?php
			echo "var1 es igual a var2 y var2 es mayor a var3: ", ($variable1 == $variable2) && ($variable2 > $variable3), "<br>";
			echo "var1 es igual a var2 o var2 es mayor a var3: ", ($variable1 != $variable2) || ($variable2 > $variable3), "<br>";
		?>
	</body>
</html>