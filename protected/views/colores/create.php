<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Colores','url'=>array('index')),
array('label'=>'Administrar Colores','url'=>array('admin')),
);
?>

<h1>Crear Color</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>