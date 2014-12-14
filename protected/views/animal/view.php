<?php
$this->breadcrumbs=array(
	'Animales'=>array('index'),
	$model->id_animal,
);

$this->menu=array(
array('label'=>'Lista Animales','url'=>array('index')),
array('label'=>'Crear Animal','url'=>array('create')),
array('label'=>'Editar Animal','url'=>array('update','id'=>$model->id_animal)),
array('label'=>'Eliminar Animal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id_animal),'confirm'=>'¿Está seguro que desea borrar este elemento?')),
array('label'=>'Administrar Animales','url'=>array('admin')),
);
?>

<h1>Ver Animal #<?php echo $model->id_animal; ?></h1>

<?php $this->widget('booster.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id_animal',
		'numero_chip',
		'nombre_animal',
		array(
			'name'=>'id_especie',
			'header'=>'Especie',
			'value'=>$model->idEspecie->nombre_especie,
		),
		'id_raza',
		array(
			'name'=>'id_color',
			'header'=>'Colores',
			'value'=>$model->idColor->nombre_color,
		),
		'genero_animal',
		'edad_animal',
		'peso',
		'desparasitado',
		'esterilizado',
		'vacunas',
		'observaciones',
		'fecha_ingreso',
		array(
 			'label'=>'Foto',
 			'type'=>'raw',
 			'value'=> CHtml::image(Yii::app()->baseUrl.'/images/Animal/' . $model->image,'imagen',array("height"=>300, "width"=>400)),
		),
		'adoptado',
),
)); ?>
