<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->id_especie=>array('view','id'=>$model->id_especie),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Especie','url'=>array('index')),
	array('label'=>'Create Especie','url'=>array('create')),
	array('label'=>'View Especie','url'=>array('view','id'=>$model->id_especie)),
	array('label'=>'Manage Especie','url'=>array('admin')),
	);
	?>

	<h1>Update Especie <?php echo $model->id_especie; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>