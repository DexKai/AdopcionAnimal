<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	$model->id_color=>array('view','id'=>$model->id_color),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Colores','url'=>array('index')),
	array('label'=>'Create Colores','url'=>array('create')),
	array('label'=>'View Colores','url'=>array('view','id'=>$model->id_color)),
	array('label'=>'Manage Colores','url'=>array('admin')),
	);
	?>

	<h1>Update Colores <?php echo $model->id_color; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>