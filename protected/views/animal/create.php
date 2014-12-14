<?php
$this->breadcrumbs=array(
	'Animales'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Animales','url'=>array('index')),
array('label'=>'Administrar Animales','url'=>array('admin')),
);
?>

<h1>Crear Animal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>