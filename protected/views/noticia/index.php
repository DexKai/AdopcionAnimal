<?php
$this->breadcrumbs=array(
	'Noticias',
);

$this->menu=array(
array('label'=>'Crear Noticia','url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
array('label'=>'Administrar Noticias','url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h1>Noticias</h1>

<?php $this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
