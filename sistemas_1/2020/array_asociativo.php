<html>
    <head>
        <title>Array asocitivos</title>
    </head>
    <body>
    <?php
        $edades = array(
            "Cristian"=>18,
            "Talia"=>15,
            "Gabriel"=>33,
            "Mario"=>24,
            "Victor"=>38
        );
        // var_dump($edades);
        $mayor_edad = array_keys($edades, max($edades));
        $menor_edad = array_keys($edades, min($edades));
        echo "<ol>";
        $acumulador = 0;
        foreach ($edades as $indice => $valor) {
            if($indice == $mayor_edad){
                echo "<li>$indice, tiene $valor. Es el mayor.</li>";
            } elseif ($indice == $menor_edad){
                echo "<li>$indice, tiene $valor. Es el menor.</li>";
            } else {
                echo "<li>$indice, tiene $valor</li>";
            }
            $acumulador += $valor;
        }
        echo "</ol>";
        $promedio = $acumulador / count($edades);
        echo "Promedio de edades es $promedio";
    ?>      
    </body>
</html>