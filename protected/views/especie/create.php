<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Especies','url'=>array('index')),
array('label'=>'Administrar Especies','url'=>array('admin')),
);
?>

<h1>Crear Especie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>