<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id_noticia,
);

$this->menu=array(
array('label'=>'List Noticia','url'=>array('index')),
array('label'=>'Create Noticia','url'=>array('create')),
array('label'=>'Update Noticia','url'=>array('update','id'=>$model->id_noticia)),
array('label'=>'Delete Noticia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_noticia),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Noticia','url'=>array('admin')),
);
?>

<h1>View Noticia #<?php echo $model->id_noticia; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		//'id_noticia',
		'titulo',
		'fecha_publicacion',
		'cuerpo',
		array(
 			'label'=>'Foto',
 			'type'=>'raw',
 			'value'=> CHtml::image(Yii::app()->baseUrl.'/images/Noticia/' . $model->image,'imagen',array("height"=>300, "width"=>400)),
		),
),
)); ?>
