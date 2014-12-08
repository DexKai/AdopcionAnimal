<?php
$this->breadcrumbs=array(
	'Animals'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Animal','url'=>array('index')),
array('label'=>'Manage Animal','url'=>array('admin')),
);
?>

<h1>Create Animal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>