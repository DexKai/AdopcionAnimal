<div class="view">
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_noticia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_noticia),array('view','id'=>$data->id_noticia)); ?>
	<br />*/
 ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_publicacion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_publicacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cuerpo')); ?>:</b>
	<?php echo CHtml::encode($data->cuerpo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::image(Yii::app()->baseUrl.'/images/Noticia/'.$data->image,'imagen',array("height"=>300, "width"=>400)); ?>
	<br />


</div>