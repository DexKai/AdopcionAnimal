<?php
$this->breadcrumbs=array(
	'Adopciones'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Adopciones','url'=>array('index')),
array('label'=>'Administrar Adopciones','url'=>array('admin')),
);
?>

<h1>Crear Adopción</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>