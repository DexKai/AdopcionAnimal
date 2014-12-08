<?php
$this->breadcrumbs=array(
	'Colores',
);

$this->menu=array(
array('label'=>'Create Colores','url'=>array('create')),
array('label'=>'Manage Colores','url'=>array('admin')),
);
?>

<h1>Colores</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
