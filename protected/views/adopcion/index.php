<?php
$this->breadcrumbs=array(
	'Adopciones',
);

$this->menu=array(
array('label'=>'Crear Adopción','url'=>array('create')),
array('label'=>'Administrar Adopciones','url'=>array('admin')),
);
?>

<h1>Adopciones</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
