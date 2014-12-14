<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_especie')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_especie),array('view','id'=>$data->id_especie)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_especie')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_especie); ?>
	<br />


</div>