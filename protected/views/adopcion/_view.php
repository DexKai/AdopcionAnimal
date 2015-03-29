<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ver Detalle')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_adopcion),array('view','id'=>$data->id_adopcion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_animal')); ?>:</b>
	<?php echo CHtml::encode($data->idAnimal->nombre_animal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rut')); ?>:</b>
	<?php echo CHtml::encode($data->idRut->getFullName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_adopcion')); ?>:</b>
	<?php //echo CHtml::encode($data->fecha_adopcion); ?>
	<?php echo CHtml::encode($this->formatearFecha($data->fecha_adopcion)); ?>
	<br />


</div>