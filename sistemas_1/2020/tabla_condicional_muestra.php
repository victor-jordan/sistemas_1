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
    
?>
<h1>Tabla con colores condicionales</h1>
<!-- ESTRUCTURA GENERAL DE UNA TABLA HTML
<table>
    <caption>Describe la naturaleza de la tabla</caption>
    <thead><tr><th>La cabecera de las columnas</th></tr></thead>
    <tbody><tr><td>El cuerpo contiene la información</td></tr></tbody>
    <tfoot><tr><th>Pie puede ser igual a la cabecera</th></tr></tfoot>
</table> -->
<table>
    <caption>Tabla de muestra</caption>
    <thead>
        <tr><th>Producto</th><th>Precio ($)</th><th>Impuesto ($)</th><th>Total ($)</th></tr>
    </thead>
    <tbody>
        <tr><td>Cuaderno</td><td class="numero">5.2</td><td class="numero">0.52</td><td class="numero_menor">5.72</td></tr>
        <tr><td>Ferreteria</td><td class="numero">124.36</td><td class="numero">12.436</td><td class="numero_mayor">136.796</td></tr>
        <tr><td>Carniceria</td><td class="numero">20.5</td><td class="numero">2.05</td><td class="numero">22.55</td></tr>
    </tbody>
    <tfoot>
        <tr><th colspan="3">Total General</th><th class="total_general">165.066</th></tr>
    </tfoot>
</table>
</body>
</html>