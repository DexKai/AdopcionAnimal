<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Noticia','url'=>array('index')),
array('label'=>'Manage Noticia','url'=>array('admin')),
);
?>

<h1>Create Noticia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>