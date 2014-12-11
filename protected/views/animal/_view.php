<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_animal),array('view','id'=>$data->id_animal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_chip')); ?>:</b>
	<?php echo CHtml::encode($data->numero_chip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_animal')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_especie')); ?>:</b>
	<?php echo CHtml::encode($data->id_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_raza')); ?>:</b>
	<?php echo CHtml::encode($data->id_raza); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_color')); ?>:</b>
	<?php echo CHtml::encode($data->id_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_animal')); ?>:</b>
	<?php echo CHtml::encode($data->genero_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad_animal')); ?>:</b>
	<?php echo CHtml::encode($data->edad_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desparasitado')); ?>:</b>
	<?php echo CHtml::encode($data->desparasitado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('esterilizado')); ?>:</b>
	<?php echo CHtml::encode($data->esterilizado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vacunas')); ?>:</b>
	<?php echo CHtml::encode($data->vacunas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::image(Yii::app()->baseUrl.'/images/Animal/'.$data->image,'imagen',array("height"=>300, "width"=>400)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adoptado')); ?>:</b>
	<?php echo CHtml::encode($data->adoptado); ?>
	<br />



</div>