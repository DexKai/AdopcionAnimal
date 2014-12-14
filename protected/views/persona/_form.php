<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'persona-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldGroup($model,'id_rut',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>12)))); ?>

	<?php echo $form->textFieldGroup($model,'iduser',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

	<?php echo $form->textFieldGroup($model,'nombre',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textFieldGroup($model,'apellido_p',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

	<?php echo $form->textFieldGroup($model,'apellido_m',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>100)))); ?>

    <?php echo $form->datePickerGroup($model,'fecha_nacimiento',array('widgetOptions'=>array('options'=>array(
            'format' => 'yyyy-mm-dd',
            'viewformat' => 'mm/dd/yyyy',
            'language' => 'es'),
     
            'htmlOptions'=>array('class'=>'span5')),
            'prepend'=>'<i class="glyphicon glyphicon-calendar"></i>')); ?>



	<?php echo $form->dropDownListGroup($model,'genero', array('widgetOptions'=>array('data'=>array("Sin definir"=>"Sin definir","Masculino"=>"Masculino","Femenino"=>"Femenino",), 'htmlOptions'=>array('class'=>'input-large')))); ?>

	<?php echo $form->textFieldGroup($model,'direccion',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1024)))); ?>

	<?php echo $form->dropDownListGroup($model,
										'id_region',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuRegiones(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												'ajax' =>array(
													'url'=>$this->createUrl('provinciasPorRegion'),
													'type'=>'POST',
													'update'=>'#Persona_id_provincia'))))
										); ?>

	<?php echo $form->dropDownListGroup($model,
										'id_provincia',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuProvincias(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												'ajax' =>array(
													'url'=>$this->createUrl('comunasPorProvincia'),
													'type'=>'POST',
													'update'=>'#Persona_id_comuna'))))
										); ?>

	<?php echo $form->dropDownListGroup($model,
										'id_comuna',
										array(
											'widgetOptions'=>array('data'=>$model->getMenuComunas(),
											'htmlOptions'=>array(
												'empty'=>'Seleccione...',
												'class'=>'input-large',
												)))
										); ?>

	<?php echo $form->textFieldGroup($model,'telefono',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5')))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
