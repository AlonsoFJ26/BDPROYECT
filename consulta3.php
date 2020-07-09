<?php

require_once 'consulta3.3.php';
require_once 'consulta3.3.3.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 3</title>
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
    <h2>_________________________________________________________________________________________________________________________________</h2>
    <h2>A continuacion, mostramos los datos de Codigo de Convocatoria, Entidad y Entidad Distrito, de los cuales, <h2>llamamos de otra tabla a Codigo de Convocatoria y además, se mostrarán los datos de Entidad Distrito que termine con <h2>la letra 'a'.</h2></h2></h2>
    <h2>_________________________________________________________________________________________________________________________________</h2>   
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table border="6">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Codigo_Convocatoria</th>
                            <th style="text-align:center;">Entidad</th>
                            <th style="text-align:center;">Entidad Distrito</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Codigo_Convocatoria'); ?></td>
                            <td><?php echo $r->__GET('Entidad'); ?></td>
                            <td><?php echo $r->__GET('EntidadDistrito'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
            </div>
        </div>

    </body>
</html>