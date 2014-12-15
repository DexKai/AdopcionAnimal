<?php
$this->breadcrumbs=array(
	'Adopciones'=>array('index'),
	$model->id_adopcion=>array('view','id'=>$model->id_adopcion),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Adopciones','url'=>array('index')),
	//array('label'=>'Crear Adopción','url'=>array('create')),
	array('label'=>'Ver Adopción','url'=>array('view','id'=>$model->id_adopcion)),
	array('label'=>'Administrar Adopciones','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Adopción <?php echo $model->id_adopcion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>