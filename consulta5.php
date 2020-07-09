<?php

require_once 'consulta5.5.php';
require_once 'consulta5.5.5.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 5</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <style>
            h2{
                font-family: georgia,'Times New Roman', Times, serif;
            }
        </style>
	</head>
    <body style="padding:30px;">
    <a href="index.html"><button type="button"  class="btn btn-outline-success">Inicio </button></a>
    <h2>________________________________________________________________________________________________________________________________</h2>
    <h2>A continuacion, presentaremos los datos de Numero de Item, Item por Departamento y Estado del Item, de los cuales<h2>se mostrarán si cumple que, el Item por Departamento  termine en la letra 'a' y que Numero de Item sea mayor a 1000</h2</h2>
    <h2>________________________________________________________________________________________________________________________________</h2>
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table border="6">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Numero Item</th>
                            <th style="text-align:center;">Item Departamento</th>
                            <th style="text-align:center;">Estado Item</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Num_Item'); ?></td>
                            <td><?php echo $r->__GET('Item_Departamento'); ?></td>
                            <td><?php echo $r->__GET('Estado_Item'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
            </div>
        </div>

    </body>
</html>