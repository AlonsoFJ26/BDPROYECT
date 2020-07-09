<?php

require_once 'consulta9.9.php';
require_once 'consulta9.9.9.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 9</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <style>
            h2{
                font-family: georgia,'Times New Roman', Times, serif;
            }
        </style>
	</head>
    <body style="padding:30px;">
    <a href="index.html"><button type="button"  class="btn btn-outline-success" style="padding:10px">Inicio </button></a>
    <h2>___________________________________________________________________________________________________________________________</h2>
    <h2>A continuacion, se presentará los datos obtenidos del Ruc del Proveedor, Tipo de Proveedor y el Monto en Soles si se <h2>cumple que el Monto es menor a 100000</h2></h2>
    <h2>___________________________________________________________________________________________________________________________</h2>
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table  border="6">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Ruc de Proveedor</th>
                            <th style="text-align:center;">Tipo de Proveedor</th>
                            <th style="text-align:center;">Monto en Soles</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Ruc_Proveedor'); ?></td>
                            <td><?php echo $r->__GET('Tipo_Proveedor'); ?></td>
                            <td><?php echo $r->__GET('Monto'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
            </div>
        </div>

    </body>
</html>