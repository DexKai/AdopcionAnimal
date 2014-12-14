<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_raza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_raza),array('view','id'=>$data->id_raza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_especie')); ?>:</b>
	<?php echo CHtml::encode($data->idEspecie->nombre_especie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_raza')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_raza); ?>
	<br />


</div>