<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_color')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_color),array('view','id'=>$data->id_color)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_color')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_color); ?>
	<br />


</div>