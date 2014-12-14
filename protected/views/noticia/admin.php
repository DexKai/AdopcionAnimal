<?php
$this->breadcrumbs=array(
	'Noticias'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Noticias','url'=>array('index')),
array('label'=>'Crear Noticia','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('noticia-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Noticias</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'noticia-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		//'id_noticia',
		'titulo',
		'fecha_publicacion',
		'cuerpo',
		//'image',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
