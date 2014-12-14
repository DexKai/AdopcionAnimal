<?php
$this->breadcrumbs=array(
	'Adopcions'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Adopciones','url'=>array('index')),
array('label'=>'Crear Adopción','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('adopcion-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Adopciones</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'adopcion-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_adopcion',
		'id_animal',
		'id_rut',
		'fecha_adopcion',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
