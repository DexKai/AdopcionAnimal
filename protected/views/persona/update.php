<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_rut=>array('view','id'=>$model->id_rut),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Personas','url'=>array('index')),
	array('label'=>'Crear Persona','url'=>array('create')),
	array('label'=>'Ver Persona','url'=>array('view','id'=>$model->id_rut)),
	array('label'=>'Administrar Personas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Persona <?php echo $model->id_rut; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>