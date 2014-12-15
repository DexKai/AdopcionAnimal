<?php
$this->breadcrumbs=array(
	'Adopciones'=>array('index'),
	$model->id_adopcion,
);

$this->menu=array(
array('label'=>'Lista Adopciones','url'=>array('index')),
//array('label'=>'Crear Adopción','url'=>array('create')),
array('label'=>'Actualizar Adopción','url'=>array('update','id'=>$model->id_adopcion)),
array('label'=>'Eliminar Adopción','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adopcion),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Adopciones','url'=>array('admin')),
);
?>

<h1>Ver Adopción #<?php echo $model->id_adopcion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_adopcion',
		array(
			'name'=>'id_animal',
			'header'=>'Mascota',
			'value'=>$model->idAnimal->nombre_animal,
		),
		array(
			'name'=>'id_rut',
			'header'=>'Nombre',
			'value'=> $model->idRut->getFullName(),
		),
		array('name'=>'fecha_adopcion','type'=>'date'),
),
)); ?>
