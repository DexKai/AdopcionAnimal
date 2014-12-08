<?php
$this->breadcrumbs=array(
	'Animals'=>array('index'),
	$model->id_animal=>array('view','id'=>$model->id_animal),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Animal','url'=>array('index')),
	array('label'=>'Create Animal','url'=>array('create')),
	array('label'=>'View Animal','url'=>array('view','id'=>$model->id_animal)),
	array('label'=>'Manage Animal','url'=>array('admin')),
	);
	?>

	<h1>Update Animal <?php echo $model->id_animal; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>