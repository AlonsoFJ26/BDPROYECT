<?php

require_once 'consulta6.6.php';
require_once 'consulta6.6.6.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 6</title>
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
    <h2>_______________________________________________________________________________________________________________________________</h2>
    <h2>A continuacion, presentamos los datos de Ruc de Proveedor, Monto, Moneda y la URL, de los cuales Moneda y URL <h2>son extraidos de  otra tabla y, además, se cumple que el monto sea mayor a 200000</h2></h2>
    <h2>_______________________________________________________________________________________________________________________________</h2>
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table border="6">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Ruc de Proveedor</th>
                            <th style="text-align:center;">Monto</th>
                            <th style="text-align:center;">Moneda</th>
                            <th style="text-align:center;">Url</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Ruc_Proveedor'); ?></td>
                            <td><?php echo $r->__GET('Monto'); ?></td>
                            <td><?php echo $r->__GET('Moneda'); ?></td>
                            <td><?php echo $r->__GET('Url'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
            </div>
        </div>

    </body>
</html>