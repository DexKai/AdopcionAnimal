<?php
$this->breadcrumbs=array(
	'Personas',
);

$this->menu=array(
array('label'=>'Crear Persona','url'=>array('create')),
array('label'=>'Administrar Personas','url'=>array('admin')),
);
?>

<h1>Personas</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
