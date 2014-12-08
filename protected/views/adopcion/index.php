<?php
$this->breadcrumbs=array(
	'Adopcions',
);

$this->menu=array(
array('label'=>'Create Adopcion','url'=>array('create')),
array('label'=>'Manage Adopcion','url'=>array('admin')),
);
?>

<h1>Adopcions</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
