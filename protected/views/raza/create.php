<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Raza','url'=>array('index')),
array('label'=>'Administrar Razas','url'=>array('admin')),
);
?>

<h1>Crear Raza</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>