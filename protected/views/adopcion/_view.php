<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_adopcion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adopcion),array('view','id'=>$data->id_adopcion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::encode($data->id_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT')); ?>:</b>
	<?php echo CHtml::encode($data->RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_adopcion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_adopcion); ?>
	<br />


</div>