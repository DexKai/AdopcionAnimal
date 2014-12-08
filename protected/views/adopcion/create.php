<?php
$this->breadcrumbs=array(
	'Adopcions'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Adopcion','url'=>array('index')),
array('label'=>'Manage Adopcion','url'=>array('admin')),
);
?>

<h1>Create Adopcion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>