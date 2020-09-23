<!DOCTYPE html>
<html>
<head>
    <title>Tabla condicional</title>
    <style>
        table{
            background-color: #E4FDEF;
            border: 1px solid black collapse;
            border-collapse: collapse;
            width: 100%;
        }

        table caption{
            text-align: right;
            color: gray;
            font-style: italic;
            font-weight: bold;
        }

        table thead tr th{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #827D7D;
            color: white;
        }

        tbody tr td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        tfoot tr th{
            border: 1px solid black;
            border-collapse: collapse;
            background-color: #827D7D;
            color: white;
        }

        th.total_general{
            background-color: #FBF9D5;
            text-align: right;
            color: black;
        }

        td.numero{
            text-align: right;
        }

        td.numero_menor{
            text-align: right;
            color: red;
            font-weight: bolder;
        }

        td.numero_mayor{
            text-align: right;
            color: green;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<?php
function colorear($valor){
    if($valor < 10){
        return "numero_menor";
    } elseif ($valor > 100) {
        return "numero_mayor";
    } else {
        return "numero";
    }
}

function suma($v1, $v2){
    return $v1 + $v2;
}

function impuesto($valor){
    return $valor * 10 / 100;
}

$productos = array(
    array("Libreria", 2.32),
    array("Ferreteria", 150.36),
    array("Carniceria", 120.55),
    array("Verduleria", 61.5),
    array("Comida", 3.84),
    array("Muebleria", 50.84)
);
?>
<h1>Tabla condicional con PHP</h1>
<table>
    <caption>Tabla de generada</caption>
    <thead>
        <tr><th>Producto</th><th>Precio ($)</th><th>Impuesto ($)</th><th>Total ($)</th></tr>
    </thead>
    <tbody>
        <?php
        $total_general = 0;
        foreach ($productos as $fila) {
            echo "<tr><td>".$fila[0]."</td><td class='numero'>", round($fila[1]) ,"</td><td class='numero'>", round(impuesto($fila[1])) ,"</td><td class='", colorear(suma($fila[1], impuesto($fila[1]))), "'>", round(suma($fila[1], impuesto($fila[1]))) ,"</td></tr>";
            $total_general += suma($fila[1], impuesto($fila[1]));
        }
        ?>
    </tbody>
    <tfoot>
        <tr><th colspan="3">Total General</th><th class="total_general">
        <?php
            echo round($total_general);
        ?>
        </th></tr>
    </tfoot>
</table>
</body>
</html>