<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id_noticia=>array('view','id'=>$model->id_noticia),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Noticia','url'=>array('index')),
	array('label'=>'Create Noticia','url'=>array('create')),
	array('label'=>'View Noticia','url'=>array('view','id'=>$model->id_noticia)),
	array('label'=>'Manage Noticia','url'=>array('admin')),
	);
	?>

	<h1>Update Noticia <?php echo $model->id_noticia; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>