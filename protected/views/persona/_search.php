<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldGroup($model,'id_rut',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>

		<?php echo $form->textFieldGroup($model,'iduser',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

		<?php echo $form->textFieldGroup($model,'apellido_p',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

		<?php echo $form->textFieldGroup($model,'apellido_m',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

		<?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array(),'htmlOptions'=>array('class'=>'span5')), 'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>', 'append'=>'Click on Month/Year to select a different Month/Year.')); ?>

		<?php echo $form->dropDownListGroup($model,'genero', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Masculino"=>"Masculino","Femenino"=>"Femenino",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

		<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1024)))); ?>

		<?php echo $form->textFieldGroup($model,'id_comuna',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'id_provincia',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'id_region',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

		<?php echo $form->dropDownListGroup($model,'lista', array('widgetOptions'=>array('data'=>array("Lista Blanca"=>"Lista Blanca","Lista Gris"=>"Lista Gris","Lista Negra"=>"Lista Negra",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<div class="form-actions">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType' => 'submit',
			'context'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
