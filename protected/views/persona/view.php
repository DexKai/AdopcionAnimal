<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->id_rut,
);

$this->menu=array(
array('label'=>'List Persona','url'=>array('index')),
array('label'=>'Create Persona','url'=>array('create')),
array('label'=>'Update Persona','url'=>array('update','id'=>$model->id_rut)),
array('label'=>'Delete Persona','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_rut),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Persona','url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->id_rut; ?></h1>

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
