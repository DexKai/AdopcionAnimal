<?php
$this->breadcrumbs=array(
	'Razas'=>array('index'),
	$model->id_raza,
);

$this->menu=array(
array('label'=>'List Raza','url'=>array('index')),
array('label'=>'Create Raza','url'=>array('create')),
array('label'=>'Update Raza','url'=>array('update','id'=>$model->id_raza)),
array('label'=>'Delete Raza','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_raza),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Raza','url'=>array('admin')),
);
?>

<h1>View Raza #<?php echo $model->id_raza; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_raza',
		'id_especie',
		'id_color',
		'nombre_raza',
),
)); ?>
