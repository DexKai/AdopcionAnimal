<?php
$this->breadcrumbs=array(
	'Animals'=>array('index'),
	$model->id_animal,
);

$this->menu=array(
array('label'=>'List Animal','url'=>array('index')),
array('label'=>'Create Animal','url'=>array('create')),
array('label'=>'Update Animal','url'=>array('update','id'=>$model->id_animal)),
array('label'=>'Delete Animal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_animal),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Animal','url'=>array('admin')),
);
?>

<h1>View Animal #<?php echo $model->id_animal; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_animal',
		'id_especie',
		'numero_chip',
		'nombre_animal',
		'edad_animal',
		'genero_animal',
		'peso',
		'desparasitado',
		'esterilizado',
		'vacunas',
		'observaciones',
		'fecha_ingreso',
		'adoptado',
		'image',
),
)); ?>
