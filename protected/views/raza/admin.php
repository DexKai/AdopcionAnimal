<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Raza','url'=>array('index')),
array('label'=>'Create Raza','url'=>array('create')),
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

<h1>Manage Razas</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
