<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->RUT=>array('view','id'=>$model->RUT),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Persona','url'=>array('index')),
	array('label'=>'Create Persona','url'=>array('create')),
	array('label'=>'View Persona','url'=>array('view','id'=>$model->RUT)),
	array('label'=>'Manage Persona','url'=>array('admin')),
	);
	?>

	<h1>Update Persona <?php echo $model->RUT; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>