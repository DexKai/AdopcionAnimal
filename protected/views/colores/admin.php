<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Colores','url'=>array('index')),
array('label'=>'Crear Color','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('colores-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Colores</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'colores-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_color',
		'nombre_color',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
