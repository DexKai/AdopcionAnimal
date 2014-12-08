<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Especie','url'=>array('index')),
array('label'=>'Manage Especie','url'=>array('admin')),
);
?>

<h1>Create Especie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>