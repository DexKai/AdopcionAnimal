<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Razas','url'=>array('index')),
array('label'=>'Crear Raza','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('raza-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Razas</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'raza-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		//'id_raza',
		array(
			'name'=>'id_especie',
			'header'=>'Especie',
			'value'=>'$data->idEspecie->nombre_especie',
			'filter' =>CHtml::listData(Especie::model()->findAll(),'id_especie','nombre_especie'),
		),
		'nombre_raza',
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
