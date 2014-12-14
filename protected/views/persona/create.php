<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Personas','url'=>array('index')),
array('label'=>'Administrar Personas','url'=>array('admin')),
);
?>

<h1>Crear Persona</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>