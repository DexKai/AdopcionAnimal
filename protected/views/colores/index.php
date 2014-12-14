<?php
$this->breadcrumbs=array(
	'Colores',
);

$this->menu=array(
array('label'=>'Crear Color','url'=>array('create')),
array('label'=>'Administrar Colores','url'=>array('admin')),
);
?>

<h1>Colores</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
