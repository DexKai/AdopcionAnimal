<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id_noticia=>array('view','id'=>$model->id_noticia),
	'Actualizar',
);

	$this->menu=array(
	array('label'=>'Lista Noticias','url'=>array('index')),
	array('label'=>'Crear Noticia','url'=>array('create')),
	array('label'=>'Ver Noticia','url'=>array('view','id'=>$model->id_noticia)),
	array('label'=>'Administrar Noticias','url'=>array('admin')),
	);
	?>

	<h1>Actualizar Noticia <?php echo $model->id_noticia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>