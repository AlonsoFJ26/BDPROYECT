<?php

require_once 'consulta1.1.php';
require_once 'consulta1.1.2.php';

$alm = new Datos();
$model = new Consulta();

?>

<!DOCTYPE html>
<html lang="es">
	<head>
        <title>Consulta 1</title>
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
        <h2>___________________________________________________________________________________</h2>
        <h2>A continuacion, presentamos la Fecha de Convocatoria, Descripcion del Proceso y el Objeto Contraactual <h2>de acuerdo a que el Objeto Contraactual empiece con la letra 'B'.</h2></h2>
        <h2>___________________________________________________________________________________</h2>
        <div class="pure-g">
            <div class="pure-u-1-1">
                <table  border="6">
                    <thead>
                        <tr>
                            <th style="text-align:center;">Fecha_Convocatoria</th>
                            <th style="text-align:center;">Descripcion_Proceso</th>
                            <th style="text-align:center;">Objeto_Contractual</th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Fecha_Convocatoria'); ?></td>
                            <td><?php echo $r->__GET('Descripcion_Proceso'); ?></td>
                            <td><?php echo $r->__GET('Objeto_Contractual'); ?></td>

                        </tr>
                    <?php endforeach; ?>
                </table>   
            </div>
        </div>
    </body>
</html>
