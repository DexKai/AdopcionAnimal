<?php
$this->breadcrumbs=array(
	'Personas'=>array('index'),
	$model->RUT,
);

$this->menu=array(
array('label'=>'List Persona','url'=>array('index')),
array('label'=>'Create Persona','url'=>array('create')),
array('label'=>'Update Persona','url'=>array('update','id'=>$model->RUT)),
array('label'=>'Delete Persona','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->RUT),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Persona','url'=>array('admin')),
);
?>

<h1>View Persona #<?php echo $model->RUT; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'RUT',
		'iduser',
		'id_comuna',
		'nombre',
		'apellido_p',
		'apellido_m',
		'genero',
		'direccion',
		'telefono',
),
)); ?>
