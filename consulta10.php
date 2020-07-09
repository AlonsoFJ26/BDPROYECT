<?php

require_once 'consulta10.10.php';
require_once 'consulta10.10.10.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 10</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <style>
            h2{
                font-family: georgia,'Times New Roman', Times, serif;
            }
        </style>
	</head>
    <body style="padding:30px;">
    <a href="index.html"><button type="button"  class="btn btn-outline-success" style="padding:5px">Inicio </button></a>
    <h2>_____________________________________________________________________________________________________________________________________</h2>
    <h2>A continuacion, presentamos los datos de Ruc Proveedor, Tipo de Proveedor y Entidad, de los cuales, los datos de <h2>Entidad son de otra tabla y, además, se muestran los datos si se cumple que el Monto es menor a 100000</h2></h2>
    <h2>_____________________________________________________________________________________________________________________________________</h2>
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table border="6">
                    <thead>
                            <th style="text-align:center;">Ruc de Proveedor</th>
                            <th style="text-align:center;">Tipo de Proveedor</th>
                            <th style="text-align:center;">Entidad</th>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Ruc_Proveedor'); ?></td>
                            <td><?php echo $r->__GET('Tipo_Proveedor'); ?></td>
                            <td><?php echo $r->__GET('Entidad'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
            </div>
        </div>

    </body>
</html>