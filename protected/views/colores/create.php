<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Colores','url'=>array('index')),
array('label'=>'Manage Colores','url'=>array('admin')),
);
?>

<h1>Create Colores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>