<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	$model->id_raza=>array('view','id'=>$model->id_raza),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Raza','url'=>array('index')),
	array('label'=>'Create Raza','url'=>array('create')),
	array('label'=>'View Raza','url'=>array('view','id'=>$model->id_raza)),
	array('label'=>'Manage Raza','url'=>array('admin')),
	);
	?>

	<h1>Update Raza <?php echo $model->id_raza; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>