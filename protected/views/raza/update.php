<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	$model->id_raza=>array('view','id'=>$model->id_raza),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Razas','url'=>array('index')),
	array('label'=>'Crear Raza','url'=>array('create')),
	array('label'=>'Ver Raza','url'=>array('view','id'=>$model->id_raza)),
	array('label'=>'Administrar Razas','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Raza <?php echo $model->id_raza; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>