<?php
$this->breadcrumbs=array(
	'Adopcions'=>array('index'),
	$model->id_adopcion=>array('view','id'=>$model->id_adopcion),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Adopcion','url'=>array('index')),
	array('label'=>'Create Adopcion','url'=>array('create')),
	array('label'=>'View Adopcion','url'=>array('view','id'=>$model->id_adopcion)),
	array('label'=>'Manage Adopcion','url'=>array('admin')),
	);
	?>

	<h1>Update Adopcion <?php echo $model->id_adopcion; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>