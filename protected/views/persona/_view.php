<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_rut),array('view','id'=>$data->id_rut)); ?>
	<br />

	<b><?php echo CHtml::encode('Nombre'); ?>:</b>
	<?php echo CHtml::encode($data->nombre.' '.$data->apellido_p.' '.$data->apellido_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_nacimiento')); ?>:</b>
	<?php //echo CHtml::encode($data->fecha_nacimiento); ?>
	<?php echo CHtml::encode($this->formatearFecha($data->fecha_nacimiento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<?php /*

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_p')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_p); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_m')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_m); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iduser')); ?>:</b>
	<?php echo CHtml::encode($data->iduser); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_comuna')); ?>:</b>
	<?php echo CHtml::encode($data->id_comuna); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_provincia')); ?>:</b>
	<?php echo CHtml::encode($data->id_provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_region')); ?>:</b>
	<?php echo CHtml::encode($data->id_region); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	*/ ?>

</div>