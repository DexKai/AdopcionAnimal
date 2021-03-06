<?php
$this->breadcrumbs=array(
	'Animales'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Animales','url'=>array('index')),
array('label'=>'Crear Animal','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('animal-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Animales</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'animal-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		

		'nombre_animal',
		array(
			'name'=>'id_especie',
			'header'=>'Especie',
			'value'=>'$data->idEspecie->nombre_especie',
			'filter' =>CHtml::listData(Especie::model()->findAll(),'id_especie','nombre_especie'),
		),

		array(
			'name'=>'id_raza',
			'header'=>'Raza',
			'value' =>'Raza::getRaza($data->id_raza)',
			'filter' =>CHtml::listData(Raza::model()->findAll(),'id_raza','nombre_raza'),
		),

		array(
			'name'=>'genero_animal',
			'header'=>'Género',
			'value' =>'$data->genero_animal',
			'filter' =>array('Macho'=>'Macho','Hembra'=>'Hembra'),
			),
		array(
			'name'=>'adoptado',
			'header'=>'Adoptado',
			'value' =>'$data->adoptado',
			'filter' =>array('No'=>'No','Si'=>'Si'),
			),
		/*
		'id_animal',
		'edad_animal',
		'id_color',
		'peso',
		'desparasitado',
		'esterilizado',
		'vacunas',
		'observaciones',
		array('name'=>'fecha_ingreso','type'=>'date'),
		'image',

		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
