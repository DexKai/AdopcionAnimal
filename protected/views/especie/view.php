<?php
$this->breadcrumbs=array(
	'Especies'=>array('index'),
	$model->id_especie,
);

$this->menu=array(
array('label'=>'List Especie','url'=>array('index')),
array('label'=>'Create Especie','url'=>array('create')),
array('label'=>'Update Especie','url'=>array('update','id'=>$model->id_especie)),
array('label'=>'Delete Especie','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_especie),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Especie','url'=>array('admin')),
);
?>

<h1>View Especie #<?php echo $model->id_especie; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_especie',
		'nombre_especie',
),
)); ?>
