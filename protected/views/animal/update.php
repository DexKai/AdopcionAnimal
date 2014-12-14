<?php
$this->breadcrumbs=array(
	'Animales'=>array('index'),
	$model->id_animal=>array('view','id'=>$model->id_animal),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Animales','url'=>array('index')),
	array('label'=>'Crear Animal','url'=>array('create')),
	array('label'=>'Ver Animal','url'=>array('view','id'=>$model->id_animal)),
	array('label'=>'Administrar Animales','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Animal <?php echo $model->id_animal; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>