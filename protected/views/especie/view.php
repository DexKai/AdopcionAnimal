<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->id_especie,
);

$this->menu=array(
array('label'=>'Lista Especies','url'=>array('index')),
array('label'=>'Crear Especie','url'=>array('create')),
array('label'=>'Actualizar Especie','url'=>array('update','id'=>$model->id_especie)),
array('label'=>'Eliminar Especie','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_especie),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Especies','url'=>array('admin')),
);
?>

<h1>Ver Especie #<?php echo $model->id_especie; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_especie',
		'nombre_especie',
),
)); ?>
