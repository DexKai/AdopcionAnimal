<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_raza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_raza),array('view','id'=>$data->id_raza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_especie')); ?>:</b>
	<?php echo CHtml::encode($data->id_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_color')); ?>:</b>
	<?php echo CHtml::encode($data->id_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_raza')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_raza); ?>
	<br />


</div>