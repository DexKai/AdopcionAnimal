<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	$model->id_color=>array('view','id'=>$model->id_color),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Colores','url'=>array('index')),
	array('label'=>'Crear Color','url'=>array('create')),
	array('label'=>'Ver Color','url'=>array('view','id'=>$model->id_color)),
	array('label'=>'Administrar Colores','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Color <?php echo $model->id_color; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>