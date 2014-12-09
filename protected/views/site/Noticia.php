<?php

$data = noticia::model()->findAllBySQL("SELECT * FROM noticia order by fecha_publicacion DESC limit 5");

foreach ($data as $datos) {

echo "<p>";
$fecha=date('d/m/Y',strtotime($datos->FECHA));
$texto= $fecha." - ".$datos->cuerpo;

echo CHtml::link($texto,array('/noticia/', 'id'=>1));
echo "</p>";
}