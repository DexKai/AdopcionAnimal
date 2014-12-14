<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->id_especie=>array('view','id'=>$model->id_especie),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Especies','url'=>array('index')),
	array('label'=>'Crear Especie','url'=>array('create')),
	array('label'=>'Ver Especie','url'=>array('view','id'=>$model->id_especie)),
	array('label'=>'Administrar Especies','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Especie <?php echo $model->id_especie; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>