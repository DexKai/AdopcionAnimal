<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_rut,
);

$this->menu=array(
array('label'=>'Lista Personas','url'=>array('index')),
array('label'=>'Crear Persona','url'=>array('create')),
array('label'=>'Actualizar Persona','url'=>array('update','id'=>$model->id_rut)),
array('label'=>'Eliminar Persona','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rut),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Personas','url'=>array('admin')),
);
?>

<h1>Ver Persona #<?php echo $model->id_rut; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_rut',
		'iduser',
		'nombre',
		'apellido_p',
		'apellido_m',
		'fecha_nacimiento',
		'genero',
		'direccion',
		'id_comuna',
		'id_provincia',
		'id_region',
		'telefono',
),
)); ?>
