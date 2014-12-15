<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	'Administrar',
);

$this->menu=array(
array('label'=>'Lista Personas','url'=>array('index')),
array('label'=>'Crear Persona','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('persona-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Administrar Personas</h1>

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'persona-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'id_rut',
		//'iduser',
		'nombre',
		'apellido_p',
		'telefono',
		'direccion',
		array(
			'name'=>'id_comuna',
			'header'=>'Comuna',
			'filter' => Persona::getMenuComunas(),
			'value'=> '$data->idComuna->nombre_comuna',
		),
		array(
			'name'=>'lista',
			'header'=>'Lista',
			'value' =>'$data->lista',
			'filter' =>array('Blanca'=>'Blanca','Gris'=>'Gris','Negra'=>'Negra'),
			),
		//'apellido_m',
		//'fecha_nacimiento',
		/*
		'genero',
		
		'id_provincia',
		'id_region',
		'lista',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
