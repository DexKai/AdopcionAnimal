<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	$model->id_noticia,
);

$this->menu=array(
array('label'=>'Lista Noticias','url'=>array('index')),
array('label'=>'Crear Noticia','url'=>array('create')),
array('label'=>'Actualizar Noticia','url'=>array('update','id'=>$model->id_noticia)),
array('label'=>'Eliminar Noticia','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_noticia),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Noticias','url'=>array('admin')),
);
?>

<h1>Ver Noticia #<?php echo $model->id_noticia; ?></h1>

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
