<?php
$this->breadcrumbs=array(
	'Animals',
);

$this->menu=array(
array('label'=>'Create Animal','url'=>array('create')),
array('label'=>'Manage Animal','url'=>array('admin')),
);
?>

<h1>Animals</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
