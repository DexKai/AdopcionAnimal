<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	$model->id_raza,
);

$this->menu=array(
array('label'=>'Lista Razas','url'=>array('index')),
array('label'=>'Crear Raza','url'=>array('create')),
array('label'=>'Actualizar Raza','url'=>array('update','id'=>$model->id_raza)),
array('label'=>'Eliminar Raza','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_raza),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Razas','url'=>array('admin')),
);
?>

<h1>Ver Raza #<?php echo $model->id_raza; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_raza',
		array(
			'name'=>'id_especie',
			'header'=>'Especie',
			'value'=>$model->idEspecie->nombre_especie,
		),
		'nombre_raza',
),
)); ?>
