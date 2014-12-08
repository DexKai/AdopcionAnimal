<?php
$this->breadcrumbs=array(
	'Colores'=>array('index'),
	$model->id_color,
);

$this->menu=array(
array('label'=>'List Colores','url'=>array('index')),
array('label'=>'Create Colores','url'=>array('create')),
array('label'=>'Update Colores','url'=>array('update','id'=>$model->id_color)),
array('label'=>'Delete Colores','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_color),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Colores','url'=>array('admin')),
);
?>

<h1>View Colores #<?php echo $model->id_color; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_color',
		'nombre_color',
),
)); ?>
