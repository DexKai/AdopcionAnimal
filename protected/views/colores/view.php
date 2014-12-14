<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	$model->id_color,
);

$this->menu=array(
array('label'=>'Lista Colores','url'=>array('index')),
array('label'=>'Crear Color','url'=>array('create')),
array('label'=>'Actualizar Color','url'=>array('update','id'=>$model->id_color)),
array('label'=>'Eliminar Color','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_color),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Colores','url'=>array('admin')),
);
?>

<h1>Ver Color #<?php echo $model->id_color; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_color',
		'nombre_color',
),
)); ?>
