<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Raza','url'=>array('index')),
array('label'=>'Manage Raza','url'=>array('admin')),
);
?>

<h1>Create Raza</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>