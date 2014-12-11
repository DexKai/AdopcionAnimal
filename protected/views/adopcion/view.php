<?php
$this->breadcrumbs=array(
	'Adopcions'=>array('index'),
	$model->id_adopcion,
);

$this->menu=array(
array('label'=>'List Adopcion','url'=>array('index')),
array('label'=>'Create Adopcion','url'=>array('create')),
array('label'=>'Update Adopcion','url'=>array('update','id'=>$model->id_adopcion)),
array('label'=>'Delete Adopcion','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_adopcion),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Adopcion','url'=>array('admin')),
);
?>

<h1>View Adopcion #<?php echo $model->id_adopcion; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_adopcion',
		'id_animal',
		'id_rut',
		'fecha_adopcion',
),
)); ?>
