<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Especies','url'=>array('index')),
array('label'=>'Crear Especie','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('especie-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Especies</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'especie-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_especie',
		'nombre_especie',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
