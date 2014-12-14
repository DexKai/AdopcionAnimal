<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Crear',
);

$this->menu=array(
array('label'=>'Lista Noticias','url'=>array('index')),
array('label'=>'Administrar Noticias','url'=>array('admin')),
);
?>

<h1>Crear Noticia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>