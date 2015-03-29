<?php
$this->breadcrumbs=array(
	'Adopcions'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Adopciones','url'=>array('index')),
//array('label'=>'Crear Adopción','url'=>array('create')),
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
		//'id_adopcion',
		array(
			'name'=>'id_animal',
			'header'=>'Mascota',
			'filter' => CHtml::listData(Animal::model()->findAll(),'id_animal','nombre_animal'),
			'value'=> '$data->idAnimal->nombre_animal',
		),
		array(
			'name'=>'id_rut',
			'header'=>'Nombre',
			'filter' => Persona::getPersona(),
			'value'=> '$data->idRut->getFullName()',
		),
		//array('name'=>'fecha_adopcion','type'=>'date'),
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
