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
		//'iduser',
		array(
			'name' => 'nombre',
			'header'=>'Nombre Completo',
			'value'=>$model->getFullName('id_rut'),
		),
		array('name'=>'fecha_nacimiento','type'=>'date'),
		'genero',
		'direccion',
		array(
			'name'=>'id_comuna',
			'header'=>'Comuna',
			'value'=>$model->idComuna->nombre_comuna,
		),
		array(
			'name'=>'id_provincia',
			'header'=>'Provincia',
			'value' =>Persona::getMenuProvincias($model->id_provincia),
		),
		array(
			'name'=>'id_region',
			'header'=>'Región',
			'value' =>Persona::getMenuRegiones($model->id_region),
		),
		'telefono',
		'lista',
),
)); ?>
